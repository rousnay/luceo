<?php
/**
 * Template Name: Philosophy
 *
 * @package Lighthouse
 */
get_header(); ?>
<div class="container full-width">
	<div class="row">

		<div class="col-md-3 sidebar" role="complementary">
			<?php dynamic_sidebar( 'philosophy_widgets' ); ?>
		</div>

		<div class="col-md-9 content-area">

		    <main id="main" class="site-main" role="main">
		      <?php while ( have_posts() ) : the_post(); ?>
		        <section class="page-content">
		          <?php the_content(); ?>
		        </section>
		      <?php endwhile; // end of the loop. ?>
		    </main><!-- #main -->

		</div>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>