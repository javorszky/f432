<?php
/**
 * Strips the user of the following capabilities, if the user is not
 * an administrator that is called "ElectricStudio".
 *
 * This is run at the following actions:
 * - plugin activated
 * - new user registered
 *
 * Copies the capabilities into a backup, so on theme deactivation
 * the users are restored their rights.
 *
 * @param  integer 		$userid 	The ID of the user created
 * @return [type]         [description]
 */
function restore_sanity( $allcaps, $caps, $args, $user ) {
	$restricted = array(
		// core
		'update_core',

		// plugins
		'delete_plugins',
		'update_plugins',
		'install_plugins',
		'edit_plugins',
		'activate_plugins',

		// themes
		'update_themes',
		'switch_themes',
		'edit_themes',
		'install_themes',
		'delete_themes',

		// Links
		'manage_links'
	);

	// If this is ElectricStudio

	if(intval($user->ID) !== 0) {
		if($user->data->user_login !== 'ElectricStudio') {
			foreach ($restricted as $cap) {
				if(in_array($cap, $allcaps)) {
					unset($allcaps[$cap]);
				}
			}
		}
	}
	return $allcaps;
}


add_filter( 'user_has_cap', 'restore_sanity', 1, 4);
