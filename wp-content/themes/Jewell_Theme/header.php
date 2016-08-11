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
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap" class="group">

		<!-- <div id="page-wrap"> -->

	<div id="site-wrap">
	
		<div id="content">
		
			<div id="header">
			
			<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			
				<div id="top-ribbon">
				
				<a href="<?php echo get_template_directory_uri(); ?>/Justin_Bentley_CV.pdf">
				
					<img src="<?php echo get_template_directory_uri(); ?>/images/download_CV_ribbon.png">
				
				</a>
					
				</div>
			
				<div id="menu">
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
			