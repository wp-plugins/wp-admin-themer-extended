=== WP Admin Themer Extended ===
Contributors: tbelmans
Tags: admin, theme, css, login
Requires at least: 2.3
Tested up to: 2.5
Stable tag: 0.3.0

This plugin will modify the layout of your admin and login pages using 3 CSS files in the plugin css directory.

== Description ==

WP Admin Themer Extended is a plugin that allows you to theme your WordPress admin pages and login pages.
It allows to override the URL and ALT tag of the Wordpress logo on the login page.

Derivative work from wp-admin-themer, written by Manuel Amador (Rudd-O)

    * http://rudd-o.com/projects/wp-admin-themer/
    * http://rudd-o.com

The plugin will overrule all CSS files from within the plugin css directory.

Checkout our other plugins at http://plugins.motionmill.com

== Installation ==

1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin at the plugin administration page
3. Open the file wp-admin-themer.php and modify check following lines : 
	
		/* Modify these variables if you have installed wp-admin-themer in another directory */
		define('WPAT_PLUGIN_URI', get_option('siteurl').'/wp-content/plugins/wp-admin-themer-extended/');
		define('WPAT_PLUGIN_PATH', $_SERVER['DOCUMENT_ROOT']  . '/wp-content/plugins/wp-admin-themer-extended');

4. Open the plugin configuration page, which is located under Settings -> WP Admin Themer and verify your settings.

== Frequently Asked Questions == 

= No questions yet =
Check our page on http://plugins.motionmill.com for more information

== Screenshots ==

1. Administration interface in WordPress 2.5

== Licence ==

This plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal or commercial blog.
