<?php 
/**
 Sidebar widget area (theme default).
**/
// function luceo_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'luceo' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => '',
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 		) );
// }

// add_action( 'widgets_init', 'luceo_widgets_init' );

//Push/Pull sidebar widgets
function push_sidebar_widgets_init() {

		register_sidebar( array(
		'name' => 'Push/Pull Sidebar',
		'description'   => __( 'Widgets displayed at push/pull sidebar.', 'luceo' ),
		'id' => 'push_sidebar_widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'push_sidebar_widgets_init' );


//Philosophy sidebar widgets
function philosophy_widgets_init() {

		register_sidebar( array(
		'name' => 'Philosophy Sidebar',
		'description'   => __( 'Widgets displayed at Philosophy page.', 'luceo' ),
		'id' => 'philosophy_widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'philosophy_widgets_init' );

//Blog sidebar widgets
function blog_widgets_init() {

		register_sidebar( array(
		'name' => 'Blog/News Sidebar',
		'description'   => __( 'Widgets displayed at blog/news page.', 'luceo' ),
		'id' => 'blog_widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'blog_widgets_init' );



//Footer widgets
function footer_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Widgets #1',
		'description'   => __( 'Widgets displayed at footer.', 'luceo' ),
		'id' => 'footer_widgets_1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => 'Footer Widgets #2',
		'description'   => __( 'Widgets displayed at footer.', 'luceo' ),
		'id' => 'footer_widgets_2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => 'Footer Widgets #3',
		'description'   => __( 'Widgets displayed at footer.', 'luceo' ),
		'id' => 'footer_widgets_3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => 'Footer Widgets #4',
		'description'   => __( 'Widgets displayed at footer.', 'luceo' ),
		'id' => 'footer_widgets_4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'footer_widgets_init' );