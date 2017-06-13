<section class="about-us" id="aboutus">
    <div class="container">

        <div class="section-header">

            <?php
			/* title */
            $rb_aboutyou_title = get_theme_mod('rb_aboutyou_title',__('About you','responsiveboat'));

            if( !empty($rb_aboutyou_title) ):
                echo '<h2 class="white-text">'.esc_attr( $rb_aboutyou_title ).'</h2>';
            endif;
  
			/* subtitle */
            $rb_aboutyou_subtitle = get_theme_mod('rb_aboutyou_subtitle',__('Use this section to showcase important details about you.','responsiveboat'));

            if( !empty($rb_aboutyou_subtitle) ):
                echo '<h6 class="white-text">'.esc_attr( $rb_aboutyou_subtitle ).'</h6>';
            endif;

            ?>
        </div><!-- / END SECTION HEADER -->

        <div class="row">

            <?php
			/* text */
            $rb_aboutyou_text = get_theme_mod('rb_aboutyou_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.','responsiveboat');

            if( !empty($rb_aboutyou_text) ):

                echo '<div class="col-lg-6 col-md-6 column" data-scrollreveal="enter bottom after 0s over 1s">';

					echo '<p>';
						echo wp_kses( $rb_aboutyou_text, array(
							'a' => array(
								'href' => array(),
								'title' => array()
							),
							'br' => array(),
							'em' => array(),
							'strong' => array(),
							'h1' => array(),
							'h2' => array(),
							'h3' => array(),
							'h4' => array(),
							'h5' => array(),
							'h6' => array(),
							'p' => array()
						) );

					echo '</p>';

                echo '</div>';

            endif;

			/* image */
            $rb_aboutyou_image = get_theme_mod('rb_aboutyou_image',get_stylesheet_directory_uri().'/images/about.jpg');

            if( !empty($rb_aboutyou_image) ):

                echo '<div class="col-lg-6 col-md-6 column" data-scrollreveal="enter bottom after 0s over 1s">';

                    echo '<img src="'.esc_url( $rb_aboutyou_image ).'">';

                echo '</div>';

            endif;

            ?>

        </div> <!-- / END 3 COLUMNS OF ABOUT US-->

        <!-- CLIENTS -->
        <?php
        if(is_active_sidebar( 'sidebar-aboutus' )):

            $zerif_aboutus_clients_title_text = get_theme_mod( 'zerif_aboutus_clients_title_text' );

            echo '<div class="our-clients">';

            if( !empty($zerif_aboutus_clients_title_text) ) {

                echo '<h5><span class="section-footer-title">'.wp_kses_post( $zerif_aboutus_clients_title_text ).'</span></h5>';
            } elseif ( is_customize_preview() ) {
                echo '<h5><span class="section-footer-title"></span></h5>';
            }

            echo '</div>';

            echo '<div class="client-list">';
            echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
            dynamic_sidebar( 'sidebar-aboutus' );
            echo '</div>';
            echo '</div> ';
        endif;
        ?>

    </div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->