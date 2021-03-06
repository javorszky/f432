<?php
function theme_enQ_scripts() {
	$r = get_stylesheet_directory_uri() . '/js/';
	$debug = true;

	wp_register_script( 'fmodernizr', $r . 'vendor/custom.modernizr.js', null, null, true);

	if( $debug ) {
		/**
		 * For debugging purposes
		 */
		wp_register_script( 'foundation', $r . 'foundation/foundation.js', null, null, true);
		wp_register_script( 'falerts', $r . 'foundation/foundation.alerts.js', null, null, true);
		wp_register_script( 'fclearing', $r . 'foundation/foundation.clearing.js', null, null, true);
		wp_register_script( 'fcookie', $r . 'foundation/foundation_cookie.js', null, null, true);
		wp_register_script( 'fdropwdown', $r . 'foundation/foundation.dropdown.js', null, null, true);
		wp_register_script( 'fforms', $r . 'foundation/foundation.forms.js', null, null, true);
		wp_register_script( 'fjoyride', $r . 'foundation/foundation.joyride.js', null, null, true);
		wp_register_script( 'fmagellan', $r . 'foundation/foundation.magellan.js', null, null, true);
		wp_register_script( 'forbit', $r . 'foundation/foundation.orbit.js', null, null, true);
		wp_register_script( 'fplaceholder', $r . 'foundation/foundation.placeholder.js', null, null, true);
		wp_register_script( 'freveal', $r . 'foundation/foundation.reveal.js', null, null, true);
		wp_register_script( 'fsection', $r . 'foundation/foundation.section.js', null, null, true);
		wp_register_script( 'ftooltips', $r . 'foundation/foundation.tooltips.js', null, null, true);
		wp_register_script( 'ftopbar', $r . 'foundation/foundation.topbar.js', null, null, true);
		wp_register_script( 'main', $r . 'main.js', array('jquery', 'fmodernizr'), null, true);

		/**
		 * Add all other definitions here for debugging purposes
		 * place them in the js/plugins folder, the grunt task will
		 * pick up the js files and concat / minify them.
		 */

		wp_enqueue_script('foundation');
		wp_enqueue_script('falerts');
		wp_enqueue_script('fclearing');
		wp_enqueue_script('fcookie');
		wp_enqueue_script('fdropwdown');
		wp_enqueue_script('fforms');
		wp_enqueue_script('fjoyride');
		wp_enqueue_script('fmagellan');
		wp_enqueue_script('forbit');
		wp_enqueue_script('fplaceholder');
		wp_enqueue_script('freveal');
		wp_enqueue_script('fsection');
		wp_enqueue_script('ftooltips');
		wp_enqueue_script('ftopbar');
		wp_enqueue_script('main');
	} else {
		/**
		 * This is for the live site
		 */
		wp_register_script( 'main', $r . 'app.min.js', array('jquery', 'fmodernizr'), null, true);
		wp_enqueue_script('main');
	}
	wp_enqueue_script('jquery');
	wp_enqueue_script('fmodernizr');

	$stylesheet_uri = get_stylesheet_uri();
	$stylesheet_uri = add_query_arg( array( 'v' => md5_file( $stylesheet_uri ) ), $stylesheet_uri );
	wp_register_style( 'main', $stylesheet_uri );
	wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'theme_enQ_scripts' );
