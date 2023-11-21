<?php   
//Events
  $labels = array( 
          'name' => 'Plasma Events', 
          'singular_name' => 'Plasma Event', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Plasma Events', 
          'edit_item' => 'Edit Events', 
          'new_item' => 'New Plasma Events', 
          'all_items' => 'All Plasma Events', 
          'view_item' => 'View Plasma Events', 
          'search_items' => 'Search Plasma Events', 
          'not_found' =>  'No Plasma Events found', 
          'not_found_in_trash' => 'No Plasma Events found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Plasma Events' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'up_event' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes'),
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'up_event', $args );
