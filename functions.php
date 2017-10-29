<?php 
	
	function customThemeEnqueues(){
		wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
		wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/thriftshop.css', array(), '1.0.0', 'all' );



		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );
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
	add_image_size('products', 255, 385, array('center', 'center'));
	add_image_size('home', 850, 570, array('center', 'center'));


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

	//Custom Fields Support
	// add_theme_support('custom-fields');



	add_action('after_setup_theme', 'customLogoSetup');

	//Footer Text
	function newTheme_footer_text($wp_customize){
		//Settings
		$wp_customize->add_setting('newTheme_footer_text', array(
			'default' => 'This is your footer Text',
			'transport' => 'refresh'
		));

		//Section
		$wp_customize->add_section('newTheme_footer_text_section', array(
			'title' => 'Footer'
		));

		//Control
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newTheme_footer_text_control', array(
			'label' => 'Footer Text',
			'section' => 'newTheme_footer_text_section',
			'settings' => 'newTheme_footer_text'
		)));
	}
	add_action('customize_register', 'newTheme_footer_text');



		//Title text
	function newTheme_title_text($wp_customize){
		$wp_customize->add_setting('newTheme_title_text', array(
			'default' => 'This is your Post Text',
			'transport' => 'refresh'
		));

		//Section
		$wp_customize->add_section('newTheme_title_text_section', array(
			'title' => 'Post Header'
		));

		//Control
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newTheme_title_text_control', array(
			'label' => 'Title Text',
			'section' => 'newTheme_title_text_section',
			'settings' => 'newTheme_title_text'
		)));
	}
	add_action('customize_register', 'newTheme_title_text');

	// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

	// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
	// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

	// function my_theme_wrapper_start() {
	//   echo '<section id="main">';
	// }

	// function my_theme_wrapper_end() {
	//   echo '</section>';
	// }

	// add_action( 'after_setup_theme', 'woocommerce_support' );
	// function woocommerce_support() {
	//     add_theme_support( 'woocommerce' );
	// }


