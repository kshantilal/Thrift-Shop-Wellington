<?php 
	
	function customThemeEnqueues(){
		wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
		wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/thriftshop.css', array(), '1.0.0', 'all' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/thriftshop.js', array(), '1.0.0', true ); //true is asking is it in the footer. true or false.

	}
	add_action('wp_enqueue_scripts', 'customThemeEnqueues');