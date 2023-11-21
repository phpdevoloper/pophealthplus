<?php   
//Products
  $labels = array( 
          'name' => 'Products', 
          'singular_name' => 'Product', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Products', 
          'edit_item' => 'Edit Products', 
          'new_item' => 'New Products', 
          'all_items' => 'All Products', 
          'view_item' => 'View Products', 
          'search_items' => 'Search Products', 
          'not_found' =>  'No Products found', 
          'not_found_in_trash' => 'No Products found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Products' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'product' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'product', $args );
