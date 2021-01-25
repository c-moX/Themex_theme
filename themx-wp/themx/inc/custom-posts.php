<?php


function themx_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
	
}
add_action( 'init', 'themx_portfolio' );


function create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Portfolios', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Portfolio', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Portfolios', 'textdomain' ),
		'all_items'         => __( 'All Portfolios', 'textdomain' ),
		'parent_item'       => __( 'Parent Portfolio', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'textdomain' ),
		'edit_item'         => __( 'Edit Portfolio', 'textdomain' ),
		'update_item'       => __( 'Update Portfolio', 'textdomain' ),
		'add_new_item'      => __( 'Add New Portfolio', 'textdomain' ),
		'new_item_name'     => __( 'New Portfolio Name', 'textdomain' ),
		'menu_name'         => __( 'Portfolio', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Portfolio' ),
	);

	register_taxonomy( 'Portfolio', array( 'portfolio' ), $args );	
}
add_action( 'init', 'create_portfolio_taxonomies', 0 );



