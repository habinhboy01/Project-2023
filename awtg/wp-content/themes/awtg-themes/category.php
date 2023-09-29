<?php get_header(); ?>


	<div class="container">
		<h1 class="ttile-category"><?php single_cat_title(); ?></h1>

		<div class="row">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12">

		                <div class="images-container mr-top2">
							<a class="img-news-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<h1 class="title-details">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>

							<a class="read-more-home" href="<?php the_permalink(); ?>">
								<p>read more</p>
							</a>

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