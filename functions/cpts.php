<?php
/*
 * File name - resources.php
 * Add a custom post type to the standard wordpress build.
 */
function cpts_init(){
	/**
	 * Downloads Custom Post Type
	 */


	$corpi_labels = array(
		'name' => _x( 'Corpi', 'post type general name' ),
		'singular_name' => _x( 'Corpus', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Corpus' ),
		'add_new_item' => __( 'Add New ' . 'Corpus' ),
		'edit_item' => __( 'Edit ' . 'Corpus' ),
		'new_item' => __( 'New ' . 'Corpus' ),
		'view_item' => __( 'View ' . 'Corpus' ),
		'search_items' => __( 'Search ' . 'Corpi' ),
		'not_found' => __( 'No ' . 'Corpi' . ' found' ),
		'not_found_in_trash' => __( 'No ' . 'Corpi' . ' found in Trash' ),
		'parent_item_colon' => ''
	);
	$corpi_rewrite = array(
		'slug' => 'corpus',
		'with_front' => false
	);
	$corpi_args = array(
		'labels' => $corpi_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => $corpi_rewrite,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' )
	);

	// Register the custom post type.
	register_post_type( 'corpi', $corpi_args);
}

/*
 * Initiate the custom post type.
 */
add_action( 'init', 'cpts_init');


