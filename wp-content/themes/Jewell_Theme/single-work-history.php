<?php get_header(); ?>

	<div id="home-content">
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
		$custom      = get_post_custom($post->ID);
		$dates       = $custom["Dates"][0];
		$position    = $custom["Dosition"][0];
		$website     = $custom["Website"][0];

	?>
	
		<h2>Experience</h2>
				
		<div id="text-area">
				
			<div id="cv-module">
						
				<div id="side-dates">
					<h6><?php echo get_bloginfo('the_title'); ?></h6>
				</div>
						
				<div id="cv-info">
							<h4>Bentley Pty Ltd Sole Trader Catering</h4>
							<h5>Bentley Pty Ltd</h5>
							<p>Working under the renowned Cheong Liew, ensuring quality control, kitchen procedures are
							met to the highest standard. Assisting the team to exceed the expectations of the chef and
							the customers. Maintaining a healthy and happy kitchen morale, whilst mentoring junior staff. Collaborating closely with the chef on demographics and related menu design.</p>
				</div><!-- end cv-info-->
					
			</div><!-- end cv-module-->

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>



<?php get_footer(); ?>