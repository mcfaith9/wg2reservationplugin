<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              facebook.com/mcfaith
 * @since             1.0.0
 * @package           Cebu_Reservation_System
 *
 * @wordpress-plugin
 * Plugin Name:       Cebu Reservation System
 * Plugin URI:        https://dev-cebu.pantheonsite.io/
 * Description:       Item/Equipment/Event Reservation System - by marclouiec.
 * Version:           1.0.0
 * Author:            mcfaith
 * Author URI:        facebook.com/mcfaith
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cebu-reservation-system
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CEBU_RESERVATION_SYSTEM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cebu-reservation-system-activator.php
 */
function activate_cebu_reservation_system() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cebu-reservation-system-activator.php';
	Cebu_Reservation_System_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cebu-reservation-system-deactivator.php
 */
function deactivate_cebu_reservation_system() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cebu-reservation-system-deactivator.php';
	Cebu_Reservation_System_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cebu_reservation_system' );
register_deactivation_hook( __FILE__, 'deactivate_cebu_reservation_system' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cebu-reservation-system.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cebu_reservation_system() {

	$plugin = new Cebu_Reservation_System();
	$plugin->run();

}
run_cebu_reservation_system();
