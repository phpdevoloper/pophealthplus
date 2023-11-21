<?php get_header();?>
  <div class="header-bottom">
      <img src="<?php echo get_template_directory_uri();?>/images/banner/inner-banner-img2.jpg" class="img-fluid" width="100%" alt="Banner" />
      <div class="inbanner-contents">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="inbanner-circle"></div>
              <div class="inbanner-details">
                <h4>Plasma IAS Academy</h4>
                <h1><?php the_title();?></h1>
              </div>
            </div>
          </div>                
        </div>
      </div> 
    </div>
  </header>

	<div class="holder">
		<div class="container">
			<?php if( have_posts() ){
				while( have_posts() ){ the_post();?>
				<!-- <h3><?php the_title();?></h3> -->
				<?php the_content();?>
				<?php }
			}?>
		</div>
	</div>
<?php get_footer();?>