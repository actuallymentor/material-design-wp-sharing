<?php
/**
 * Plugin Name: WP Material Share
 * Plugin URI: https://github.com/actuallymentor/material-design-wp-sharing
 * Description: Google Inbox style button for social sharing
 * Version: 1.0.0
 * Author: Mentor Palokaj
 * Author URI: https://www.skillcollector.com
 * License: MIT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$mdsh_path = plugin_dir_url( __FILE__ );

// Add fontawesome
wp_register_style('Font Awesome', $mdsh_path . '/assets/css/font-awesome.min.css');
wp_enqueue_style( 'Font Awesome');

// Add bounce
wp_enqueue_script( 'wpms-custom-js', $mdsh_path. '/assets/js/custom.js', ['jquery'], '1.0.0', true );


////////////////
//// Functionality
////////////////
include( __DIR__ . '/functions/share.php');

////////////////
//// Admin area
////////////////
include( __DIR__ . '/functions/admin.php');

?>