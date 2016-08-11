<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		      ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	
	<?php the_post(); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap" class="group">

		<div id="page-wrap">

	<div id="site-wrap">
	
		<div id="main-content">
		
			<div id="header">
			
			<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			
				<div id="top-ribbon">
				
				<a href="#">
				
					<img src="<?php echo get_template_directory_uri(); ?>/images/download_CV_ribbon.png">
				
				</a>
					
				</div>
			
				<div id="navigation">
					<?php if(function_exists('wp_nav_menu')) : ?>
					<?php wp_nav_menu(array('menu' => 'Main Navigational Menu', )); ?>
					<?php else : ?>
					<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Experience</a></li>
					<li><a href="#">Training</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					</ul>
					<?php endif; ?>
				</div>
				
			</div><!-- end header -->
			
			<div id="home-content">
			
					<!-- <div id="image-slider"> -->
					
					<?php if (function_exists('wooslider')) echo do_shortcode('[wooslider slide_page="front-slideshow" slider_type="slides" limit="10"]'); ?>
						
					<p> What the??? </p>
																							
					<!--</div> --><!-- end image-slider -->
					
					<div class="text"><?php the_content(); ?>
					</div><!-- end text -->
					
					
					<div id="download-button">
					
							<a href="CV.PDF" class="button">Download CV</a>
					
					</div><!-- end download-button -->
					
					
					
			</div><!-- end home-content	 -->		
		
		</div><!-- end content -->
		
			<div id="footer" class="group">
		
			<div id="social-media">
				<ul>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedIn.jpg" alt="LinkedIn"></a></li>
				</ul>
			</div>
			
			<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
			</div>
			
		</div><!-- end footer -->
	
	</div><!-- end site-wrap -->

</div><!-- end page-wrap -->
	
	
</body>

</html>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>