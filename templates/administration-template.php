<!-- Template for the administration interface in Wordpress -->
<div class="wrap">
<form method="post">
<h2>Login Page Settings</h2>
	<table class="form-table">
		<tr>
			<th width="140"><b>Login Page Logo URL</b>:</th>
			<td>
				<input type="text" name="mm_login_url" size="32" border="0" value="<?php echo get_option('mm_login_url'); ?>" />
				<br />
				This value changes the URL for the logo on the login page.
				</td>
		</tr>
		<tr>
			<th width="140"><b>Login Page Logo ALT</b>:</th>
			<td><input type="text" name="mm_login_alt" size="32" border="0" value="<?php echo get_option('mm_login_alt'); ?>" />
				<br />This option changes the ALT tag on the logo of the login page.</td>
		</tr>
		<tr>
			<th width="140"><b>Login Page CSS</b>:</th>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_login_css" size="32" border="0" value="<?php echo get_option('mm_login_css'); ?>" />
				<br />This is the CSS for the login page.</td>
		</tr>
    </table>
<br /><br />
<h2>Admin Page Settings</h2>
	<table class="form-table">
		<tr>
			<th width="140"><b>Admin Pages CSS</b>:</th>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_admin_css" size="32" border="0" value="<?php echo get_option('mm_admin_css'); ?>" />
				<br />This is the CSS for the admin page.</td>
		</tr>
		<tr>
			<th width="140"><b>User CSS</b>:</th>
			<td><?php echo WPAT_PLUGIN_URI ;?><input type="text" name="mm_user_css" size="32" border="0" value="<?php echo get_option('mm_user_css'); ?>" /></td>
		</tr>
		<tr>
			<th valign="top" width="140"><b>Custom header</b>:</th>
			<td><textarea name="mm_custom_header" cols="90" rows="8" border="0"><?php echo htmlentities(get_option('mm_custom_header')); ?></textarea>
			<br />You can add the parameter %%nickname%% to display the user's nickname in the header.</td>
		</tr>
		<tr>
			<th valign="top" width="140"><b>Custom footer</b>:</th>
			<td><textarea name="mm_custom_footer" cols="90" rows="8" border="0"><?php echo htmlentities(get_option('mm_custom_footer')); ?></textarea></td>
		</tr>
	</table>	
	<p class="submit"><input type="submit" name="submitButtonName" value="Save settings" border="0" /></p>
</form>
</div>