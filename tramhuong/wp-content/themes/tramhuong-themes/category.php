<?php get_header(); ?>

	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- -------------------------- -->

	<div class="container mr-top">
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="row">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

							<div class="col-lg-6 col-md-6 col-12">
								<div class="img-news">		
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>		
									</a>
								</div>

								<h3 class="title-news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="text-news"><?php the_excerpt();?></div>

								<p class="read-more">
									<a href="<?php the_permalink(); ?>">Xem thêm <i class="fal fa-long-arrow-right"></i></a>
								</p>
							</div>

						<?php endwhile;?>
					<?php endif; ?>
				</div>


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

			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>