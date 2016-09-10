<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luceo
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-normal">
		<div class="container">
			<div class="row widget">
				<div class="col-sm-6 col-md-3 widget-col widget-col-1"><?php dynamic_sidebar( 'footer_widgets_1' ); ?></div>
				<div class="col-sm-6 col-md-3 widget-col widget-col-2"><?php dynamic_sidebar( 'footer_widgets_2' ); ?></div>
				<div class="col-sm-6 col-md-3 widget-col widget-col-3"><?php dynamic_sidebar( 'footer_widgets_3' ); ?></div>
				<div class="col-sm-6 col-md-3 widget-col widget-col-4"><?php dynamic_sidebar( 'footer_widgets_4' ); ?></div>
			</div>
		</div>
	</div>

</footer><!-- footer -->
</div><!-- #page -->
<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
<!-- MENU FOR SMALL SCREEN -->
<nav id="mm-menu" class="mm-menu">
	<div class="mm-menu__header">
		<h2 class="mm-menu__title">Luceo</h2>
	</div>
	<?php luceo_header_menu(); ?>
</nav><!-- nav -->

<?php wp_footer(); ?>
<script type="text/javascript">
	function fixed_header_with_adminBar() {
		var adminBarHeight	= jQuery('#wpadminbar').height();
		var menuToggleTop 	= 22;
		var topTotal 		= adminBarHeight + menuToggleTop;
		//jQuery('#masthead').css('top',adminBarHeight);
		jQuery('#mm-menu-toggle').css('top',topTotal)
	}
	fixed_header_with_adminBar();
	jQuery( window ).resize(function() {
		fixed_header_with_adminBar();
	});
</script>
</body>
</html>