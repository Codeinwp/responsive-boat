<?php
/**
 * Theme Customizer
 *
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function responsive_boat_customize_register( $wp_customize ) {

    /* Remove About us section */
    $wp_customize->remove_panel('panel_about');
    $wp_customize->remove_section('zerif_aboutus_settings_section');
    $wp_customize->remove_section('zerif_aboutus_main_section');
    $wp_customize->remove_section('zerif_aboutus_feat1_section');
    $wp_customize->remove_section('zerif_aboutus_feat2_section');
    $wp_customize->remove_section('zerif_aboutus_feat3_section');
    $wp_customize->remove_section('zerif_aboutus_feat4_section');
    $wp_customize->remove_section('zerif_aboutus_clients_section');

    /**************************************/
    /********   About me section *********/
    /*************************************/

    $wp_customize->add_section( 'rb_aboutyou_section' , array(
        'title'       => __( 'About you section', 'responsive-boat' ),
        'priority'    => 34
    ));

    /* about you show/hide */
    $wp_customize->add_setting( 'rb_aboutyou_show', array('sanitize_callback' => 'responsive_boat_sanitize_text'));
    $wp_customize->add_control(
        'rb_aboutyou_show',
        array(
            'type' => 'checkbox',
            'label' => __('Hide about you section?','responsive-boat'),
            'section' => 'rb_aboutyou_section',
            'priority'    => 1,
        )
    );

    /* title */
    $wp_customize->add_setting( 'rb_aboutyou_title', array('sanitize_callback' => 'responsive_boat_sanitize_text','default' => __('About you','responsive-boat')));
    $wp_customize->add_control( 'rb_aboutyou_title', array(
        'label'    => __( 'Title', 'responsive-boat' ),
        'section'  => 'rb_aboutyou_section',
        'priority'    => 2,
    ));

    /* subtitle */
    $wp_customize->add_setting( 'rb_aboutyou_subtitle', array('sanitize_callback' => 'responsive_boat_sanitize_text','default' => __('Use this section to showcase important details about you.','responsive-boat')));
    $wp_customize->add_control( 'rb_aboutyou_subtitle', array(
        'label'    => __( 'Subtitle', 'responsive-boat' ),
        'section'  => 'rb_aboutyou_section',
        'priority'    => 3,
    ));

    /* text */
    $wp_customize->add_setting( 'rb_aboutyou_text', array('sanitize_callback' => 'responsive_boat_sanitize_text','default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.','responsive-boat')));
    $wp_customize->add_control( 'rb_aboutyou_text', array(
        'label'    => __( 'Text', 'responsive-boat' ),
        'section'  => 'rb_aboutyou_section',
        'priority'    => 4,
    ));

    /* image */
    $wp_customize->add_setting( 'rb_aboutyou_image', array('sanitize_callback' => 'esc_url_raw' , 'default' => get_stylesheet_directory_uri().'/images/about.jpg'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rb_aboutyou_image', array(
        'label'    => __( 'Image', 'responsive-boat' ),
        'section'  => 'rb_aboutyou_section',
        'priority'    => 5,
    )));



}
add_action( 'customize_register', 'responsive_boat_customize_register' );
