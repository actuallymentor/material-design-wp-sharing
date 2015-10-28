<?php
/**
 * Plugin Name: WP Material Share
 * Plugin URI: https://github.com/actuallymentor/material-design-wp-sharing
 * Description: Google Inbox style buttonfor social sharing
 * Version: 0.0.1
 * Author: Mentor Palokaj
 * Author URI: https://www.skillcollector.com
 * License: MIT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$mdsh_path = plugin_dir_url( __FILE__ );

// Add fontawesome
wp_register_style('Font Awesome', $mdsh_path . '/assets/css/font-awesome.min.css');
wp_enqueue_style( 'Font Awesome');

//Latest jQuery

function current_jquery($version) {
	global $wp_scripts;
	if ( ( version_compare($version, $wp_scripts -> registered[jquery] -> ver) == 1 ) && !is_admin() ) {
		wp_deregister_script('jquery'); 

		wp_register_script('jquery',
			'https://ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js',
			false, $version);
	}
}
add_action( 'wp_head', current_jquery( '2.1.4' ) );

////////////////
//// Functionality
////////////////
include( __DIR__ . '/functions/share.php');

?>