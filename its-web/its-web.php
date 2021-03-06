<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.itsweb.uk.com/
 * @since             1.0.0
 * @package           ITS_Web
 *
 * @wordpress-plugin
 * Plugin Name:       ITS Web WordPress settings
 * Plugin URI:        http://www.itsweb.uk.com/
 * Description:       This plugin contains WordPress settings by ITS Web, do not deactivate this plugin or your site may stop working as intended.
 * Version:           1.0.0
 * Author:            ITS Web
 * Author URI:        http://www.itsweb.uk.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       its-web
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/its-web-activator.php
 */
function activate_ITS_Web() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/its-web-activator.php';
	ITS_Web_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/its-web-deactivator.php
 */
function deactivate_ITS_Web() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/its-web-deactivator.php';
	ITS_Web_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ITS_Web' );
register_deactivation_hook( __FILE__, 'deactivate_ITS_Web' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/its-web.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ITS_Web() {

	$plugin = new ITS_Web();
	$plugin->run();

}
run_ITS_Web();
