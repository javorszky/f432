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
