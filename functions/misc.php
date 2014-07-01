<?php
if( !function_exists('es_preit') ) {
	function es_preit( $obj, $echo = true ) {
		if( $echo ) {
			echo '<pre>' . print_r( $obj, true ) . '</pre>';
		} else {
			return '<pre>' . print_r( $obj, true ) . '</pre>';
		}
	}
}
if( !function_exists('es_silent') ) {
	function es_silent( $obj ) {
		echo '<pre style="display: none;">' . print_r( $obj, true ) . '</pre>';
	}
}

function init_constants() {
	if(!defined('TEMPLATEURI')) {
		define('TEMPLATEURI', trailingslashit( get_stylesheet_directory_uri() ) );
	}
}
add_action( 'init', 'init_constants' );


/**
 * To avoid php notices for missing indexes
 * @param  string  			$key     		the key of the meta
 * @param  array 			$custom  		the entire custom object with get_post_custom
 * @param  boolean 			$all     		whether to include ALL, or just one singular
 * @param  string  			$default 		what the value should be returned in case there's no index like that
 * @return mixed           					whatever the custom holds
 */
function es_custom( $key, $custom, $all = false, $default = '') {
    return (array_key_exists($key, $custom)) ? ($all) ? $custom[$key] : $custom[$key][0] : $default;
}


