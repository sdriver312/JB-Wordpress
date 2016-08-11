<?php
/*
	Template Name: Training 
*/
?>


<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">

	<h2><?php if(is_page()) {
		echo the_title(); 
	} ?></h2>
				
				<div id="text-area">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
					<?php 
						$custom      = get_post_custom($post->ID);
						$date        = $custom["date"][0];
						$institution = $custom["institution"][0];
						$location    = $custom["location"][0];
						$achievement = $custom["achievement"][0];
					
					?>
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>2008</h6>
						</div>
						
						<div id="cv-info">
						<h7>Academic History</h7>
							<p></p>
							<h4>Martin College</h4>
							<h5>Brisbane, Queensland</h5>
							<p>Diploma in Business Management (Part time)</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>2007</h6>
						</div>
						
						<div id="cv-info">
							<h4>South Bank TAFE</h4>
							<h5>Kotah College, Brisbane Queensland</h5>
							<p>Post Graduate Diploma in Culinary Arts & Kitchen Management</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>2006</h6>
						</div>
						
						<div id="cv-info">
							<h4>National Safety Council Australia</h4>
							<h5>Brisbane, Queensland</h5>
							<p>Work Health & Safety Officers Certificate</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>2004</h6>
						</div>
						
						<div id="cv-info">
							<h4>Hunter Institute of TAFE</h4>
							<h5>Hamilton College, Queensland</h5>
							<p>Completed certificate 3 Cookery, Commercial Work practices</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>1994</h6>
						</div>
						
						<div id="cv-info">
							<h4>William Angliss College</h4> 
							<h5>Melbourne College, Victoria</h5>
							<p>Commercial Cookery 2 & 3 Trade Accredited</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->

					<div id="cv-module">
						
						<div id="side-dates">
							<h6>1989</h6>
						</div>
						
						<div id="cv-info">
							<h4>Bruce Clarke Guitar Workshop</h4> 
							<h5>Melbourne, Victoria</h5>
							<p>William Leavett Modern Music School - Jazz Theory</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->
					
					
					<div id="cv-module">
						
						<div id="side-dates">
							<h6>1987</h6>
						</div>
						
						<div id="cv-info">
							<h4>Completed Year 11</h4> 
							<h5>Marbury College, Adelaide</h5>
							<p>English, History, Art, Maths and Science</p>
						</div><!-- end cv-info-->
					
					</div><!-- end cv-module-->

				</div><!-- end text_area-->
									
			
				<div id="sidebar">
				
					<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side6.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side2.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side8.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side1.jpg"></div>
					<div class="side-image"><img src="<?php echo get_template_directory_uri(); ?>/images/side5.jpg"></div>

					
				</div><!-- end sidebar-->	
						
					
			</div><!-- end home-content	 -->

<?php get_footer(); ?>