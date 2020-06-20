<h1>Crystal News Theme Custom Option</h1>
<?php settings_errors(); ?>

<?php
	$logo = esc_attr(get_option('crystal_logo'));
?>

<div class="crystal-logo-preview">
	<div class="crystal-logo">
		<div class="image-container">
			<div id="logo-picture-review" class="logo-picture" style="background-image: url(<?php print $logo; ?>);">
	
			</div>
		</div>
	</div>
</div>


<form method="post" action="options.php" class="crystal-general-form">
	<?php settings_fields('general_group'); ?>
	<?php do_settings_sections('admin-page'); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form>