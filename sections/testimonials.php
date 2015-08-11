<?php


echo '<section class="testimonial" id="testimonials">';


echo '<div class="container">';


echo '<div class="section-header">';


$zerif_testimonials_title = get_theme_mod('zerif_testimonials_title',__('Testimonials','responsiveboat'));

if( !empty($zerif_testimonials_title) ):

    echo '<h2 class="black-text">'.esc_attr( $zerif_testimonials_title ).'</h2>';

endif;


$zerif_testimonials_subtitle = get_theme_mod('zerif_testimonials_subtitle');


if( !empty($zerif_testimonials_subtitle) ):


    echo '<h6 class="black-text">'.esc_attr( $zerif_testimonials_subtitle ).'</h6>';


endif;


echo '</div>';


echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';


echo '<div class="col-md-12">';


echo '<div id="client-feedbacks" class="owl-carousel owl-theme">';

if(is_active_sidebar( 'sidebar-testimonials' )):


    dynamic_sidebar( 'sidebar-testimonials' );
else:

    the_widget( 'zerif_testimonial_widget','title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial1.jpg' );
    the_widget( 'zerif_testimonial_widget','title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial2.jpg' );
    the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial3.jpg' );

endif;



echo '</div>';


echo '</div>';


echo '</div>';


echo '</div>';


echo '</section>';


?>