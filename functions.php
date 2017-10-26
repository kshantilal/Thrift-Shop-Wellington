<?php 
	
	function customThemeEnqueues(){
		wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
		wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/thriftshop.css', array(), '1.0.0', 'all' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/thriftshop.js', array(), '1.0.0', true ); //true is asking is it in the footer. true or false.

	}
	add_action('wp_enqueue_scripts', 'customThemeEnqueues');

	function customThemeSetup(){
		add_theme_support('menus');
		register_nav_menu('primary', 'This is the main navigation located at the top of the page');
	}
	add_action('init', 'customThemeSetup');

	//Featured Images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'single-post-thumbnail', 500, 1000, true );

	//Custom Logo
	add_theme_support('custom-logo');

	function customLogoSetup(){
		$customLogoSettings = array(
		'height' => 100,
		'width' => 100,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('Wordpress Custom Logo', 'This is a custom logo')

		);
		add_theme_support('custom-logo', $customLogoSettings);

	}
	add_action('after_setup_theme', 'customLogoSetup');