<?php get_header(); ?>

	<div class="container-fluid bg-technology bg-footer3">
		<p class="text-search">Kết quả tìm kiếm:</p>

		<h1 class="text-search2"><?php the_search_query(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-6 col-md-6 col-12">
						<div class="content-category bg-search">
		            		<a class="img-sidebar" href="<?php the_permalink(); ?>">
		                    	<?php the_post_thumbnail('full'); ?>	
		                    </a>

		                    <div class="content-category2 content-search">
			                    <a class="text-category" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								<ul class="list-author">
									<li>
										<img src="<?php bloginfo('template_directory') ?>/images/user.png">

										<?php the_author_posts_link(); ?>
									</li>

									<li class="date-submitted">
										<img src="<?php bloginfo('template_directory') ?>/images/date.png">
										
										<?php echo get_the_date(); ?>
									</li>

									<li>
										<img src="<?php bloginfo('template_directory') ?>/images/chat.png">
										
										Comment (5)
									</li>
								</ul>
							</div>	                    
		            	</div>
		            </div>

		       <?php endwhile; wp_reset_postdata(); ?>
		    <?php
			else :
				echo '<p>No search results found!</p>';

			endif; ?>
		</div>
	</div>


<?php get_footer(); ?>