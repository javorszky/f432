<?php

add_theme_support('post-thumbnails');

/**
 * Add new image sizes
 * Structure is 'name' => array( $width, $height, $crop )
 *
 * Reason we have to do this is due to the picturefill bit
 */

global $picture_sizes;
$picture_sizes = array(
	'small-img' => array( 300, 200, true, true ),
	'medium-img' => array( 700, 372, true, false ),
	'large-img' => array( 1000, 702, true, true )
);

foreach ($picture_sizes as $name => $data) {
	add_image_size( $name, $data[0], $data[1], $data[2] );
}



/**
 * Adds the medium and the full to the image size list in the editor, so people can only insert them
 * into pages and articles.
 */
function add_additional_image_sizes( $sizes ) {
	global $_wp_additional_image_sizes;
	if ( empty($_wp_additional_image_sizes) ) {
		return $sizes;
	}

	foreach ( $_wp_additional_image_sizes as $id => $data ) {
		if ( !isset($sizes[$id]) ) {
			$sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
		}
	}

	return $sizes;
}

add_filter( 'image_size_names_choose', 'add_additional_image_sizes' );


/**
 * For the picturefill
 */
function get_picturefill() {
	$r = get_stylesheet_directory_uri() . '/js/';
	wp_register_script( 'pictruefill', $r . 'vendor/picturefill.js', null, null, true);
	wp_enqueue_script( 'pictruefill' );
}


function get_picture_srcs( $image, $mappings ) {
	$arr = array();

	foreach ( $mappings as $size => $data ) {
		$image_src = wp_get_attachment_image_src( $image, $size );
		$arr[] ='<span data-src="'. $image_src[0] . ' "data-media="(min-width:'. $data[0] .'px)"></span>';
	}
	return implode($arr);
}


function responsive_img_shortcode( $atts ) {
	global $picture_sizes;
	$pix = array_filter( $picture_sizes, 'picture_sizes_for_picturefill' );

	extract(shortcode_atts(array(
		'imageid'    => 1,
	), $atts));

	return
		'<span data-picture>'
			. get_picture_srcs($imageid, $pix) .
			'<noscript>' . wp_get_attachment_image( $imageid, 'large' ) . '</noscript>
		</span>';
}


function picture_sizes_for_picturefill( $element ) {
	return $element[3];
}


function responsive_insert_image( $html, $id, $caption, $title, $align, $url ) {
  return "[responsive imageid='" . $id . "']";
}


add_filter( 'image_send_to_editor', 'responsive_insert_image', 10, 9);
add_action( 'wp_enqueue_scripts', 'get_picturefill' );
add_shortcode( 'responsive', 'responsive_img_shortcode' );





