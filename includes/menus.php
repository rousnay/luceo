<?php 

/*
 * Register All Menus
 *
 */
function luceo_menus() {
    register_nav_menus(
        array(
            'header-menu-left' => __( 'Header menu left', 'nav menu location', 'luceo' ),
            'header-menu-right' => __( 'Header menu right' , 'nav menu location', 'luceo'),
            'footer-menu' => __( 'Footer menu' , 'nav menu location', 'luceo'),
            'footer-menu-bottom' => __( 'Footer menu bottom' , 'nav menu location', 'luceo')
            )
        );
}

add_action( 'init', 'luceo_menus' );


/*
 * Menus Settings
 *
 */

//Left menu
function luceo_header_menu_left() {
    if ( has_nav_menu( 'header-menu-left' ) ) {
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu-left',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => 'header-menu-left-id',
            'container_class' => 'header-menu-left-cl',
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

//Right menu
function luceo_header_menu_right() {
    if ( has_nav_menu( 'header-menu-right' ) ) {
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu-right',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => 'header-menu-right-id',
            'container_class' => 'header-menu-right-cl',
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

//Menu footer-bottom
function luceo_footer_menu_bottom() {
    if ( has_nav_menu( 'footer-menu-bottom' ) ) {
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menu-bottom',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => 'footer-menu-bottom-id',
            'container_class' => 'footer-menu-bottom-cl',
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