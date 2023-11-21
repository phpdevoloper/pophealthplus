<?php   
//Events
  $labels = array( 
          'name' => 'Events', 
          'singular_name' => 'Event', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Events', 
          'edit_item' => 'Edit Events', 
          'new_item' => 'New Events', 
          'all_items' => 'All Events', 
          'view_item' => 'View Events', 
          'search_items' => 'Search Events', 
          'not_found' =>  'No Events found', 
          'not_found_in_trash' => 'No Events found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Upcoming Events' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'event' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes'),
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'event', $args );
