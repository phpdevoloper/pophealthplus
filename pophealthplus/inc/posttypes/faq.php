<?php   
//FAQ
  $labels = array( 
          'name' => 'FAQ', 
          'singular_name' => 'FAQ', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New FAQ', 
          'edit_item' => 'Edit FAQ', 
          'new_item' => 'New FAQ', 
          'all_items' => 'All FAQ', 
          'view_item' => 'View FAQ', 
          'search_items' => 'Search FAQ', 
          'not_found' =>  'No FAQ found', 
          'not_found_in_trash' => 'No FAQ found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'FAQ' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'faq' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => true,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'faq', $args );
  register_taxonomy( 'faq_categories', array('faq'), array(
        'hierarchical' => true, 
        'label' => 'Categories',
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'faq_categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'faq_categories', 'faq' );
  
  
