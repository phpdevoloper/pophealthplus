<?php   
//Current Affairs
  $labels = array( 
          'name' => 'Current Affairs', 
          'singular_name' => 'Current Affairs', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Link', 
          'edit_item' => 'Edit Link', 
          'new_item' => 'New Link', 
          'all_items' => 'All Link', 
          'view_item' => 'View Link', 
          'search_items' => 'Search Link', 
          'not_found' =>  'No Current Affairs found', 
          'not_found_in_trash' => 'No Current Affairs found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Current Affairs' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'current_affairs' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'current_affairs', $args );
  register_taxonomy( 'ca_categories', array('current_affairs'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'ca_categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'ca_categories', 'current_affairs' );
