<?php

/**
 * Plugin Name: Get Term from URL (CRED).
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Gets taxonomy information from url.
 * Version:z 1.0.0
 * Author: Shane Campbell
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */



//[get_term_by_url_parameter field="slug" taxonomy="category" url_parameter="country" display="name"]

function wpv_get_term_by_url_parameter( $atts ) {
    $a = shortcode_atts( array(
        'field' => '',
        'taxonomy' => '',
        'url_parameter' => '',
        'display' => '',
    ), $atts );

    $term = get_term_by($a['field'], $_GET[$a['url_parameter']], $a['taxonomy']);

    return $term->$a['display'];
}

add_shortcode( 'get_term_by_url_parameter', 'wpv_get_term_by_url_parameter' );
?>