<!-- Template for the administration interface in Wordpress -->
<div class="wrap">
<form method="post">	
<h2>Login Page Settings</h2>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td><b>Login Page Logo URL</b>:</td>
			<td>
				<input type="text" name="mm_login_url" size="32" border="0" value="<?php echo get_option('mm_login_url'); ?>" />
				</td>
		</tr>
	</table>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td>This value changes the URL for the logo on the login page.</td>
		</tr>
	</table>
	<p></p>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td><b>Login Page Logo ALT</b>:</td>
			<td><input type="text" name="mm_login_alt" size="32" border="0" value="<?php echo get_option('mm_login_alt'); ?>" /></td>
		</tr>
	</table>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td>This option changes the ALT tag on the logo of the login page.</td>
		</tr>
	</table>
	<p></p>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td><b>Login Page CSS</b>:</td>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_login_css" size="32" border="0" value="<?php echo get_option('mm_login_css'); ?>" /></td>
		</tr>
	</table>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td>This is the CSS for the login page.</td>
		</tr>
	</table>
	<p></p>	
<h2>Admin Page Settings</h2>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td><b>Admin Pages CSS</b>:</td>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_admin_css" size="32" border="0" value="<?php echo get_option('mm_admin_css'); ?>" /></td>
		</tr>
	</table>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td>This is the CSS for the admin pages.</td>
		</tr>
	</table>
	<p></p>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td><b>User CSS</b>:</td>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_user_css" size="32" border="0" value="<?php echo get_option('mm_user_css'); ?>" /></td>
		</tr>
	</table>
	<table border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td></td>
		</tr>
	</table>
	<p></p>
		<p><input type="submit" name="submitButtonName" value="Update" border="0" /></p>
</form>
</div>
