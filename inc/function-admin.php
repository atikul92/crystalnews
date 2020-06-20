<?php

	function admin_pages(){
		add_menu_page('Theme Option', 'Crystal Option', 'manage_options', 'admin-page', 'admin_page_callback');
		add_submenu_page('admin-page', 'Theme Option', 'General', 'manage_options', 'admin-page', 'admin_page_callback');

		add_submenu_page('admin-page', 'CSS Options', 'Custom CSS', 'manage_options', 'crystal_css', 'css_option_callback');
	}
	add_action('admin_menu', 'admin_pages');

	function custom_settings(){
		register_setting('general_group', 'crystal_logo');
		register_setting('general_group', 'facebook_link');
		register_setting('general_group', 'twitter_link');
		register_setting('general_group', 'youtube_link');
		register_setting('general_group', 'linkedin_link');


		add_settings_section('general-section', 'Logo Section', 'general_section_callback', 'admin-page');
		add_settings_section('link-section', 'Social Media Section', 'link_section_callback', 'admin-page');


		add_settings_field('logo-field', 'Update Logo', 'logo_field_callback', 'admin-page', 'general-section');
		add_settings_field('facebook-field', 'Facebook', 'facebook_field_callback', 'admin-page', 'link-section');
		add_settings_field('twitter-field', 'Twitter', 'twitter_field_callback', 'admin-page', 'link-section');
		add_settings_field('youtube-field', 'Youtube', 'youtube_field_callback', 'admin-page', 'link-section');
		add_settings_field('linkedin-field', 'Linkedin', 'linkedin_field_callback', 'admin-page', 'link-section');
	}
	add_action('admin_init', 'custom_settings');

	// Callbacks

	function link_section_callback(){
		echo 'Add your social media profile';
	}

	function facebook_field_callback(){

		$facebook = esc_attr( get_option('facebook_link') );
		echo '<input type="text" name="facebook_link" value="'.$facebook.'" placeholder="Facebook username"/>';
	}

	function twitter_field_callback(){

		$twitter = esc_attr( get_option('twitter_link') );
		echo '<input type="text" name="twitter_link" value="'.$twitter.'" placeholder="Twitter username"/>';
	}

	function youtube_field_callback(){

		$youtube = esc_attr( get_option('youtube_link') );
		echo '<input type="text" name="youtube_link" value="'.$youtube.'" placeholder="Youtube username"/>';
	}

	function linkedin_field_callback(){

		$linkedin = esc_attr( get_option('linkedin_link') );
		echo '<input type="text" name="linkedin_link" value="'.$linkedin.'" placeholder="Linkedin username"/>';
	}

	function general_section_callback(){
		echo 'Customize your site logo';
	}

	function logo_field_callback(){

		$logo = esc_attr( get_option('crystal_logo') );
		
		if( empty($logo) ){
			echo '<input type="button" class="button button-secondary" value="Upload a logo" id="upload-button"/><input type="hidden" id="logo-picture" name="crystal_logo" value=""/>';
		}else{
			echo '<input type="button" class="button button-secondary" value="Replace logo Picture" id="upload-button"><input type="hidden" id="logo-picture" name="crystal_logo" value="'.$logo.'"> <input type="button" class="button button-secondary" value="Remove" id="remove-picture">';
		}
	}

	function admin_page_callback(){
		require_once(get_template_directory() . '/inc/templates/crystal-admin.php');
	}

	function css_option_callback(){
		echo '<h1>good css</h1>';
	}