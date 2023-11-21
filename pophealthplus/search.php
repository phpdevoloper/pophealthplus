<?php get_header();?>
	<div class="holder">
		<div class="container">
		<?php if (have_posts()){
			while(have_posts()) {
				the_post(); ?>
				
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more..</a>
			
			<?php }
		}
		else { ?>
            	<h3>No results found. Please try again</h3>
					<ul class="list-text">
						<li>Check your spelling of the searching keyword</li>
						<li>Check the URL</li>
						<li>Clear you cookies or Temp data</li>
						<li>Check your network connection</li>
					</ul>
				

		<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>