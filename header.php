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
	<div id="sideheader">
			<div class="sidebar-inner">
				<div class="push_sidebar">
					<?php dynamic_sidebar( 'push_sidebar_widgets' ); ?>
				</div>
			</div>
	</div>
	<div id="page" class="site content-wrapper">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'luceo' ); ?></a>
		<header id="masthead" class="site-header panel-top panel-fixed" role="banner">
			<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
			<div class="container">
				<div class="row top-bar">
					<div class="col-md-6 top-text-line hidden-xs hidden-sm">
						<h4>0333 000 0330 | enquiries@luceoassestmanagement.co.uk</h4>
					</div>
					<div class="col-sm-12 col-xs-12 col-md-6 tool-bar sideheader-trigger">
						<div class="link">
							<i class="fa fa-search"></i>
						</div>
						<a href="#" class="link ask_a_question">
							<!-- <button class="c-hamburger c-hamburger--htra">
								<span>toggle menu</span>
							</button> -->
							<i class="fa fa-envelope-o"></i>
							<span> CONTACT US </span>
						</a>
					</div>
				</div>
				<div class="row header-menus">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="col-xs-7 col-sm-6 col-md-5 col-lg-5 logo-area">
							<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
							</a>
						</div>
						<div class="col-md-7 col-lg-7 hidden-xs hidden-sm menu-area">
							<?php luceo_header_menu(); ?>
						</div>
					</nav><!-- #site-navigation -->
				</div>
				<div id="search-popup">
					<div class="popup-close" href="#"><i class="fa fa-remove"></i></div>
					<h3 class="search-title">TYPE & HIT ENTER</h3>
					<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="search-wrap">
							<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'presentation' ); ?></label>
							<input id="search-input" type="search" placeholder="<?php echo esc_attr( ' ', 'presentation' ); ?>" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" autocomplete="off"/>
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</form>
				</div><!-- #search-popup -->
			</div>
		</header><!-- #masthead -->
		<div id="content" class="site-content">