<?php
/**
 * Template Name: Blog/News
 *
 * @package Luceo
 */
get_header(); ?>
<div class="container full-width">
	<div class="row">
		<div class="col-md-3 sidebar left-sidebar" role="complementary">
		<?php dynamic_sidebar( 'blog_widgets' ); ?>
		</div>
		<div class="col-md-9 blog-content">
			<div id="post-listing-isotope" class="row">
			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4,
				'paged' => $paged
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 

				$terms = get_the_terms( $post->ID, 'category' );           
				if ( $terms && ! is_wp_error( $terms ) ) : 

					$links = array();

				foreach ( $terms as $term ) {
					$links[] = $term->name;
				}

				$tax_links = join( " ", str_replace(' ', '-', $links));          
				$tax = strtolower($tax_links);
				else :  
					$tax = '';          
				endif; ?>
				<div class="all post-item col-xs-12 col-sm-6 <?php echo $tax; ?>">
					<div class="post-item-inside">
						<?php
							$post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'luceo_blog_listing');
							$thumb_url	= $post_thumb[0];
							$post_url	= get_permalink();
							$content 	= get_the_content();
						?>
						<div class="thumbnail thumbnail-hover">
							<div class="blog-img">
								<img class="img-responsive" src="<?php echo $thumb_url; ?>" >
							</div>
							<a href="<?php echo $post_url ?>" title="<?php  the_title_attribute() ?>" class="overlay"></a>
						</div>
						<div class="entry">
						<h3><a href="<?php echo $post_url ?>"> <?php the_title() ?> </a></h3>
						<div class="entry-content"><?php echo wp_trim_words( $content , '27' ) ?></div>
						<div class="entry-footer">
						<span class="date"> <i class="fa fa-clock-o"></i> <?php the_time(get_option('date_format')) ?></span>
						</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
		<div class="row">
		<div class="col-xs-12">
			<?php if (function_exists("pagination")) {
			    pagination($loop->max_num_pages);
			} ?>
			</div>
		</div>
</div>
</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>