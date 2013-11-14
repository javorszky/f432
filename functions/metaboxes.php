<?php
/*
 * File name - metaboxes.php
 * Meta box functionality has been created by Rilwis @ http://www.deluxeblogtips.com and can be downloaded as a plugin from the wordpress repository.
 * Use underscore (_) at the beginning to make keys hidden, for example $prefix = '_es_';
 */
$prefix = '_es_';

global $meta_boxes;

// Set up the array to store all the meta boxes data.
$meta_boxes = array();

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function _es_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', '_es_register_meta_boxes' );
