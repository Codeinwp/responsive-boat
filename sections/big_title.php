<?php

echo '<div class="header-content-wrap">';

echo '<div class="container">';

        $zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title',__('ONE OF THE TOP 10 MOST POPULAR THEMES ON WORDPRESS.ORG','responsiveboat'));

        $rb_bigtitle_logo = get_theme_mod('rb_bigtitle_logo',get_stylesheet_directory_uri().'/images/logo-small.png');

        if( !empty($rb_bigtitle_logo) ):

             echo '<a href="'.esc_url( home_url( '/' ) ).'" class="">';

                echo '<img src="'.esc_url( $rb_bigtitle_logo ).'" alt="'.get_bloginfo('title').'" class="rb_logo">';

             echo '</a>';

        endif;


if( !empty($zerif_bigtitle_title) ):


    echo '<h1 class="intro-text">'.esc_attr( $zerif_bigtitle_title ).'</h1>';


endif;





$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('Features','responsiveboat'));


$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url', esc_url( home_url( '/' ) ).'#focus');





$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__("What's inside",'responsiveboat'));


$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url',esc_url( home_url( '/' ) ).'#focus');





if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||


    (!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


    echo '<div class="buttons">';


    if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):


        echo '<a href="'.esc_url( $zerif_bigtitle_redbutton_url ).'" class="btn btn-primary custom-button red-btn">'.esc_attr( $zerif_bigtitle_redbutton_label ).'</a>';


    endif;


    if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):


        echo '<a href="'.esc_url( $zerif_bigtitle_greenbutton_url ).'" class="btn btn-primary custom-button green-btn">'.esc_attr( $zerif_bigtitle_greenbutton_label ).'</a>';


    endif;


    echo '</div>';


endif;





echo '</div>';

echo '</div><!-- .header-content-wrap -->';

echo '<div class="clear"></div>';


?>