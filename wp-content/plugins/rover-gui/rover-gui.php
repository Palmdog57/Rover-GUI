<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.cheesecakeproductions.com
 * @since             1.0.0
 * @package           Rover_Gui
 *
 * @wordpress-plugin
 * Plugin Name:       Rover
 * Plugin URI:        www.cheesecakeproductions.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tom Cheesecake
 * Author URI:        www.cheesecakeproductions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rover-gui
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rover-gui-activator.php
 */
function activate_rover_gui() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rover-gui-activator.php';
	Rover_Gui_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rover-gui-deactivator.php
 */
function deactivate_rover_gui() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rover-gui-deactivator.php';
	Rover_Gui_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rover_gui' );
register_deactivation_hook( __FILE__, 'deactivate_rover_gui' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rover-gui.php';

function rover_gui_install() {
	global $wpdb;
	global $rover_gui;

	$rover_data = $wpdb->prefix . 'rover_gui_data';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $rover_data (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		UNIQUE KEY id (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'rover_gui', $rover_gui );

  

$installed_ver = get_option( "rover_gui" );

if ( $installed_ver != $rover_gui ) {

	$rover_data = $wpdb->prefix . 'rover_gui_data';

	$sql = "CREATE TABLE $rover_data ( 
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		UNIQUE KEY id (id)
	);";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option( "rover_gui", $rover_gui );
}


function rover_gui_update() {
    global $rover_gui;
    if ( get_site_option( 'rover_gui' ) != $rover_gui ) {
        rover_gui_install();
    }
}
add_action( 'plugins_loaded', 'rover_gui_update' );


}

register_activation_hook( __FILE__, 'rover_gui_install' );




/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rover_gui() {

	$plugin = new Rover_Gui();
	$plugin->run();

}
run_rover_gui();
