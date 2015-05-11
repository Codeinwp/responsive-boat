<?php

// add any new or customised functions here

add_action( 'wp_enqueue_scripts', 'responsive_boat_enqueue_styles' );
function responsive_boat_enqueue_styles() {
	
	wp_enqueue_style( 'responsive_boat_font', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

	// Loads our main stylesheet.
	 wp_enqueue_style( 'zerif-child-style', get_stylesheet_uri(), array('zerif_style'), 'v1' );

}

function responsive_boat_custom_script_fix()
{
	if ( !wp_is_mobile() ){

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array('zerif_scrollReveal_script'), '201202067', true); 

	}else{

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array(), '201202067', true); 
		/*  reduce height of the google maps on mobile */
		wp_enqueue_style( 'zerif-style-mobile', get_template_directory_uri() . '/css/zerif_mobile.css' );

	}
	wp_enqueue_script('zerif_nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('zerif_nicescroll-script',get_stylesheet_directory_uri().'/js/zerif-nicescroll.js',array('jquery','zerif_nicescroll'),'12121',true);	
}

add_action( 'wp_enqueue_scripts', 'responsive_boat_custom_script_fix' );

function responsive_boat_remove_style_child(){
	remove_action('wp_print_scripts','zerif_php_style');	
}

add_action( 'wp_enqueue_scripts', 'responsive_boat_remove_style_child', 100 );
