<?php

/**
 * Plugin Name: Duplicate Post Shortcode
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: This plugin allows you to create a duplicate post When you have the Duplicate Post plugin installed. Download the plugin here : https://wordpress.org/plugins/duplicate-post/
 * Version: 0.0.1 Beta 
 * Author: Shane Campbell
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */


// Add Shortcode
function duplicate_posts() {
	// Code
	duplicate_post_clone_post_link( __('Clone This Post','duplicate-post'), $before, $after, $id );
}
add_shortcode( 'duplicate_post', 'duplicate_posts' );
?>