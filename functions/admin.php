<?php
/**
 * admin-styles.php
 *
 * This file contains all the style changes to the wp-admin interface
 *
 * @package boilerplate
 */


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
        'title' => '<span class="ab-icon"><img src="'.get_bloginfo('template_directory') . '/functions/images/es_icon_2014.png"/></span>',
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
add_action( 'admin_bar_menu', 'add_es_logo', 1 );

function replace_logo() {
    $url = get_template_directory_uri() . '/functions/images/es_logo_2014.png';
    ?>
    <style>
        .login h1 a {
            background-image: url(<?php echo $url; ?>);
        }
    </style>
    <?php
}
add_action('login_head', 'replace_logo');
