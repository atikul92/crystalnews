<?php

	/*
		===========================
		Admin enqueue functions
		===========================
	*/



	function admin_scripts(){

		wp_enqueue_style('crystal_admin', get_template_directory_uri() . '/css/crystal.admin.css', array(), '1.0.0', 'all');

		wp_enqueue_media();
			
		wp_enqueue_script( 'crystal-admin-script', get_template_directory_uri() . '/js/crystalnews.admin.js', array ( 'jquery' ), '1.0.0', true);
	}
	add_action('admin_enqueue_scripts', 'admin_scripts');

	/*
		===========================
		Front-end enqueue functions
		===========================
	*/

	function add_theme_scripts() {

		wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css',false,'1.1','all');

		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css',false,'1.1','all');
		
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');

		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css',false,'1.1','all');


		// jquery
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.0.min.js', false, '3.5.0', true);
		wp_enqueue_script('jquery');

		// js
		wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/js/jquery-slim.min.js', array ( 'jquery' ), 1.1, true);

		wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.1, true);

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

		// slick
		wp_enqueue_script( 'slick-jquery', '//code.jquery.com/jquery-1.11.0.min.js', array ( 'jquery' ), 1.1, true);

		wp_enqueue_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array ( 'jquery' ), 1.1, true);

		wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ), 1.1, true);

		//tab script
		wp_enqueue_script( 'tabscript', get_template_directory_uri() . '/js/tabscript.js', array ( 'jquery' ), 1.1, true);

		//main
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );