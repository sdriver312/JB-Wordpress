<?php get_header(); ?>
	
				<div id="blog-content">
					<div id="blog-area" class="text-one-column">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
								
								<h2 class="blog-heading"><?php the_title(); ?></h2>
								
								<h3><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?><h3>

								<div class="entry">
									
									<?php the_content(); ?>

									<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
									
									<?php the_tags( 'Tags: ', ', ', ''); ?>

								</div>
								
								<?php edit_post_link('Edit this entry','','.'); ?>
								
							</div>

						

						<?php endwhile; endif; ?>
						<?php comments_template(); ?>
						
					</div>
			
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