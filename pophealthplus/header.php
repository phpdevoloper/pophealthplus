<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>Pophealthplus</title>
  <?php wp_head();?>
</head>
<body>
  <?php 
  $page_template = get_the_title();


  if (is_home() == true) {
    $page_class= "home";
    }else if ($page_template == "Contact Us") {
      $page_class= "contact";
    }else if ($page_template == "Blogs") {
      $page_class= "blog";
    } 
   ?>
<div class="master <?php echo $page_class;?>">
  <div class="rectangle1">
    <div class="logo">
      <img class="element-padded" src="<?php echo get_template_directory_uri();?>/img/121921447-padded-logo-1.png" />
      <div class="text-wrapper1-17">Pophealthpulse</div>
    </div>
    <div class="hamburger">
      <img class="" src="<?php echo get_template_directory_uri();?>/img/nav-icon.png" />
    </div>
    <ul class="navbar">
      <li class="text-wrapper1-13"><a class="active" href="<?php echo home_url()?>">Home</a></li>
      <li class="text-wrapper1-13"><a href="about.html">About</a></li>
      <li class="text-wrapper1-13"><a href="members.html">Members</a></li>
      <li class="text-wrapper1-13"><a href="<?php echo home_url() ?>/blogs">Blog</a></li>
      <li class="text-wrapper1-13"><a href="<?php echo home_url() ?>/contact-us">Contact</a></li>
      <div class="frame-19">
        <div class="frame-20">
          <div class="text-wrapper1-15">Johnson Again</div>
          <div class="text-wrapper1-16">Admin</div>
        </div>
        <img class="img1" src="<?php echo get_template_directory_uri();?>/img/arrow-down.svg" />
      </div>
    </ul>
  </div>
    
