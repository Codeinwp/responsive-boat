<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
    <![endif]-->

    <?php wp_head(); ?>

</head>



<?php if(isset($_POST['scrollPosition'])): ?>

<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

<body <?php body_class(); ?> >

<?php endif; ?>




<!-- =========================

   PRE LOADER

============================== -->
<?php

global $wp_customize;

if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ):

    $zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');

    if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):

        echo '<div class="preloader">';
        echo '<div class="status">&nbsp;</div>';
        echo '</div>';

    endif;

endif; ?>


<header id="home" class="header">

    <?php if(is_front_page()): ?>
        <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
    <?php else: ?>
        <div id="main-nav" class="navbar-black navbar-inverse bs-docs-nav" role="banner">
    <?php endif; ?>

        <div class="container">

            <div class="navbar-header responsive-logo">

                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

                    <span class="sr-only"><?php _e('Toggle navigation','responsiveboat'); ?></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <?php

                $zerif_logo = get_theme_mod('zerif_logo');

                if(isset($zerif_logo) && $zerif_logo != ""):

                    if( is_front_page() ):

                        echo '<a href="'.esc_url( home_url( '/' ) ).'" class="rb-navbar-brand rb-hidden-logo">';

                    else:

                        echo '<a href="'.esc_url( home_url( '/' ) ).'" class="rb-navbar-brand">';

                    endif;

                        echo '<img src="'.esc_url( $zerif_logo ).'" alt="'.get_bloginfo('title').'" >';

                    echo '</a>';

                else:

                    if( is_front_page() ):

                        echo '<a href="'.esc_url( home_url( '/' ) ).'" class="rb-navbar-brand rb-hidden-logo">';

                    else:

                        echo '<a href="'.esc_url( home_url( '/' ) ).'" class="rb-navbar-brand">';

                    endif;

                    echo "<h1 class='rb-site-title'>".get_bloginfo( 'name' )."</h1>";

                    echo "<h2 class='rb-site-description'>".get_bloginfo( 'description' )."</h2>";

                    echo '</a>';

                endif;

                ?>

            </div>

            <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">

                <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>

            </nav>


        </div>

    </div>

    <!-- / END TOP BAR -->
