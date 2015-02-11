<?php

/**
 * Plugin Name: Woocommerce Cart Count
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: This plugin allows you to get the total of the number of items in your cart. Use the shortcode [cart_count] in your editor or echo do_shortcode( '[cart_count]' ); in your template files
 * Version: 1
 * Author: Shane Campbell
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

// Add Shortcode [cart_count]
function get_cart_count() {
/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {	
	global $woocommerce;  	
  	echo "Cart Count: ".$woocommerce->cart->cart_contents_count;
	}
}
add_shortcode( 'cart_count', 'get_cart_count' );

?>
