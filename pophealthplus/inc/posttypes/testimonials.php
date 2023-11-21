<?php 	
//Testimonials
	$labels = array( 
					'name' => 'Testimonials', 
					'singular_name' => 'Testimonial', 
					'add_new' => 'Add New', 
					'add_new_item' => 'Add New Testimonials', 
					'edit_item' => 'Edit Testimonials', 
					'new_item' => 'New Testimonials', 
					'all_items' => 'All Testimonials', 
					'view_item' => 'View Testimonials', 
					'search_items' => 'Search Testimonials', 
					'not_found' =>  'No Testimonials found', 
					'not_found_in_trash' => 'No Testimonials found in Trash', 
					'parent_item_colon' => '', 
					'menu_name' => 'Testimonials' 
				);	
	$args = array( 
					'labels' => $labels, 
					'public' => true, 
					'publicly_queryable' => true, 
					'show_ui' => true,  
					'show_in_menu' => true, 
					'query_var' => true, 
					'rewrite' => array( 'slug' => 'testimonial' ), 
					'capability_type' => 'post', 
					'has_archive' => true, 
					'hierarchical' => false,
					'menu_position' => null,
					'supports' => array( 'title','editor','thumbnail','excerpt' ), 
					'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
				); 
	register_post_type( 'testimonial', $args );
