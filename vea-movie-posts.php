<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://yusufandrias.com
 * @since             1.0.0
 * @package           Vea_Movie_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       VEA Movie Posts
 * Plugin URI:        https://github.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Yusuf Andrias
 * Author URI:        http://yusufandrias.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vea-movie-posts
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
define( 'VEA_MOVIE_POSTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vea-movie-posts-activator.php
 */
function activate_vea_movie_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vea-movie-posts-activator.php';
	Vea_Movie_Posts_Activator::activate();
}

/**
 * Include vea-movie-posts-functions.php, user require_once to stop the script if vea-movie-posts-functions.php is not found
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/vea-movie-posts-functions.php';


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vea-movie-posts-deactivator.php
 */
function deactivate_vea_movie_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vea-movie-posts-deactivator.php';
	Vea_Movie_Posts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vea_movie_posts' );
register_deactivation_hook( __FILE__, 'deactivate_vea_movie_posts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vea-movie-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vea_movie_posts() {

	$plugin = new Vea_Movie_Posts();
	$plugin->run();

}
run_vea_movie_posts();
