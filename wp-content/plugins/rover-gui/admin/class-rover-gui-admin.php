<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.cheesecakeproductions.com
 * @since      1.0.0
 *
 * @package    Rover_Gui
 * @subpackage Rover_Gui/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rover_Gui
 * @subpackage Rover_Gui/admin
 * @author     Tom Cheesecake <b4013350@my.shu.ac.uk>
 */
class Rover_Gui_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action('admin_post_add_admin_post_rover_gui', array($this, 'add_admin_post_rover_gui'));
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles($hook) {

		if ( 'toplevel_page_rover-gui' == $hook ) {
      	//enquire all styles here

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rover-gui-admin.css', array(), $this->version, 'all' );
		} 

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts($hook) {

		if ( 'toplevel_page_rover-gui' == $hook ) {
      	//enquire all styles here
		wp_enqueue_script('jquery-validate-min', 
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js', 
            array( 'jquery' ) 
        );       	

		wp_enqueue_script('jquery');                    // Enque jQuery
		wp_enqueue_script('jquery-ui-core');            // Enque jQuery UI Core
		wp_enqueue_script('jquery-ui-accordion'); 
		wp_enqueue_script('jquery-ui-tabs');            // Enque jQuery UI Tabs
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('jquery-ui-selectable');
		wp_enqueue_script('jquery-ui-draggable'); 
		wp_enqueue_script('jquery-ui-resizable');  
		wp_enqueue_script( 'wp-color-picker' ); 

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rover-gui-admin.js', array( 'jquery' ), $this->version, false );
		}

	}

	public function add_plugin_admin_menu() {
	    /*
	     * Add a settings page for this plugin to the Settings menu.
	     *
	     * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
	     *
	     *        Administration Menus: http://codex.wordpress.org/Administration_Menus
	     *
	     */
	
		add_menu_page( 'Rover Gui' , 'Rover Admin' , 'manage_options' , $this->plugin_name , array($this, 'display_rover_admin'));


	}

	 /**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */

		public function add_action_links( $links ) {
	    /*
	    *  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
	    */
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	 
	public function display_rover_admin() {
	    include_once( 'partials/rover-gui-admin-display.php' );

	}

	public function add_admin_post_rover_gui(){

    	if (isset($_POST['add_admin_post_nonce'], $_POST['add_admin_post_rover_gui_submit']) && wp_verify_nonce($_POST['add_admin_post_nonce'], 'add_admin_post_rover_gui')) {
                //include_once('inc/backend/save-set.php');
	/*global $wpdb;
	$plugin_name_db = $wpdb->prefix . 'rover_gui_data';

	$plugin_name_results = $wpdb->get_results("SELECT * FROM $plugin_name_db");
  	$recipt_count = $_POST['plugin_post_item_name'];
*/
	if(isset($_POST['current_page']))
	{
	    wp_redirect($_POST['current_page']);
	}
	else
	{
	  wp_redirect(admin_url().'admin.php?page=rover-gui');    

	}

            } else {
                die('No messing please!');
            } 		
    }

}
