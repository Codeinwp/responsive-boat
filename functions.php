<?php

add_action( 'wp_enqueue_scripts', 'responsiveboat_enqueue_styles' );
function responsiveboat_enqueue_styles() {
	
	wp_enqueue_style( 'responsiveboat-font', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');
	
	wp_enqueue_style( 'responsiveboat-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

}

function responsiveboat_custom_script_fix() {
	if ( !wp_is_mobile() ){

		wp_enqueue_script('responsiveboat-script', get_stylesheet_directory_uri() .'/js/zerif.js', array('zerif_scrollReveal_script'), '201202067', true); 

	}else{

		wp_enqueue_script('responsiveboat-script', get_stylesheet_directory_uri() .'/js/zerif.js', array(), '201202067', true); 
		
		/*  reduce height of the google maps on mobile */
		wp_enqueue_style( 'responsiveboat-script-mobile', get_template_directory_uri() . '/css/zerif_mobile.css' );

	}
	
	wp_enqueue_script('responsiveboat-nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('responsiveboat-nicescroll-script',get_stylesheet_directory_uri().'/js/zerif-nicescroll.js',array('jquery','responsiveboat-nicescroll'),'12121',true);	
}

add_action( 'wp_enqueue_scripts', 'responsiveboat_custom_script_fix' );

function responsiveboat_remove_style_child(){
	remove_action('wp_print_scripts','zerif_php_style');	
}

add_action( 'wp_enqueue_scripts', 'responsiveboat_remove_style_child', 100 );

/* get first image from a post content or get a default image */
function zerif_get_first_image_from_post() {

	global $post, $posts;
	
	$zerif_first_img = '';
	ob_start();
	ob_end_clean();
  
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $zerif_matches);
	
	if( !empty($zerif_matches[1][0]) ):
		$zerif_first_img = '<img src="'.$zerif_matches[1][0].'">';
	endif;	

	if(empty($zerif_first_img)):
		$zerif_first_img = '<img src="'.get_template_directory_uri().'/images/blank-latestposts.png'.'">';
	endif;
	
	return $zerif_first_img;
	
} 
