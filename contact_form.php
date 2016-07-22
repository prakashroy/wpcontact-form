<?php
/*
Plugin Name: Example Contact Form Plugin
Plugin URI: http://example.com
Description: Simple WordPress Contact Form
Version: 1.0.0
Author: Prakash Pasupuleti

*/

function html_form_code() {
	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
	echo '<div>';
	echo 'User Name: <br/>';
	echo '<input type="text" name="cf-name"   size="40" />';
	echo '</p>';
	echo '<p>';
	echo 'Country ';
	echo '<select name="cf-country" style="width:100%; height: 40px"><option value="">Select Country</option><option value="1">India</option><option value="2">USA</option></select>';
	echo '</p>';
	
	echo '<p>';
	echo 'Gender <br/>';
	echo '<input type="radio" name="cf-gender" value="1">Male <input type="radio" name="cf-gender" value="0">female ';
	echo '</p>';
	echo '<p>';
	echo 'Description <br/>';
	echo '<textarea rows="10" cols="35" name="cf-message"></textarea>';
	echo '</p>';

	echo '<p>';
	echo '<input type="checkbox" name="cf-terms">';
	echo 'Trems & Conditions';
	echo '</p>';

	echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
	echo '</form>';
}

function save_query() {
	global $wpdb;
	// if the submit button is clicked, data save to databse
	if ( isset( $_POST['cf-submitted'] ) ) {

		// sanitize form values
		$name    = $_POST["cf-name"];
		$country   = $_POST["cf-country"];
		$gender =  $_POST["cf-gender"];
		$terms =  $_POST["cf-terms"];
		$message = $_POST["cf-message"];

		$table_name = $wpdb->prefix . 'iqcontacts';
		//insert form values into table
		$wpdb->insert( $table_name,
		array( 'name' => $name,
		'description' => $message,
		'gender' => $gender,
		'terms' => $terms,
		'country' => $country),
		array('%s','%s','%d','%d','%d'));
		echo 'Thank you!! Your information is saved with us.';
	}
}

function cf_shortcode() {
	ob_start();
	save_query();
	html_form_code();

	return ob_get_clean();
}

add_shortcode( 'iq_contact_us', 'cf_shortcode' );

?>
