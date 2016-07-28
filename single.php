<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Luceo
 */

get_header(); ?>

	<div id="primary" class="container content-area wider-wrapper">
		<div class="row">
			<div class="col-md-12 content-listing">
			
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					$thumb_feature = wp_get_attachment_image_src( get_post_thumbnail_id(), 'luceo_feature_img');
					$url_feature = $thumb_feature[0];
				?> 

				<div class="post-img">
				<img class="img-responsive" src="<?php echo $url_feature; ?>">
				</div>

				<?php 
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
					
			</div><!-- .blog-listing -->
		</div><!-- .row -->
	</div><!-- #primary -->

<?php
get_footer();
