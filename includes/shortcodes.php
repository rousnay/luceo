<?php 

/**
 * Shortcode: Recent Post Slider
 */
function recent_post_slider($atts, $content = null){

	ob_start();

	echo '<div class="post-slider row"><div id="recent-posts" class="owl-carousel">';

	global $post;
	$post_query = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 12,
		'order'=>'DESC',
		'orderby' => 'date',
		)
	);

	if( $post_query->have_posts() ) : while( $post_query->have_posts() ) : $post_query->the_post();
	$thumb_post = wp_get_attachment_image_src( get_post_thumbnail_id(), 'luceo_related_post');
	$url_post = $thumb_post[0];
	$content = get_the_content();

	echo '<div class="col-xs-12"><div class="thumbnail thumbnail-hover">';
	echo '<img class="img-responsive" src=" ' . $url_post . '">';
	echo '<a href=" ' . get_permalink() .' " " title=" ' .  get_the_title() .' " class="overlay"></a>';
	echo '</div>';
	echo '<div class="entry">';
	echo '<h3><a href=" ' . get_permalink() . ' "> ' . get_the_title() . '</a></h3>';
	echo '<span class="date"> <i class="fa fa-clock-o"></i> ' . get_the_time(get_option('date_format')) .'</span>';
	echo '<div class="entry-content">' . wp_trim_words( $content , '27' ) . '</div>';
	echo '<div class="read-more">';
	echo '<a href="' . get_permalink() . ' " class="btn read-more-btn">View Article</a>';
	echo '</div>';
	echo '</div></div>';

	endwhile;
	wp_reset_postdata();
	endif;

	echo '</div></div>';

	$output = ob_get_clean();
	return $output;
}

add_shortcode('recent_posts','recent_post_slider');


/**
 * Shortcode: Recent Post Slider
 */
function member_logo_slider($atts, $content = null){

	ob_start();

	echo '<div class="members-logo row"> <div id="logo-slider" class="owl-carousel">';

	if( have_rows('members_logo', 'option') ):
		while ( have_rows('members_logo', 'option') ) : the_row();
	$logo_url = get_sub_field('logo');
	$company_link = get_sub_field('link');

	echo '<div class="thumbnail thumbnail-hover">';
	echo '<img class="img-responsive" src=" ' . $logo_url . '">';
	echo '<a href=" ' . $company_link .' " " title=" ' .  $company_link .' " class="link-full"></a>';
	echo '</div>';

	endwhile;
	else :
		echo '<div class="col-xs-12">Members Logo Slider not found! <be> please add some logo in theme setting page</div>';
	endif;
	echo '</div></div>';

	$output = ob_get_clean();
	return $output;
}

add_shortcode('members_logo','member_logo_slider');


/**
 * Shortcode: Share Price
 */
function share_price_feed($atts, $content = null){

	ob_start();

	$xmldat = file_get_contents('http://qfx.quartalflife.com/clients/uk/luceo_group/xml/xml.aspx');
	file_put_contents('./wp-content/themes/luceo/xml-feeds/share-price.xml', $xmldat);

	$url 	= './wp-content/themes/luceo/xml-feeds/share-price.xml';
	$xml 	= simplexml_load_file($url);
	$price 	= $xml->CurrentPrice;
	$change = $xml->Change;
	$change_pcent 	= $xml->PercentageChange;
	$volume = $xml->Volume;
	$Date 	= $xml->Date; 
	$time 	= $xml->time; 

	echo '<div class="share_price_feed">';

	echo '<div class="feed_options"><div class="share_data_title">Share Price:</div><div class="share_data">' . $price . '</div></div>';
	echo '<div class="feed_options"><div class="share_data_title">Change:</div><div class="share_data">' . $change . 'p</div></div>';
	echo '<div class="feed_options"><div class="share_data_title">Volume:</div><div class="share_data">' . $volume . '</div></div>';
	echo '<div class="feed_options"><div class="share_data_title">Date:</div><div class="share_data">' . $Date . '</div></div>';
	echo '<div class="feed_options"><div class="share_data_title">Time:</div><div class="share_data">' . $time . '</div></div>';

	echo '</div>';

	$output = ob_get_clean();
	return $output;
}

add_shortcode('share_price','share_price_feed');



/**
 * Shortcode: RNS Feeds
 */
function rns_feed_fn($atts, $content = null){

	ob_start();

	$xmldata = file_get_contents('http://otp.investis.com/clients/uk/luceo_group_plc/rns/xml-feed.aspx?culture=en-GB');
	file_put_contents('./wp-content/themes/luceo/xml-feeds/rns-feed.xml', $xmldata);

	$url 	= './wp-content/themes/luceo/xml-feeds/rns-feed.xml';
	$xml 	= simplexml_load_file($url);

	foreach ($xml->RNSSummaries->RNSSummary as $RNSSummary) {
		$RNSDateTime = $RNSSummary->pubDate;
		$RNSDate = substr($RNSDateTime, 5, 11);
		$RNSLink = $RNSSummary->ShareURL;
		$RNSTitle = $RNSSummary->Title;

		echo $RNSDate, ' – <a title="Read article" href=" ', $RNSLink, ' " target="_blank"> ', $RNSTitle, ' </a><br> ', PHP_EOL;
	}

	$output = ob_get_clean();
	return $output;
}

add_shortcode('rns_feed','rns_feed_fn');


/**
 * Shortcode: Display a List of Child Pages For a Parent Page
 *
 * Code: [wpb_childpages]
 *
 * or <?php wittyplex_list_child_pages(); ?>
 *
 **/
function wittyplex_list_child_pages() { 

	global $post; 

	if ( is_page() && $post->post_parent )

		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

	if ( $childpages ) {

		$string = '<ul class="child-page-menu">' . $childpages . '</ul>';
	}
	return $string;
}
add_shortcode('list_childpages', 'wittyplex_list_child_pages');



/**
 * Shortcode: Display Buttons
 *
 * Code: [button style="large yellow" width="200px" link="http://www.google.com" title="Link Title"]
 *
 * or <?php wittyplex_adding_custom_button(); ?>
 *
 **/
function wittyplex_adding_custom_button($atts, $content = null) {
	extract(shortcode_atts(array(
		'title' => 'Button Title',
		'link' => '#',
		'style' => 'normal yallow',
		'width' => 'inherit',
		), $atts));

	return '<div style="width: '.$width.' " class="buttons '.$style.'"><a href="'.$link.'">'.$title.'</a></div>';
}
add_shortcode('button', 'wittyplex_adding_custom_button');



/**
 * Shortcode: Display Texts
 *
 * Code: [content style="normal gray" size="12px" font="Raleway" text="Text here"]
 *
 * or <?php wittyplex_adding_custom_text_style(); ?>
 *
 **/
function wittyplex_adding_custom_text_style($atts, $content = null) {
	extract(shortcode_atts(array(
		'text' => 'Button Title',
		'style' => 'gray',
		'size' => 'inherit',
		'font' => 'inherit',
		), $atts));

	return '<div style="font-size: '.$size.'; font-family: '.$font.'" class="contents '.$style.'">'.$text.' </div>';
}
add_shortcode('content', 'wittyplex_adding_custom_text_style');







/**
 * Shortcode: Display SVG Buttons
 *
 * Code: [svg_button text1="Click to" text2="Contact Us" text1_size="14px" text2_size="23px" text1_style="gray" text2_style="yellow" link="http://www.google.com"]
 *
 * or <?php wittyplex_adding_custom_svg_button(); ?>
 *
 **/
function wittyplex_adding_custom_svg_button($atts, $content = null) {
	extract(shortcode_atts(array(
		'text1' => 'Click to',
		'text2' => 'Contact Us',
		'text1_size' => '16px',
		'text2_size' => '23px',
		'text1_style' => 'gray',
		'text2_style' => 'yellow',
		'link' => '#',
		), $atts));

	return '<div class="svg-button">

	<div class="svg-inner">
		<a href="'.$link.'">
			<div class="svg-text">
				<p style="font-size:'.$text1_size.'" class="'.$text1_style.'">'.$text1.'</h6>
				<p style="font-size:'.$text2_size.'" class="'.$text2_style.'">'.$text2.'</h2>
			</div>
		</a>
	</div>

	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 220 220" xml:space="preserve">
		<g class="svg-crl">
			<path d="M191.149,84.762c2.522,7.978,3.895,16.462,3.921,25.26c0.137,46.757-37.794,84.909-84.551,85.045
			c-46.757,0.137-84.909-37.792-85.045-84.55C25.36,72.148,50.89,39.592,85.889,29.064l-1.4-4.752
			c-37.057,11.134-64.09,45.598-63.972,86.22c0.145,49.49,40.524,89.634,90.014,89.49s89.636-40.524,89.491-90.014
			c-0.027-9.321-1.485-18.31-4.159-26.762L191.149,84.762z"/>
			<path d="M162.626,32.8c24.754,16.782,41.091,45.1,41.184,77.197c0.151,51.579-41.688,93.663-93.267,93.814
			c-51.579,0.151-93.663-41.688-93.814-93.267c-0.064-22.071,7.577-42.389,20.363-58.441l-3.868-3.091
			c-13.468,16.904-21.517,38.302-21.449,61.546c0.159,54.31,44.473,98.366,98.783,98.207c54.31-0.159,98.366-44.473,98.207-98.783
			c-0.099-33.793-17.298-63.608-43.357-81.28L162.626,32.8z"/>
			<path d="M108.855,7.987c0.373-0.005,0.742-0.031,1.116-0.032c56.417-0.165,102.451,45.599,102.616,102.016
			s-45.601,102.451-102.018,102.616C54.152,212.752,8.12,166.986,7.955,110.569c-0.044-15.218,3.278-29.667,9.224-42.677
			l-4.512-2.044C6.435,79.486,2.954,94.632,3,110.584c0.173,59.15,48.433,107.131,107.583,106.958
			c59.15-0.173,107.131-48.435,106.958-107.585S169.106,2.828,109.957,3c-0.388,0.001-0.77,0.027-1.156,0.033L108.855,7.987z"/>
		</g>
	</svg>

</div>';
}
add_shortcode('svg_button', 'wittyplex_adding_custom_svg_button');