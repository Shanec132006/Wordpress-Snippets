<?php

/**
 * Plugin Name: CRED Auto Post Creation.
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Enable Posts to be created after CRED form Submission.
 * Version:z 1.0.1
 * Author: Shane Campbell
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

//CRED FUNCTION HOOK

add_action('cred_before_save_data', 'my_success_action',10,1);
function my_success_action($form_data)
{
  // if a specific form
  if ($form_data['id']==118)
  {
    $upload_dir = wp_upload_dir();
  	$image_path = $upload_dir['url'] ."/" . $_POST [ 'wpcf-cover-image'];
  	$image_value= '<img src='.$image_path.'>';
   
  	// Create post object
  	$my_post = array(
      'post_title'    => 'New book is now available: '.$_POST['post_title'],
      'post_content'  => 'Description: '.$_POST['post_content'].' by: '.$_POST['authors'].'
      '.$image_value.'
      Summary: '.$_POST['wpcf-summary'].'
      # of Pages: '.$_POST['wpcf-number-of-page'].'
      Rating: '.$_POST['wpcf-rating']['value'],
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_category' => array(8,39)
      );
      
      // Insert the post into the database
      wp_insert_post( $my_post );
  }
}
?>
