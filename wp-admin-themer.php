<?php
/*
Plugin Name: WordPress Admin and Login Themer
Plugin URI: http://plugins.motionmill.com/wp-admin-themer
Description: Themes your WP administrative interface and login page with 3 stylesheets from within the CSS directory of this plugin
Version: 0.3.0
Author: Tom Belmans (MotionMill)
Author URI: http://www.motionmill.com/
*/

/*  Copyright 2005  Manuel Amador

Derivative work from wp-admin-themer, written by Manuel Amador (Rudd-O)
	http://rudd-o.com/projects/wp-admin-themer/
	http://rudd-o.com/
	

Derivative work from bsuite, written by Casey Bisson

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//  DISABLED
// we sometimes gets called outside the WP context. This include makes it work
//
// if (!$wpdb) {
// 	require_once("../../wp-config.php");
// 	$validate_standalone = 1;
// }

/* Modify these variables if you have installed wp-admin-themer in another directory */
define('WPAT_PLUGIN_URI', get_option('siteurl').'/wp-content/plugins/wp-admin-themer-extended/');
define('WPAT_PLUGIN_PATH', $_SERVER['DOCUMENT_ROOT']  . '/wp-content/plugins/wp-admin-themer-extended');

/* Check to see if options already exist in the database */
$mm_login_url = get_option('mm_login_url');
$mm_login_alt = get_option('mm_login_alt');
$mm_login_css = get_option('mm_login_css');
$mm_admin_css = get_option('mm_admin_css');
$mm_user_css = get_option('mm_user_css');
$mm_custom_footer = get_option('mm_custom_footer');

/* Add options if they does not already exist */
if($mm_login_url == '')
	add_option('mm_login_url', 'http://www.wordpress.org');

if($mm_login_alt == '') 
	add_option('mm_login_alt', 'Powered by WordPress');

if($mm_login_css == '') 
	add_option('mm_login_css', 'css/login.css');

if($mm_admin_css == '') 
	add_option('mm_admin_css', 'css/wp-admin.css');

if($mm_user_css == '') 
	add_option('mm_user_css', 'css/colors-fresh.css');

if($mm_custom_footer == '') 
	add_option('mm_custom_footer', '<p>Thank you for creating with <a href="http://wordpress.org/">WordPress</a> | <a href="http://codex.wordpress.org/">Documentation</a> | <a href="http://wordpress.org/support/forum/4">Feedback</a> | Version 2.5</p>');


function wp_admin_themer_admin_menu() {
   add_submenu_page('options-general.php', 'WP Admin Themer', 'WP Admin Themer', 8, __FILE__, 'wp_admin_themer_options');
}

function wp_admin_themer_options() {
	if(isset($_POST['mm_login_url']))
		update_option("mm_login_url", ($_POST["mm_login_url"]));
	
	if (isset($_POST['mm_login_alt']))
		update_option("mm_login_alt", ($_POST['mm_login_alt']));
	
	if(isset($_POST['mm_login_css']))
		update_option("mm_login_css", ($_POST["mm_login_css"]));
	
	if(isset($_POST['mm_admin_css']))
		update_option("mm_admin_css", ($_POST["mm_admin_css"]));
	
	if(isset($_POST['mm_user_css']))
		update_option("mm_user_css", ($_POST["mm_user_css"]));

	if(isset($_POST['mm_custom_footer']))
		update_option("mm_custom_footer", (stripslashes($_POST["mm_custom_footer"])));
	
	include 'templates/administration-template.php' ;
}

function themer_admin() {
	echo "<link rel='stylesheet' type='text/css' href='" . WPAT_PLUGIN_URI . get_option('mm_admin_css') . "' />\n";
	echo "<link rel='stylesheet' type='text/css' href='" . WPAT_PLUGIN_URI . get_option('mm_user_css') . "' />\n";
}	

function themer_login() {
	echo "<link rel='stylesheet' type='text/css' href='" . WPAT_PLUGIN_URI . get_option('mm_login_css') . "' />\n";
	echo "<link rel='stylesheet' type='text/css' href='" . WPAT_PLUGIN_URI . get_option('mm_user_css') . "' />\n";
}

function wp_custom_footer() {
		echo '<div id="custom_footer"><p>';
		echo get_option('mm_custom_footer');
		echo '</p></div>';
}

function update_mm_login_url() {
	echo get_option('mm_login_url');
}

function update_mm_login_alt() {
	echo get_option('mm_login_alt');
}


/* Add actions and filters */
add_action('admin_menu', 'wp_admin_themer_admin_menu');
add_action('login_head', 'themer_login');
add_action('admin_footer','wp_custom_footer');

add_filter('admin_head', 'themer_admin');
add_filter('login_headerurl', 'update_mm_login_url' ); 
add_filter('login_headertitle', 'update_mm_login_alt' ); 

?>
