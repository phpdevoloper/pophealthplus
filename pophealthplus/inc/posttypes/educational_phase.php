<?php   
  $labels = array( 
          'name' => 'Educational phase', 
          'singular_name' => 'Educational phase', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New phase', 
          'edit_item' => 'Edit phase', 
          'new_item' => 'New phase', 
          'all_items' => 'All phases', 
          'view_item' => 'View phase', 
          'search_items' => 'Search phase', 
          'not_found' =>  'No phase found', 
          'not_found_in_trash' => 'No phase found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Educational Phases' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'educational_phase' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'educational_phase', $args );
  register_taxonomy( 'educational_phase_categories', array('educational_phase'), array(
        'hierarchical' => true, 
        'label' => 'Categories',
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'educational_phase_cate', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'educational_phase_cate', 'educational_phase' );
