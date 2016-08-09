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
		<div class="sidebar" role="complementary">
			<div class="sidebar-inner">
				<aside id="text-13" class="widget widget_text"><h3 class="widget-title">Contact Infos</h3>			<div class="textwidget"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum.</p>

					<h6>Apple Computer Inc</h6>
					<p>
						<span>1 Infinite Loop</span>
						<span>Cupertino CA 95014</span>
						<span>Email: contact@wowothemes.com</span>
						<span>Twitter: @WowoThemes</span>
						<span>Phone: +44 6745 734-472</span>
						<span>Fax: +44 6745 734-473</span>
					</p></div>
				</aside><aside id="text-15" class="widget widget_text"><h3 class="widget-title">Contact Form</h3>			<div class="textwidget">	<div id="ninja_forms_form_1_cont" class="ninja-forms-cont">
				<div id="ninja_forms_form_1_wrap" class="ninja-forms-form-wrap">
					<div id="ninja_forms_form_1_response_msg" style="" class="ninja-forms-response-msg "></div>	

				</div>
			</div>
		</div>
	</aside>		</div>
</div>
</div>




<div id="page" class="site full-width home-page-bg">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'luceo' ); ?></a>

	<header id="masthead" class="site-header panel-top panel-fixed" role="banner">
		<div class="container">
			<div class="row top-bar">
				<div class="col-md-6 top-text-line hidden-xs hidden-sm">
					<h4>Investment funds from Lighthouse Group PLC - 020 000 000</h4>
				</div>

				<div class="col-sm-12 col-xs-12 col-md-6 tool-bar sideheader-trigger">
					<a href="#" class="link">
						<i class="fa fa-search"></i>
					</a>

					<a href="#" class="link">
						<button class="c-hamburger c-hamburger--htra">
							<span>toggle menu</span>
						</button>
						<span> ask a question </span>
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