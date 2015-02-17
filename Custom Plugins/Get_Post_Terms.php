<?php

/**
 * Plugin Name: Get Post Terms Shortcode.
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Enables a shortcode for the use of the get_the_terms() function.
 * Version: 1
 * Author: Shane Campbell
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

// Add Shortcode [get_terms post_id="" taxonomy="" term=""]
  function get_post_terms( $atts ) {

    $vals =  shortcode_atts(
      array(
        'post_id' => '',
        'taxonomy' => '',
        'term' => '',
      ), $atts );

    // Code
    $terms = get_the_terms( $vals["post_id"], $vals["taxonomy"] );

    $draught_links = array();
    if (is_array($terms)){
      foreach ( $terms as $term ) {
        $draught_links[] = $term->$vals['term'];
        return "<br />". $draught_links[0];
      }
    }
  }
  add_shortcode( 'get_terms', 'get_post_terms' );
?>
