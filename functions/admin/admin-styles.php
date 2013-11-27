<?php
/**
 * admin-styles.php
 *
 * This file contains all the style changes to the wp-admin interface
 *
 * @package boilerplate
 */


/**
 * Function to determine whether we're on register or login pages
 * @return [type] [description]
 */
function es_is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}


/**
 *
 * a function to add a custom style to the login form and other areas of admins
 * @return html
 * @author	Swifty <james@electricstudio.co.uk>
 * @since 	1.0
 */
function enq_admin_stylesheet() {
    if( ( is_admin() ) || es_is_login_page() ) {
        wp_enqueue_style( 'admin-stylesheet', get_bloginfo('template_directory').'/functions/admin/es-admin-styles.css' );
    }
}
add_action('admin_enqueue_scripts', 'enq_admin_stylesheet');
add_action('login_enqueue_scripts', 'enq_admin_stylesheet');


/**
 *
 * Adds ES logo and link to admin bar
 * @param 	object $wp_admin_bar
 * @author	Swifty <james@electricstudio.co.uk>
 * @since 	1.0
 */
function add_es_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('wp-logo');
    $args = array(
        'id' => 'es_logo',
        'title' => '<img src="'.get_bloginfo('template_directory') . '/functions/admin/images/es_icon.png"/>',
        'href' => 'http://www.electricstudio.co.uk',
    );
    $wp_admin_bar->add_node( $args );
}

/**
 *
 * removes wp logo from admin bar
 * @param 	object $wp_admin_bar
 * @author	Swifty <james@electricstudio.co.uk>
 * @since 	1.0
 */
function remove_wp_logo($wp_admin_bar){
    $wp_admin_bar->remove_node('wp-logo');
}

/**
 *
 * Revomes unnecessary widgets from the dashboard
 * @author Swifty <james@electricstudio.co.uk>
 * @since	1.0
 */
function wpc_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/*
 * The below will remove the standard wordpress logo in the admin bar.
 *
 * add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
 * Set to 999 so is loaded after wo_logo menu node is added.
 *
 * The below will add in a custom logo into the admin bar.
 *
 * add_action( 'admin_bar_menu', 'add_es_logo', 1 );
 * Set to 1 so is loaded first.
 */

// Add actions and filters for the functions in this file
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
add_filter('admin_footer_text', 'remove_footer_admin');
// add_filter('login_headerurl', 'wpc_url_login');
