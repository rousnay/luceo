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
	<div class="inquiry">
		<div class="col-xs-12">
			<div class="invest-inquiry">
				<h2>For general enquires call: 0333 000 0330</h2>
				<a href="<?php echo site_url(); ?>/advice">Luceo Funds are only available via a financial adviser. To talk to a Lighthouse financial adviser, click here.</a>
			</div>
		</div>
	</div>
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
	//Fix the position of toggle menu icon
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

	//Google Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-84299132-1', 'auto');
	ga('send', 'pageview');
</script>

</body>
</html>