<?php get_header(); ?>


<?php
if ( get_option( 'show_on_front' ) == 'page' ) {
    ?>
	<div class="clear"></div>

	</header> <!-- / END HOME SECTION  -->



		<div id="content" class="site-content">

	<div class="container">



	<div class="content-left-wrap col-md-9">



		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">



			<?php if ( have_posts() ) : ?>



				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>



					<?php

						/* Include the Post-Format-specific template for the content.

						 * If you want to override this in a child theme, then include a file

						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

						 */

						get_template_part( 'content', get_post_format() );

					?>



				<?php endwhile; ?>



				<?php zerif_paging_nav(); ?>



			<?php else : ?>



				<?php get_template_part( 'content', 'none' ); ?>



			<?php endif; ?>



			</main><!-- #main -->

		</div><!-- #primary -->



	</div><!-- .content-left-wrap -->



	<div class="sidebar-wrap col-md-3 content-left-wrap">

		<?php get_sidebar(); ?>

	</div><!-- .sidebar-wrap -->



	</div><!-- .container -->
	<?php
}else {


	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');

	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):

		include get_stylesheet_directory() . "/sections/big_title.php";
	endif;


?>


</header> <!-- / END HOME SECTION  -->


<div id="content" class="site-content">



<?php

	/* OUR FOCUS SECTION */

	$zerif_ourfocus_show = get_theme_mod('zerif_ourfocus_show');

	if( isset($zerif_ourfocus_show) && $zerif_ourfocus_show != 1 ):
		include get_template_directory() . "/sections/our_focus.php";
	endif;


	/* RIBBON WITH BOTTOM BUTTON */


	include get_template_directory() . "/sections/ribbon_with_bottom_button.php";


	/* ABOUT YOU */

	$rb_aboutyou_show = get_theme_mod('rb_aboutyou_show');

	if( isset($rb_aboutyou_show) && $rb_aboutyou_show != 1 ):

		include get_stylesheet_directory() . "/sections/about_you.php";
	endif;


	/* OUR TEAM */

	$zerif_ourteam_show = get_theme_mod('zerif_ourteam_show');

	if( isset($zerif_ourteam_show) && $zerif_ourteam_show != 1 ):

		include get_template_directory() . "/sections/our_team.php";
	endif;


	/* TESTIMONIALS */

	$zerif_testimonials_show = get_theme_mod('zerif_testimonials_show');

	if( isset($zerif_testimonials_show) && $zerif_testimonials_show != 1 ):

		include get_stylesheet_directory() . "/sections/testimonials.php";
	endif;




	/* RIBBON WITH RIGHT SIDE BUTTON */


	include get_template_directory() . "/sections/ribbon_with_right_button.php";



	/* LATEST NEWS */
	$zerif_latestnews_show = get_theme_mod('zerif_latestnews_show');

	if( isset($zerif_latestnews_show) && $zerif_latestnews_show != 1 ):

		include get_stylesheet_directory() . "/sections/latest_news.php";

	endif;

}
get_footer(); ?>
