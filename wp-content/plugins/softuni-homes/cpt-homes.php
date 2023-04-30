<?php

/**
 * Register a custom post type called "home".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_homes_cpt() {
	$labels = array(
		'name'                  => _x( 'Homes', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Home', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Homes', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Home', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Home', 'softuni' ),
		'new_item'              => __( 'New Home', 'softuni' ),
		'edit_item'             => __( 'Edit Home', 'softuni' ),
		'view_item'             => __( 'View Home', 'softuni' ),
		'all_items'             => __( 'All Homes', 'softuni' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'home' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'home', $args );
}
add_action( 'init', 'softuni_homes_cpt' );

/**
 * Register a 'location' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_location_taxonomy() {
	$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Locations', 'softuni' ),
		'all_items'         => __( 'All Locations', 'softuni' ),
		'parent_item'       => __( 'Parent Location', 'softuni' ),
		'parent_item_colon' => __( 'Parent Location:', 'softuni' ),
		'edit_item'         => __( 'Edit Location', 'softuni' ),
		'update_item'       => __( 'Update Locations', 'softuni' ),
		'add_new_item'      => __( 'Add New Location', 'softuni' ),
		'new_item_name'     => __( 'New Location Name', 'softuni' ),
		'menu_name'         => __( 'Locations', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'location', 'home', $args );
}
add_action( 'init', 'softuni_homes_location_taxonomy' );

/**
 * Register a 'price' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_price_taxonomy() {
	$labels = array(
		'name'              => _x( 'Prices', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Price', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Price', 'softuni' ),
		'all_items'         => __( 'All Prices', 'softuni' ),
		'parent_item'       => __( 'Parent Price', 'softuni' ),
		'parent_item_colon' => __( 'Parent Price:', 'softuni' ),
		'edit_item'         => __( 'Edit Price', 'softuni' ),
		'update_item'       => __( 'Update Price', 'softuni' ),
		'add_new_item'      => __( 'Add New Price', 'softuni' ),
		'new_item_name'     => __( 'New Price Name', 'softuni' ),
		'menu_name'         => __( 'Prices', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'price', 'home', $args );
}
add_action( 'init', 'softuni_homes_price_taxonomy' );

/**
 * Register a 'bedroom' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_bedroom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Bedrooms', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Bedroom', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Bedroom', 'softuni' ),
		'all_items'         => __( 'All Bedrooms', 'softuni' ),
		'parent_item'       => __( 'Parent Bedrooms', 'softuni' ),
		'parent_item_colon' => __( 'Parent Bedrooms:', 'softuni' ),
		'edit_item'         => __( 'Edit Bedroom', 'softuni' ),
		'update_item'       => __( 'Update Bedroom', 'softuni' ),
		'add_new_item'      => __( 'Add Number of Bedrooms', 'softuni' ),
		'new_item_name'     => __( 'New Bedroom Name', 'softuni' ),
		'menu_name'         => __( 'Bedrooms', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'bedroom', 'home', $args );
}
add_action( 'init', 'softuni_homes_bedroom_taxonomy' );

/**
 * Register a 'bathroom' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_bathroom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Bathrooms', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Bathroom', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Bathroom', 'softuni' ),
		'all_items'         => __( 'All Bathrooms', 'softuni' ),
		'parent_item'       => __( 'Parent Bathrooms', 'softuni' ),
		'parent_item_colon' => __( 'Parent Bathrooms:', 'softuni' ),
		'edit_item'         => __( 'Edit Bathroom', 'softuni' ),
		'update_item'       => __( 'Update Bathroom', 'softuni' ),
		'add_new_item'      => __( 'Add Number of Bathrooms', 'softuni' ),
		'new_item_name'     => __( 'New Bathroom Name', 'softuni' ),
		'menu_name'         => __( 'Bathrooms', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'bathroom', 'home', $args );
}
add_action( 'init', 'softuni_homes_bathroom_taxonomy' );

/**
 * Register a 'livingroom' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_livingroom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Livingrooms', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Livingroom', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Livingroom', 'softuni' ),
		'all_items'         => __( 'All Livingrooms', 'softuni' ),
		'parent_item'       => __( 'Parent Livingrooms', 'softuni' ),
		'parent_item_colon' => __( 'Parent Livingrooms:', 'softuni' ),
		'edit_item'         => __( 'Edit Livingroom', 'softuni' ),
		'update_item'       => __( 'Update Livingroom', 'softuni' ),
		'add_new_item'      => __( 'Add Number of Livingrooms', 'softuni' ),
		'new_item_name'     => __( 'New Livingroom Name', 'softuni' ),
		'menu_name'         => __( 'Livingrooms', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'livingRoom', 'home', $args );
}
add_action( 'init', 'softuni_homes_livingroom_taxonomy' );

/**
 * Register a 'kitchen' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_kitchen_taxonomy() {
	$labels = array(
		'name'              => _x( 'Kitchens', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Kitchen', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Kitchen', 'softuni' ),
		'all_items'         => __( 'All Kitchens', 'softuni' ),
		'parent_item'       => __( 'Parent Kitchens', 'softuni' ),
		'parent_item_colon' => __( 'Parent Kitchens:', 'softuni' ),
		'edit_item'         => __( 'Edit Kitchen', 'softuni' ),
		'update_item'       => __( 'Update Kitchen', 'softuni' ),
		'add_new_item'      => __( 'Add Type of Kitchen', 'softuni' ),
		'new_item_name'     => __( 'New Kitchen Name', 'softuni' ),
		'menu_name'         => __( 'Kitchens', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'kitchen', 'home', $args );
}
add_action( 'init', 'softuni_homes_kitchen_taxonomy' );

/**
 * Register a 'floors' taxonomy for post type 'home'
 *
 * @see register_post_type for registering post types.
 */
function softuni_homes_floors_taxonomy() {
	$labels = array(
		'name'              => _x( 'Floors', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Floors', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Floors', 'softuni' ),
		'all_items'         => __( 'All Floors', 'softuni' ),
		'parent_item'       => __( 'Parent Floors', 'softuni' ),
		'parent_item_colon' => __( 'Parent Floors:', 'softuni' ),
		'edit_item'         => __( 'Edit Floors', 'softuni' ),
		'update_item'       => __( 'Update Floors', 'softuni' ),
		'add_new_item'      => __( 'Add Floors', 'softuni' ),
		'new_item_name'     => __( 'New Floors Name', 'softuni' ),
		'menu_name'         => __( 'Floors', 'softuni' ),
	);
    
    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'floors', 'home', $args );
}
add_action( 'init', 'softuni_homes_floors_taxonomy' );