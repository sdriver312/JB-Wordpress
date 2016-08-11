<?php
/*
	Template Name: Gallery 
*/
?>


<?php get_header(); ?>


<?php the_post(); ?>

<div id="home-content">

	<h2><?php if(is_page()) {
		echo the_title(); 
	} ?></h2>
				
	<div> <?php echo do_shortcode('[nggallery id=5]'); ?> </div>
	
	
						
					
</div><!-- end home-content	 -->		
		
</div><!-- end content -->
<?php get_footer(); ?>