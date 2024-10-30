<?php
/**
* Plugin Name: BPOTech Export Specific Post
* Plugin URI: https://wordpress.org/plugins/bpot-export-specific-post/
* Description: Export one or more specific posts you have selected in wp xml format
* Version: 1.1.0
* Author: BPOTech WP Team
* Author URI: https://bpotech.com.vn/
* Text Domain: bpot-export-specific-post
* Domain Path: /languages
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// INCLUDE
require_once plugin_dir_path( __FILE__ ) . 'plugin-settings.php';
require_once plugin_dir_path( __FILE__ ) . 'plugin-init.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/export-specific-post.php';


// PLUGIN LOADED
$export_specific_post_init = new BPOT_Export_Specific_Post_Init();
$export_specific_post_init->init_actions();