<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function tutorials_post_type() {

	$labels = array(
		'name'                  => _x( 'Tutorials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Tutorial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Tutorials', 'text_domain' ),
		'name_admin_bar'        => __( 'Tutorial', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Tutorial:', 'text_domain' ),
		'all_items'             => __( 'All Tutorials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Tutorial', 'text_domain' ),
		'add_new'               => __( 'New Tutorial', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Tutorial', 'text_domain' ),
		'update_item'           => __( 'Update Tutorial', 'text_domain' ),
		'view_item'             => __( 'View Tutorial', 'text_domain' ),
		'view_items'            => __( 'View Tutorials', 'text_domain' ),
		'search_items'          => __( 'Search Tutorial', 'text_domain' ),
		'not_found'             => __( 'No tutorial found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not tutorial found in Trash', 'text_domain' ),
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
		'label'                 => __( 'Tutorial', 'text_domain' ),
		'description'           => __( 'Tutorial Information page', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'author' ),
		'taxonomies'            => array( 'tutorial','post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'tutorials',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
	);
	register_post_type( 'tutorial', $args );

}
add_action( 'init', 'tutorials_post_type', 0 );
