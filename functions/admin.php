<?php
add_action( 'admin_menu', 'mdsh_menu' );

function mdsh_menu() {
	add_options_page( 'Material Sharing', 'Material Sharing Buttons', 'manage_options', 'mdsh-settings', 'mdsh_options' );
	add_action( 'admin_init', 'register_mdsh_settings' );
}

function register_mdsh_settings() { // whitelist options
	register_setting( 'mdsh_settings', 'mdsh_twitter' );
	register_setting( 'mdsh_settings', 'mdsh_active' );
	register_setting( 'mdsh_settings', 'mdsh_position' );
}

function mdsh_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<div class="wrap">
		<h2>Material Design Sharing Buttons</h2>
		<p>Fill in the options below.</p>
		<form class="mdsh_admin" id="mdsh_form" method="post" action="options.php"> 
			<?php settings_fields( 'mdsh_settings' ); ?>
			<?php do_settings_sections( 'mdsh_settings' ); ?>
			
			<p>Your twitter username (without @)</p>
			<input type="text" name="mdsh_twitter" value="<?php echo esc_attr( get_option('mdsh_twitter') ); ?>" />

			<p>Draw attention to the sharing bar by expanding and collapsing it?</p>
			<select name="mdsh_active">
				<option value="on" <?php if ( esc_attr( get_option('mdsh_active') ) == "on" ) { echo "selected"; }; ?> >On</option>
				<option value="off" <?php if ( esc_attr( get_option('mdsh_active') ) != "on" ) { echo "selected"; }; ?> >Off</option>
			<select>

			<p>Show the button on the:</p>
			<select name="mdsh_position">
				<option value="left" <?php if ( esc_attr( get_option('mdsh_position') ) == "left" ) { echo "selected"; }; ?> >Left</option>
				<option value="right" <?php if ( esc_attr( get_option('mdsh_position') ) != "left" ) { echo "selected"; }; ?> >Right</option>
			<select>

			<?php submit_button(); ?>
		
		</form>
	</div>
</div>

<?php
}
?>