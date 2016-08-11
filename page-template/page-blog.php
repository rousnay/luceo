<?php
/**
 * Template Name: Blog/News
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container full-width">
	<div class="row">

		<div class="col-md-3 left-sidebar" role="complementary">
		<?php dynamic_sidebar( 'blog_widgets' ); ?>
		</div>

		<div class="col-md-9 blog-content">

			<div id="filters" class="select-filter">
				<select class="filtering">
			        <option value=".category-1">category-1</option>    
			        <option value=".category-2">category-2</option>
			        <option value=".category-3">category-3</option>
			        <option value=".all">All</option>
			    </select>    
			</div>

			<ul id="filters">
		        <li class="events" data-filter=".category-1"><a href="javascript:void(0)">category-1</a></li>
		        <li class="workshops" data-filter=".category-2"><a href="javascript:void(0)">category-2</a></li>
		        <li class="products" data-filter=".category-3"><a href="javascript:void(0)">category-3</a></li>
		        <li class="active all" data-filter=".all"><a href="javascript:void(0)">All</a></li>
		    </ul>


			<div id="post-listing">
				<?php 
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
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
						<?php
							$post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'luceo_blog_listing');
							$thumb_url = $post_thumb[0];
							$content = get_the_content();
						?>
					



						<div class="thumbnail thumbnail-hover">
							<div class="blog-img">
								<img class="img-responsive" src="<?php echo $thumb_url; ?>" >
							</div>
							<a href="<?php the_permalink() ?>" title="<?php  the_title_attribute() ?>" class="overlay"></a>
						</div>



						<div class="entry">
						<h3><a href="<?php get_permalink() ?>"> <?php the_title() ?> </a></h3>
						<div class="entry-content"><?php echo wp_trim_words( $content , '27' ) ?></div>
						<div class="read-more">
						<span class="date"> <i class="fa fa-clock-o"></i> <?php the_time(get_option('date_format')) ?></span>
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