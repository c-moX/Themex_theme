<?php 

add_action( 'widgets_init', 'themx_theme_register_sidebar' );
function themx_theme_register_sidebar() {
    register_sidebar( array(
    'name' => esc_html__( 'Main Sidebar', 'theme-slug' ),
    'id' => 'themx-blog-sidebar',
    'description' => __( 'This Is Our Sidebar Widget', 'themx' ),
    'before_widget' => '<div class="Blog_standard_right_widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="right_widget_titles"><h4>',
	'after_title'   => '</h4></div>',
    ) );
	
	register_sidebar( array(
    'name' => esc_html__( 'Footer Sidebar', 'theme-slug' ),
    'id' => 'themx-footer-sidebar',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}