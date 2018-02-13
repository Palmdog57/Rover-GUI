<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.cheesecakeproductions.com
 * @since      1.0.0
 *
 * @package    Rover_Gui
 * @subpackage Rover_Gui/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rover_Gui
 * @subpackage Rover_Gui/public
 * @author     Tom Cheesecake <b4013350@my.shu.ac.uk>
 */
class Rover_Gui_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		global $post;
    if(has_shortcode($post->post_content, 'rovercode'))
		{  
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rover-gui-public.css', array(), $this->version, 'all' );
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {


		global $post;

		if(has_shortcode($post->post_content, 'rovercode'))
		{  
      wp_register_script('socket.io', 'http://127.0.0.1:8080/socket.io/socket.io.js');
      wp_enqueue_script( 'socket.io' );
      
      
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rover-gui-public.js', array( 'jquery' ), $this->version, false );
		}

		

	}
	
	/*
	public function public_partials_loader(){

	include_once( 'partials/rover-gui-public-display.php' );
	}*/

	public function plugin_shortcode($atts) {
        require_once( 'partials/rover-gui-public-display.php' );
    }	

}
