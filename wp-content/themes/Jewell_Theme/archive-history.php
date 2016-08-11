<?php get_header(); ?>

	<div id="home-content">
	
	<h2>Experience</h2>
				
		<div id="text-area">
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
		$custom      = get_post_custom($post->ID);
		$dates       = $custom["dates"][0];
		$position    = $custom["position"][0];
		$website     = $custom["website"][0];

	?>
		<div id="cv-module">
		
		<div id="side-dates">
			<h6><?php print $dates; ?></h6>
		</div>
						
				<div id="cv-info">
							<h4><?php the_title(); ?>
							<a class="small" href="<?php print $website; ?>"><?php print $website; ?></a></h4>
							<h5><?php print $position; ?></h5>
							<?php the_content(); ?>
				</div><!-- end cv-info-->
					
		</div><!-- end cv-module-->


	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

</div> <!-- end text-area -->

		<div id="sidebar">
				
					<div class="side-image"><img src="<?php echo get_template_directory_uri();?>/images/side1.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri();?>/images/side3.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri();?>/images/side7.jpg"></div>
					
					<div id="sidebar-additions">
						<h7>Capabilities:</h7>
						<p class="divider"></p>
						<p class="divider">Honest and diligent employee</p>
						<p class="divider">Good communication skills, with the ability to work as a team member or leader</p>
						<p class="divider">Passionate about producing high quality food</p>
						<p class="divider">Meticulous about kitchen cleanliness and safe food handling</p>
						<p class="divider">Excellent organisational skills</p>
						<p class="divider">Enthusiastic about learning new cuisine and skills</p>
						<p class="divider">Experienced with Mediterranean, Euro Asian and traditional French cuisines</p>
					</div><!-- end sidebar-additions-->	
					
				</div><!-- end sidebar-->	
		
</div><!-- end content -->


<?php get_footer(); ?>