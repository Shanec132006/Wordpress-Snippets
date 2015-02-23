<?php

/**
 * Plugin Name: CRED New User .
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Enable Users created after CRED form Submission.
 * Version: 1.0.1
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
	if ($form_data['id']==581)	 
	{
		$username =  $_POST['username'] ;
		$email    =  $_POST['email'];
		$password =  $_POST['password'];
		wp_create_user( $username, $password, $email );	
	}
}
?>