<?php

/********
Options
********/
require_once 'options/options-framework.php';
require_once get_template_directory() . '/options.php';

/********
Post Type
********/
// include('posttypes/testimonials.php');
// include('posttypes/faq.php');
// include('posttypes/products.php');
// include('posttypes/educational_phase.php');
// include('posttypes/videos.php');
include('posttypes/blogs.php');
// include('posttypes/events.php');
// include('posttypes/upcoming_events.php');
// include('posttypes/current_affairs.php');
// include('posttypes/news.php');

/********
Listing
********/

// include('includes/contact_list.php');
// include('includes/product_list.php');
// include('includes/register_list.php');
// include('includes/pagination.php');


/********
Metaboxes
********/
// include('metabox/rating.php');
include('metabox/video.php');