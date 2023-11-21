<?php   
//Videos
  $labels = array( 
          'name' => 'Videos', 
          'singular_name' => 'Video', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Videos', 
          'edit_item' => 'Edit Videos', 
          'new_item' => 'New Videos', 
          'all_items' => 'All Videos', 
          'view_item' => 'View Videos', 
          'search_items' => 'Search Videos', 
          'not_found' =>  'No Videos found', 
          'not_found_in_trash' => 'No Videos found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Videos' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'video' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => true,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
    register_post_type( 'video', $args );
    register_taxonomy( 'categories', array('video'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'video' );