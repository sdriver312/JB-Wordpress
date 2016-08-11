<?php get_header(); ?>

	<div id="home-content">
	
	<h2>Training</h2>
				
	<div id="text-area">
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
		$custom      = get_post_custom($post->ID);
		$date        = $custom["date"][0];
		$institution = $custom["institution"][0];
		$location    = $custom["location"][0];
		$achievement = $custom["achievement"][0];
	
	?>
	
		<div id="cv-module">
						
			<div id="side-dates">
				<h6><?php print $date; ?></h6>
			</div>
						
			<div id="cv-info">
					<p></p>
					<h4><?php the_title(); ?></h4>
					<h5><?php print $location; ?></h5>
					<?php the_content(); ?>
			</div><!-- end cv-info-->
					
		</div><!-- end cv-module-->
		
	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	
	</div><!-- end text_area-->
									
			
	<div id="sidebar">
				
		<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side6.jpg"></div>
		<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side2.jpg"></div>
		<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side8.jpg"></div>
		<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side1.jpg"></div>
		<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side5.jpg"></div>

	</div><!-- end sidebar-->	
						
					
</div><!-- end home-content	 -->

<?php get_footer(); ?>