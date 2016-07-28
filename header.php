<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luceo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'luceo' ); ?></a>

		<header id="masthead" class="site-header panel-top panel-fixed" role="banner">
			<div class="container">
				<div class="row social-links">
					<div class="col-md-6 top-text-line">
					<h4>Investment founds from Lighthouse Group PLC - 020 000 000</h4>

					</div>
					<div class="col-sm-12 col-xs-12 col-md-6 social-items">

						<a href="https://www.facebook.com" class="link fa-stack fa-lg" target="_blank">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
						  	<i class="fa fa-facebook fa-stack-1x"></i>
						</a>

						<a href="https://twitter.com" class="link fa-stack fa-lg" target="_blank">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
						  	<i class="fa fa-twitter fa-stack-1x"></i>
						</a>

						<a href="https://plus.google.com" class="link fa-stack fa-lg" target="_blank">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
						  	<i class="fa fa-google-plus fa-stack-1x"></i>
						</a>

						<a href="https://instagram.com" class="link fa-stack fa-lg" target="_blank">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
						  	<i class="fa fa-instagram fa-stack-1x"></i>
						</a>
						
					</div>
				</div>
				<div class="row header-menus">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="col-md-5 col-lg-5">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
							</a>
						</div>
						<div class="col-md-7 col-lg-7 hidden-xs hidden-sm menu-area">
							<div id="menu-right">
								<?php luceo_header_menu(); ?>
							</div>
						</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">