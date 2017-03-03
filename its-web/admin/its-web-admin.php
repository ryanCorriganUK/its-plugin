<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.itsweb.uk.com/
 * @since      1.0.0
 *
 * @package    ITS_Web
 * @subpackage ITS_Web/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ITS_Web
 * @subpackage ITS_Web/admin
 * @author     Your Name <email@example.com>
 */
class ITS_Web_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $ITS_Web    The ID of this plugin.
	 */
	private $ITS_Web;

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
	 * @param      string    $ITS_Web       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $ITS_Web, $version ) {

		$this->ITS_Web = $ITS_Web;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ITS_Web_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ITS_Web_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->ITS_Web, plugin_dir_url( __FILE__ ) . 'css/its-web-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ITS_Web_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ITS_Web_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->ITS_Web, plugin_dir_url( __FILE__ ) . 'js/its-web-admin.js', array( 'jquery' ), $this->version, false );

	}

}
