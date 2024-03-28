<?php
/*
* Plugin Name: CMS2 Unrealeased Post Type
*/


function cms2_register_post_type() {
   $labels = array(
      'name'                     => __( 'Unreleases', 'cms2' ),
      'singular_name'            => __( 'Unreleased', 'cms2' ),
      'add_new'                  => __( 'Add New', 'cms2' ),
      'add_new_item'             => __( 'Add New Unreleased', 'cms2' ),
      'edit_item'                => __( 'Edit Unreleased', 'cms2' ),
      'new_item'                 => __( 'New Unreleased', 'cms2' ),
      'view_item'                => __( 'View Unreleased', 'cms2' ),
      'view_items'               => __( 'View Unreleases', 'cms2' ),
      'search_items'             => __( 'Search Unreleases', 'cms2' ),
      'not_found'                => __( 'No Unreleases found.', 'cms2' ),
      'not_found_in_trash'       => __( 'No Unreleases found in Trash.', 'cms2' ),
      'parent_item_colon'        => __( 'Parent Unreleases:', 'cms2' ),
      'all_items'                => __( 'All Unreleases', 'cms2' ),
      'archives'                 => __( 'Unreleased Archives', 'cms2' ),
      'attributes'               => __( 'Unreleased Attributes', 'cms2' ),
      'insert_into_item'         => __( 'Insert into Unreleased', 'cms2' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Unreleased', 'cms2' ),
      'featured_image'           => __( 'Featured Image', 'cms2' ),
      'set_featured_image'       => __( 'Set featured image', 'cms2' ),
      'remove_featured_image'    => __( 'Remove featured image', 'cms2' ),
      'use_featured_image'       => __( 'Use as featured image', 'cms2' ),
      'menu_name'                => __( 'Unreleases', 'cms2' ),
      'filter_items_list'        => __( 'Filter Unreleased list', 'cms2' ),
      'filter_by_date'           => __( 'Filter by date', 'cms2' ),
      'items_list_navigation'    => __( 'Unreleases list navigation', 'cms2' ),
      'items_list'               => __( 'Unreleases list', 'cms2' ),
      'item_published'           => __( 'Unreleased published.', 'cms2' ),
      'item_published_privately' => __( 'Unreleased published privately.', 'cms2' ),
      'item_reverted_to_draft'   => __( 'Unreleased reverted to draft.', 'cms2' ),
      'item_scheduled'           => __( 'Unreleased scheduled.', 'cms2' ),
      'item_updated'             => __( 'Unreleased updated.', 'cms2' ),
      'item_link'                => __( 'Unreleased Link', 'cms2' ),
      'item_link_description'    => __( 'A link to an Unreleased.', 'cms2' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Unreleases', 'cms2' ),
      'public'                => true,
      'hierarchical'          => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'show_in_admin_bar'     => false,
      'show_in_rest'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-tagcloud',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'featured-image','author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
      'taxonomies'            => array(),
      'has_archive'           => false,
      'rewrite'               => array( 'slug' => 'Unreleases' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,
   );
   register_post_type( 'cms2_unreleased', $args );
}
add_action( 'init', 'cms2_register_post_type' );
