<?php

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/function-admin.php';

	function theme_support(){
		load_theme_textdomain('crystalnews');
		add_theme_support('post-thumbnails');
		add_theme_support('widgets');

		$defaults = array(
			'height' => 50,
			'width' => 100,
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array('site-title', 'site-description')
		);
		add_theme_support('custom-logo', $defaults);
	}
	add_action('after_setup_theme', 'theme_support');
	

	// Register Menu

	function register_my_menus(){
		register_nav_menus(array(
			'header-menu'	=> __('Header Menu')
		));
	}
	add_action('init', 'register_my_menus');

	// Excerpt Length
	function custom_excerpt_length(){
		return 20;
	}
	add_filter('excerpt_length', 'custom_excerpt_length');

	// Excerpt More
	function custom_excerpt_more(){
		return '';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');



	// Breadcrumb
	function get_breadcrumb() {
	    echo '<a href="'.home_url().'" rel="nofollow"><i class="fa fa-home"></i> প্রচ্ছদ</a>';
	    if (is_category() || is_single()) {
	        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
	        the_category(' &bull; ');
	            if (is_single()) {
	                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
	                the_title();
	            }
	    } elseif (is_page()) {
	        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
	        echo the_title();
	    } elseif (is_search()) {
	        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
	        echo '"<em>';
	        echo the_search_query();
	        echo '</em>"';
	    }
	}

	// Populer posts
	function setPostViews($postID) {
	    $countKey = 'post_views_count';
	    $count = get_post_meta($postID, $countKey, true);
	    if($count==''){
	        $count = 0;
	        delete_post_meta($postID, $countKey);
	        add_post_meta($postID, $countKey, '0');
	    }else{
	        $count++;
	        update_post_meta($postID, $countKey, $count);
	    }
	}

	function banglaToEnglish($data){
		$english = array(
			"1", "2", "3", "4", "5", "6", "7", "8", "9", "0",
			"am", "pm",
			"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
		);
		$bangla = array(
			"১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০",
			"পূর্বাহ্ন", "অপরাহ্ন",
			"জানুয়ারী", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"
		);

		$converted = str_replace($english, $bangla, $data);

		return $converted;
	}
	add_filter('the_time', 'banglaToEnglish');
	add_filter('get_the_date', 'banglaToEnglish');