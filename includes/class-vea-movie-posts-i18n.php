<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://yusufandrias.com
 * @since      1.0.0
 *
 * @package    Vea_Movie_Posts
 * @subpackage Vea_Movie_Posts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vea_Movie_Posts
 * @subpackage Vea_Movie_Posts/includes
 * @author     Yusuf Andrias <projectyusufandrias@gmail.com>
 */
class Vea_Movie_Posts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vea-movie-posts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
