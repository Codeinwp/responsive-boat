<section class="about-us" id="aboutus">
    <div class="container">


        <!-- SECTION HEADER -->

        <div class="section-header">


            <!-- SECTION TITLE -->

            <?php
            $rb_aboutyou_title = get_theme_mod('rb_aboutyou_title',__('About you','responsiveboat'));

            if( !empty($rb_aboutyou_title) ):
                echo '<h2 class="white-text">'.$rb_aboutyou_title.'</h2>';
            endif;
            ?>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->

            <?php


            $rb_aboutyou_subtitle = get_theme_mod('rb_aboutyou_subtitle',__('Use this section to showcase important details about you.','responsiveboat'));


            if( !empty($rb_aboutyou_subtitle) ):


                echo '<h6 class="white-text">';


                    echo __($rb_aboutyou_subtitle,'responsiveboat');


                echo '</h6>';


            endif;


            ?>
        </div><!-- / END SECTION HEADER -->


        <!-- 3 COLUMNS OF ABOUT US-->


        <div class="row">


            <!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->


            <?php

            $rb_aboutyou_text = get_theme_mod('rb_aboutyou_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.','responsiveboat');


            if( !empty($rb_aboutyou_text) ):

                echo '<div class="col-lg-6 col-md-6 column" data-scrollreveal="enter bottom after 0s over 1s">';


                echo '<p>';


                echo __($rb_aboutyou_text,'responsiveboat');


                echo '</p>';


                echo '</div>';


            endif;

            $rb_aboutyou_image = get_theme_mod('rb_aboutyou_image',get_stylesheet_directory_uri().'/images/about.jpg');

            if( !empty($rb_aboutyou_image) ):

                echo '<div class="col-lg-6 col-md-6 column" data-scrollreveal="enter bottom after 0s over 1s">';

                    echo '<img src="'.$rb_aboutyou_image.'">';

                echo '</div>';

            endif;


            ?>



        </div> <!-- / END 3 COLUMNS OF ABOUT US-->


    </div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->