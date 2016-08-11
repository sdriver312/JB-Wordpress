<?php
/*
	Template Name: Profile 
*/
?>


<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">
				
				<h2><?php if(is_page()) {
					echo the_title(); 
				} ?></h2>
				<div id="text-area" class="text-two-column"><?php the_content(); ?>
 
				</div><!-- end text_area-->
									
			
				<div id="sidebar">
				
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side4.jpg"></div>
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side2.jpg"></div>
				<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side3.jpg"></div>
			
				</div><!-- end sidebar-->
						
					
</div><!-- end home-content	 -->		
		
</div><!-- end content -->

<?php get_footer(); ?>