<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:200,400' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
	       <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coast' ); ?></a>
    
        <header id="masthead" class="site-header" role="banner">
            <div class="infopack">
                <div class="container">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
                    </div>
                    <a href="#" title="Request your free information pack now" class="request">Request your free information pack now</a>
                </div>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container">
			         <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'coast' ); ?></button>
			         <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
            <div
            </nav>
        </header>

	<div id="content" class="site-content">
