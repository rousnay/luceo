<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Luceo
 */

get_header(); ?>

	<div id="primary" class="container full-width">
		<div class="row">
		
			<div class="col-md-3 sidebar left-sidebar" role="complementary">
			<?php dynamic_sidebar( 'blog_widgets' ); ?>
			</div>

			<div class="col-md-9 content-single">
			
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
