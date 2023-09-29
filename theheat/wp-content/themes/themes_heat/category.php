<?php get_header(); ?>

	<div class="bg-intro-page">
		<div class="container">
			<div class="breadcrumb-intro">
				<p class="title-intro-intro"><?php single_cat_title(); ?></p>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>


	<div class="bg-news2">
		<div class="container">
			<div class="row bg-news">
				<div class="col-lg-8 col-12">
					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => 6,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>

						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

							<div class="content-news">
								<a class="img-news" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<div class="content-news2">

									<h3 class="title-news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

									<div class="text-news"><?php the_excerpt();?></div>

								</div>
							</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>

				<div class="col-lg-4 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12">

						<div class="content-news-home knowledge-page">
							<a class="img-knowledge2" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

							<div class="content-news-home2">
								<ul class="date-author">	        
		        					<li><?php echo get_the_date(); ?></li>

		        					<li><?php the_author(); ?></li>
		        				</ul>

								<h3 class="title-news-home title-knowledge-page"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="text-news-home"><?php the_excerpt();?></div>

								<p class="read-more"><a href="<?php the_permalink(); ?>">READ MORE <i class='fal fa-long-arrow-right'></i></a></p>
							</div>
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
	</div>


<?php get_footer(); ?>