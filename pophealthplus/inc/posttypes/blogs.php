<?php   
//Blogs
  $labels = array( 
          'name' => 'Blogs', 
          'singular_name' => 'Blog', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Blogs', 
          'edit_item' => 'Edit Blogs', 
          'new_item' => 'New Blogs', 
          'all_items' => 'All Blogs', 
          'view_item' => 'View Blogs', 
          'search_items' => 'Search Blogs', 
          'not_found' =>  'No Blogs found', 
          'not_found_in_trash' => 'No Blogs found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Blogs' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'show_in_rest' => true,
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'blog' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'blog', $args );
  function create_blog_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'blog_categories', array( 'blog' ), $args );
}
add_action( 'init', 'create_blog_taxonomies', 0 );