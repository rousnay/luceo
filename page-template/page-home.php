<?php
/**
 * Template Name: Home
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width">
	<div class="row">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="sections">
					<?php //the_content(); ?>

					<div class="home-page-content">
						<div class="main-text">
						LUCEO <strong>Removes<br>
						the stress</strong> from<br>
						investing<br>
						</div>
						<br>
						<div class="sub-text">Everyone deserves INVESTMENTS THAT HELP ACHIEVE THE LIFESTYLE THEY WANT.</div>
						<div class="home-btn buttons"><a href="http://genuineimitation.co.uk/luceo/funds/">View our Funds</a></div>
					</did>

				</div>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>