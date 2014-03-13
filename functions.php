<?php

$f = get_stylesheet_directory() . '/functions/';

// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/lib/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( get_stylesheet_directory() . '/lib/meta-box' ) );
// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';

include( $f . 'misc.php');
include( $f . 'users.php');
include( $f . 'ss.php');
include( $f . 'admin.php');
include( $f . 'cpts.php');
include( $f . 'images.php');
include( $f . 'metaboxes.php');
include( $f . 'nav.php');
