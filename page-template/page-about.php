<?php
/**
 * Template Name: About
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="sections">
				<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
			</div><!-- .section -->
		</main><!-- #main -->
	</div><!-- .container -->

	<?php get_footer(); ?>