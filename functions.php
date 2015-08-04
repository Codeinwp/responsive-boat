<?php

function responsive_boat_setup() {

	add_image_size('rb_latest_news_photo', 480, 480, true);

}
add_action('after_setup_theme', 'responsive_boat_setup');

function responsive_boat_customizer() {

	require get_stylesheet_directory() . '/inc/customizer.php';

}
add_action('init', 'responsive_boat_customizer');

add_action( 'wp_enqueue_scripts', 'responsiveboat_enqueue_styles' );
function responsiveboat_enqueue_styles() {

	wp_enqueue_style( 'responsiveboat-font', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');

	wp_enqueue_style( 'responsiveboat-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

}

function responsiveboat_custom_script_fix() {

	wp_dequeue_script( 'zerif_smoothscroll' );
	wp_deregister_script( 'zerif_smoothscroll' );


	wp_dequeue_script( 'zerif_script' );
	wp_deregister_script( 'zerif_script' );
}

add_action( 'wp_enqueue_scripts', 'responsiveboat_custom_script_fix', 100 );

function responsiveboat_custom_script_fix1()
{
	wp_enqueue_script('responsiveboat-script', get_stylesheet_directory_uri() . '/js/responsive_boat_script.js', array(), '201202067', true);
}
add_action( 'wp_enqueue_scripts', 'responsiveboat_custom_script_fix1' );

function responsiveboat_remove_style_child(){
	remove_action('wp_print_scripts','zerif_php_style');
}

add_action( 'wp_enqueue_scripts', 'responsiveboat_remove_style_child', 100 );

/* get first image from a post content or get a default image */
function responsive_boat_get_first_image_from_post() {

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
