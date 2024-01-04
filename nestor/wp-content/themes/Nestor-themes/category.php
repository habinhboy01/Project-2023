<?php get_header(); ?>

	<div class="container">
		<div class="breadcrumb-intro">
			<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

			?>
		</div>
	</div>


	<!-- tin nổi bật -->

	<div class="bg-news">
		<div class="container">
			<h1 class="title-news text-center"><?php echo get_field('title-news', 'option'); ?></h1>

			<div class="owl-carousel owl-theme carousel_3">
				<?php
				$main_post = get_field('list-news', 'option');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="item">
							<div class="list-news">
								<a class="img-news" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<div class="list-news-2">
									<h1 class="title-details">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>

									<div class="text-news"><?php the_excerpt();?></div>

									<p class="text-date-2"><?php echo get_the_date(); ?></p>

									<a class="read-more-home" href="<?php the_permalink(); ?>">
										Xem CHI TIẾT
									</a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- -------------------------- -->

	<div class="container mr-top mr-bottom">
		<div class="row">
			<div class="col-lg-8 col-12">

				<h1 class="title-news"><?php echo get_field('title-news-2', 'option'); ?></h1>

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="row mr-bottom-2">
							<div class="col-lg-6 col-md-6 col-12">
	    						<a class="img-news-home-2" href="<?php the_permalink(); ?>">
	    							<?php the_post_thumbnail('full'); ?>
	    						</a>
	    					</div>

	    					<div class="col-lg-6 col-md-6 col-12">
							    <h1 class="title-news-home">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<div class="description-charcoal"><?php the_excerpt(); ?></div>

								<p class="text-date"><?php echo get_the_date(); ?></p>
							</div>
						</div>

					<?php endwhile;?>
				<?php endif; ?>


				<!-- phân trang -->

				<?php if(paginate_links()!='') {?>
					<div class="pagination">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="far fa-angle-left"></i>'),
							'next_text'    => __('<i class="far fa-angle-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
					</div>
				<?php } ?>
			</div>

			<div class="col-lg-4 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>