<?php

if ( ! function_exists('movies_post_type') ) {

// Register Custom Post Type
function movies_post_type() {

	$labels = array(
		'name'                  => _x( 'Movies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'VEA Movie Posts', 'text_domain' ),
		'name_admin_bar'        => __( 'VEA Movie Posts', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Movies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Movie', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Movie', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'genre', 'actor', 'movie_year', 'writer', 'director', 'country' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'movie', $args );




    /*
     * adding taxnonomies for VEA Movie Posts.
     * taxonomies are :
     * - genre
     * - movie_year
     * - country
     * - actor
     * - director
     * - writer
     */

    $postType = 'movie';

    //adding genre
    $taxo_name = 'Genre';
	$taxo_slug = 'genre';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );

	// $wp_term = get_categories( 'taxonomy='.$taxo_slug.'&type='.$postType );

    // if ( $wp_term ) {
    //     foreach ( $wp_term as $term ) {
    //         // add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug,                                                  callable $function = '' )
    //         add_submenu_page(    'edit.php?post_type='.$postType,      $term->name,        $term->name,        'manage_options',   'edit.php?post_type='.$postType.'&'.$taxo_slug.'='.$term->slug, ''); 
    //     }
    // }




    //adding movie_year
    $taxo_name = 'Movie Year';
	$taxo_slug = 'movie_year';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );

	// $wp_term = get_categories( 'taxonomy='.$taxo_slug.'&type='.$postType );

    // if ( $wp_term ) {
    //     foreach ( $wp_term as $term ) {
    //         // add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug,                                                  callable $function = '' )
    //         add_submenu_page(    'edit.php?post_type='.$postType,      $term->name,        $term->name,        'manage_options',   'edit.php?post_type='.$postType.'&'.$taxo_slug.'='.$term->slug, ''); 
    //     }
    // }




    //adding country
    $taxo_name = 'Country';
	$taxo_slug = 'country';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );


    //adding actor
    $taxo_name = 'Actor';
	$taxo_slug = 'actor';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );


    //adding director
    $taxo_name = 'Director';
	$taxo_slug = 'director';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );




    //adding writer
    $taxo_name = 'Writer';
	$taxo_slug = 'writer';
	$args = array(
	        'labels'            => array( 'name' => _x( $taxo_name, 'taxonomy general name' )),
	        'rewrite'           => array( 'slug' => $taxo_slug ),
	);
	register_taxonomy( $taxo_slug, array( $postType ), $args );

}
add_action( 'init', 'movies_post_type', 0 );

}






