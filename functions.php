<?php
if(!defined('TEMPLATEURI')) {
    define('TEMPLATEURI', trailingslashit( get_stylesheet_directory_uri() ) );
}

if(!defined('TEMPLATEPATH')) {
    define('TEMPLATEPATH', trailingslashit( get_stylesheet_directory() ) );
}

$f = TEMPLATEPATH . '/functions/';
$lib = TEMPLATEPATH . '/lib/';

include( $f . 'misc.php');
include( $lib . 'tlc-transients/tlc-transients.php');
include( $f . 'users.php');
include( $f . 'ss.php');
include( $f . 'admin.php');
include( $f . 'cpts.php');
include( $f . 'images.php');
include( $f . 'metaboxes.php');
include( $f . 'nav.php');
include( $f . 'customizer.php' );
