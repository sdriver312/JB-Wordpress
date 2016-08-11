<?php
/*
	Template Name: Homepage 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">
			
					<div id="image-slider">
					
					<?php if (function_exists('wooslider')) echo do_shortcode('[wooslider slide_page="front-slideshow" slider_type="slides" limit="10"]'); ?>

						
					</div><!-- end image-slider -->
					
					<div class="text"><?php the_content(); ?>
					</div><!-- end text -->
					
					
					<div id="download-button">
					
							<a href="<?php echo get_template_directory_uri(); ?>/Justin_Bentley_CV.pdf" class="button">Download CV</a>
					
					</div><!-- end download-button -->
					
					
					
			</div><!-- end home-content	 -->		
		
		</div><!-- end content -->

<?php get_footer(); ?>