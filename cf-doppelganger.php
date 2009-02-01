<?php 
/*
Plugin Name: CF Doppelganger
Plugin URI: 
Description: Allows two WP installs to point to the same database. URLs are hardcoded into the plugin.
Version: 1.0
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

// Indications: 
// You want two WP installs with different URLs to point to the same database. Unfortunately, WP stores 
// its "home" and "siteurl" URLs in the database, so you can't just copy-paste an install.

// Instructions:
// You must install and activate the plugin in the OLD install, with the CFDOPPEL_ON switch set to false.
// Then copy the file into the NEW install, and edit the URLs below, and set the CFDOPPEL_ON switch to 
// true, in the NEW install only. Ta-da!


// change me!
define('CFDOPPEL_SITEURL', 'http://cuce.cfdev3.com');

// change me!
define('CFDOPPEL_HOME', 'http://cuce.cfdev3.com');

define('CFDOPPEL_ON', false);

if (CFDOPPEL_ON) {
	add_filter('pre_option_home', 'cfdoppel_option_filter_home');
	add_filter('pre_option_siteurl', 'cfdoppel_option_filter_siteurl');	
}

function cfdoppel_option_filter_home() {
	return CFDOPPEL_HOME;
}
function cfdoppel_option_filter_siteurl() {
	return CFDOPPEL_SITEURL;
}

?>