<?php

add_theme_support('post-thumbnails');
// add_image_size('name', width, height, crop);



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
