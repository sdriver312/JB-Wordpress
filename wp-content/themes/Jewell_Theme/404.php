<?php get_header(); ?>
<?php $page_slider = do_shortcode('[wooslider slide_page="front-slideshow" slider_type="slides" limit="10"]'); ?>

<div id="home-content">
			
					<div id="image-slider">
					
					<?php if (function_exists('wooslider')) echo do_shortcode($page_slider); ?>

						
					</div><!-- end image-slider -->
					
					<div class="text">
					<p>Error 404:</p>
					<p>We're Sorry.  The Page You Are Looking For Cannot Be Found.  </p>
					</div><!-- end text -->
					
			</div><!-- end home-content	 -->		

<?php get_footer(); ?>