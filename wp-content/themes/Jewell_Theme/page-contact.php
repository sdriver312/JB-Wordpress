<?php
/*
	Template Name: Contact 
*/
?>


<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">

	<h2><?php if(is_page()) {
		echo the_title(); 
	} ?></h2>
				
	<div id="text-area"> <?php echo do_shortcode('[contact-form-7 id="217" title="Contact form 1_copy"]'); ?> </div>
	
	<div id="sidebar">
				
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side1.jpg"></div>
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side2.jpg"></div>
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side3.jpg"></div>
			
	</div><!-- end sidebar-->
						
					
</div><!-- end home-content	 -->		
		
</div><!-- end content -->

<?php get_footer(); ?>