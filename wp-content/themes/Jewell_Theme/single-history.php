<?php get_header(); ?>

	<div id="home-content">
	
	<h2>Experience</h2>
				
		<div id="text-area">
				
			<div id="cv-module">
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
		$custom      = get_post_custom($post->ID);
		$dates       = $custom["dates"][0];
		$position    = $custom["position"][0];
		$website     = $custom["website"][0];

	?>
		<div id="side-dates">
					<h6><?php print $dates; ?></h6>
				</div>
						
				<div id="cv-info">
							<h4><?php the_title(); ?></h4>
							<h5><?php print $position; ?></h5>
							<p><?php the_content(); ?></p>
				</div><!-- end cv-info-->
					
			</div><!-- end cv-module-->

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			

		</div>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

</div> <!-- end text-area -->

</div><!-- end home-content	 -->		
		
</div><!-- end content -->


<?php get_footer(); ?>