<?php
/*
Plugin Name: MB Plugin updater
Plugin URI: https://github.com/melberthbontilao/Mb-plugin-updater
Description: This is test plugin to check if plugin update is working.
Author: MelberthB
Version: 1.4
Author URI: https://github.com/melberthbontilao/Mb-plugin-updater
License: GPLv2 or later
*/

add_action('plugins_loaded', 'plugin_updater_init', 0);

include_once('LinksynceparcelPluginUpdater.php');
function plugin_updater_init() {
	if ( is_admin() ) {
		$updater_plugin = new LinksynceparcelPluginUpdater( __FILE__, 'melberthbontilao', 'Mb-plugin-updater' );
	}
}
