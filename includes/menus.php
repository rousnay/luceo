<?php 

/*
 * Register All Menus
 *
 */
function luceo_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header menu' , 'nav menu location', 'luceo'),
            'footer-menu' => __( 'Footer menu' , 'nav menu location', 'luceo')
            )
        );
}

add_action( 'init', 'luceo_menus' );


/*
 * Menus Settings
 *
 */

//Header menu
function luceo_header_menu() {
    if ( has_nav_menu( 'header-menu' ) ) {
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => 'header-menu-con-id',
            'container_class' => 'header-menu-con-cl',
            'menu_id'         => 'header-menu-id',
            'menu_class'      => 'header-menu-cl',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '<span>',
            'link_after'      => '</span>',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
    }
}

//Fotter menu
function luceo_footer_menu() {
    if ( has_nav_menu( 'footer-menu' ) ) {
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => 'footer-menu-id',
            'container_class' => 'footer-menu-cl',
            'menu_id'         => 'footer-menu-id',
            'menu_class'      => 'footer-menu-cl',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
    }
}