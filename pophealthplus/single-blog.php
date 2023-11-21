<?php get_header();?>
	<div class="holder">
		<div class="container">
				<h1 class="title"><?php the_title();?></h1>
				<?php if(has_post_thumbnail($post)){ ?>
					<img src="<?php echo get_the_post_thumbnail_url($post);?>" class="img-responsive blog-img" alt="Image" />
				<?php } ?>
				<div class="contents">
					<span>Posted By:</span>
	        <strong><?php echo ucfirst(get_the_author_meta('display_name')); ?> | </strong>
	        <span>Posted at:</span>
	        <strong><?php echo get_the_date(); ?></strong>
					<p><?php echo apply_filters('the_content',$post->post_content);?></p>
				</div>
		</div>
	</div>
<?php get_footer();?>