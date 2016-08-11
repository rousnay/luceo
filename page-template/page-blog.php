<?php
/**
 * Template Name: Blog/News
 *
 * @package Luceo
 */
get_header(); ?>

<div class="container wider-wrapper">
	<div class="row">

		<div class="col-md-3 left-sidebar" role="complementary">
		<?php dynamic_sidebar( 'blog_widgets' ); ?>
		</div>

		<div class="col-md-9 content-listing">

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


			<div id="blogContent">
				<?php 
				$args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
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

				<div class="all blog-item <?php echo $tax; ?>">
					<a href="<?php the_permalink() ?>" title="<?php  the_title_attribute() ?>">
						<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'luceo_related_post');
						$url = $thumb[0];
						?>
						<div class="thumbnail blog-item-img" style="background-image:url('<?php //echo $url; ?>'); background-color:<?php //the_field('post_background_color'); ?>">
							<img class="img-responsive" src="<?php echo $url; ?>">
						</div>
						<div class="blog-post-info">
							<h3><?php the_title() ?></h3>
							<h6><?php the_time(get_option('date_format')) ?></h6>
						</div>
					</a>
				</div>

			<?php endwhile; ?>
		</div>

</div>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>