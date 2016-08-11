<?php
/*
	Template Name: Blog 
*/
?>


<?php get_header(); ?>
	
				<div id="blog-content">
					<div id="blog-area" class="text-one-column">
					<?php query_posts('posts_per_page=5'); ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<h2 class="blog-heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

								<h3><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></h3>

								<div class="entry">
									<?php the_excerpt(); ?>
								</div>

								

							</div>

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

						<?php else : ?>

							<h2>Not Found</h2>

						<?php endif; ?>
					
	
					</div><!-- end blog_area-->
			
					<div id="sidebar">
					
						<div id="side-container">
				
							<div class="latest-posts"><p>Latest Posts</p></div>
							
							<?php query_posts('posts_per_page=5'); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!-- <div <?php post_class() ?> id="post-<?php the_ID(); ?>"> -->

								<p class="post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
								
								<!-- </div> -->

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

						<?php else : ?>

							<h2>Not Found</h2>

						<?php endif; ?>
							
							<div class="archive"><p>Archive</p></div>
							
								<a class="post" href="<?php get_archives(); ?>"><?php wp_get_archives('format=custom&before=<p class="post">&after=</p>&type=monthly'); ?></a>
						
						
						</div><!-- end side-container-->
							
					</div><!-- end sidebar-->	
						
					
			</div><!-- end blog-content	 -->		



<?php get_footer(); ?>