<?php
/*
* Plugin Name: CMS2 Book Post Type
*/


function cms2_register_post_type() {
   $labels = array(
      'name'                     => __( 'Books', 'cms2' ),
      'singular_name'            => __( 'Book', 'cms2' ),
      'add_new'                  => __( 'Add New', 'cms2' ),
      'add_new_item'             => __( 'Add New book', 'cms2' ),
      'edit_item'                => __( 'Edit book', 'cms2' ),
      'new_item'                 => __( 'New book', 'cms2' ),
      'view_item'                => __( 'View book', 'cms2' ),
      'view_items'               => __( 'View books', 'cms2' ),
      'search_items'             => __( 'Search books', 'cms2' ),
      'not_found'                => __( 'No Books found.', 'cms2' ),
      'not_found_in_trash'       => __( 'No Books found in Trash.', 'cms2' ),
      'parent_item_colon'        => __( 'Parent books:', 'cms2' ),
      'all_items'                => __( 'All books', 'cms2' ),
      'archives'                 => __( 'Book Archives', 'cms2' ),
      'attributes'               => __( 'Book Attributes', 'cms2' ),
      'insert_into_item'         => __( 'Insert into book', 'cms2' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this book', 'cms2' ),
      'featured_image'           => __( 'Featured Image', 'cms2' ),
      'set_featured_image'       => __( 'Set featured image', 'cms2' ),
      'remove_featured_image'    => __( 'Remove featured image', 'cms2' ),
      'use_featured_image'       => __( 'Use as featured image', 'cms2' ),
      'menu_name'                => __( 'Books', 'cms2' ),
      'filter_items_list'        => __( 'Filter book list', 'cms2' ),
      'filter_by_date'           => __( 'Filter by date', 'cms2' ),
      'items_list_navigation'    => __( 'Books list navigation', 'cms2' ),
      'items_list'               => __( 'Books list', 'cms2' ),
      'item_published'           => __( 'Book published.', 'cms2' ),
      'item_published_privately' => __( 'Book published privately.', 'cms2' ),
      'item_reverted_to_draft'   => __( 'Book reverted to draft.', 'cms2' ),
      'item_scheduled'           => __( 'Book scheduled.', 'cms2' ),
      'item_updated'             => __( 'Book updated.', 'cms2' ),
      'item_link'                => __( 'Book Link', 'cms2' ),
      'item_link_description'    => __( 'A link to an book.', 'cms2' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company books', 'cms2' ),
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
      'menu_icon'             => 'dashicons-book',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'featured-image','author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
      'taxonomies'            => array(),
      'has_archive'           => false,
      'rewrite'               => array( 'slug' => 'books' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,
   );
   register_post_type( 'cms2_book', $args );
}
add_action( 'init', 'cms2_register_post_type' );
