<?php
/*

Plugin Name: OAF Create Admin Menu
Plugin URI: http://oscarabadfolgueira.com/plugins-wordpress-crear-menu-y-submenu-en-la-administracion
Description: This plugin creates an admin menu and a submenu
Version: 1.0
Author: Oscar Abad Folgueira
Author URI: http://www.oscarabadfolgueira.com
License: GPLv2
License URL: http://www.gnu.org/licenses/gpl-2.0.html

*/

add_action( 'admin_menu', 'oaf_create_admin_menu');

function oaf_create_admin_menu() {

	add_menu_page ( 'OAF Plugin', 'OAF Plugin', 'manage_options', 'oaf_create_admin_menu_plugin', 'oaf_create_admin_menu_function', 'dashicons-megaphone' );

	add_submenu_page ( 'oaf_create_admin_menu_plugin', 'OAF Options', 'Options', 'manage_options', 'oaf_options_submenu1', 'oaf_options_function' );

	add_submenu_page ( 'oaf_create_admin_menu_plugin', 'OAF Settings', 'Settings', 'manage_options', 'oaf_options_submenu2', 'oaf_settings_function');

}

function oaf_create_admin_menu_function() {

}

function oaf_options_function() {

}
function oaf_settings_function() {

}

?>