<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <div class="menu_container">
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/logo_nav.png'?>" class="logo-nav" alt="logo nav">
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/cat1.png'?>" class="cat1" alt="cat1">
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/cat2.png'?>" class="cat2" alt="cat2">  
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/cat3.png'?>" class="cat3" alt="cat3">
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/fleur1.png'?>" class="fleur1" alt="fleur1">
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/fleur2.png'?>" class="fleur2" alt="fleur2">  
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/fleur3.png'?>" class="fleur3" alt="fleur3"> 
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/fleur4.png'?>" class="fleur4" alt="fleur4"> 
                <img src="<?php echo get_stylesheet_directory_uri() .'/assets/menu/fleur5.png'?>" class="fleur5" alt="fleur5"> 
                <!--
                <ul class="menu">
                    <li><a href="#story"><span class="fadeIn">Histoire</span></a></li>
                    <li><a href="#characters"><span class="fadeIn">Personnages</span></a></li>
                    <li><a href="#place"><span class="fadeIn">Lieu</span></a></li>
                    <li><a href="#studio"><span class="fadeIn">Studio</span><span class="fadeIn">Koukaki</span></a></li>
                    <li id="footer_menu"><span class="fadeIn">Studio</span><span class="fadeIn">Koukaki</span></li>
                </ul>-->
                
                <?php 
                wp_nav_menu( array(
                    'theme_location' => 'Primary',
                    'menu' => 'Menu 1',
                    'fallback_cb'    => false // Do not fall back to wp_page_menu()
                ) );                
                ?>

                <ul class="menu">
                    <li id="footer_menu"><span class="fadeIn">Studio</span><span class="fadeIn">Koukaki</span></li>
                </ul>
                
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
