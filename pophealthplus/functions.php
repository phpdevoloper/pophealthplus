<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options/' );
  require_once get_template_directory() . '/inc/admin_config.php';

add_action( 'wp_enqueue_scripts', 'load_styles_scripts' );
  function load_styles_scripts() {
    $dir_uri = get_template_directory_uri();
    /* Css */
    wp_enqueue_style( 'bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'master-css', $dir_uri .'/css/master-style.css', array(), 'v1.0.0', 'screen' ); 
     

    $page_template = get_the_title();

    if (is_home() == true) {
      wp_enqueue_style( 'home-css', $dir_uri .'/css/home-style.css', array(), 'v1.0.0', 'screen' ); 
    }else if ($page_template == "Contact Us") {
      wp_enqueue_style( 'contact-css', $dir_uri .'/css/contact-style.css', array(), 'v1.0.0', 'screen' ); 
    } 
    else if ($page_template == "Blogs") {
      wp_enqueue_style( 'blog-css', $dir_uri .'/css/blog-style.css', array(), 'v1.0.0', 'screen' );
    } 
    
    wp_enqueue_style( 'theme-style', $dir_uri .'/style.css', array(), 'v1.0.0', 'screen' ); 
  
    /* CSS End */

    /* Scripts */
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), true );
    /* Scripts End */
    if ( is_singular() ) {
      wp_enqueue_script( "comment-reply" );
    }

  }



?>