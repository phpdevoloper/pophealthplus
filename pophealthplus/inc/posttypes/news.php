<?php   
//Videos
  $labels = array( 
          'name' => 'News', 
          'singular_name' => 'News', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New News', 
          'edit_item' => 'Edit News', 
          'new_item' => 'New News', 
          'all_items' => 'All News', 
          'view_item' => 'View News', 
          'search_items' => 'Search News', 
          'not_found' =>  'No News found', 
          'not_found_in_trash' => 'No News found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'News' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'news' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => true,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
    register_post_type( 'news', $args );
    register_taxonomy( 'news_categories', array('news'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'news_categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'news_categories', 'news' );