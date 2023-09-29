<?php get_header(); ?>

	<div class="bg-prduct-home">
		<div class="container">
			<h1 class="title-intro title-address"><?php single_cat_title(); ?></h1>

			<div class="row">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="col-lg-4 col-md-6 col-12">

							<div class="content-category">
								<a class="img-category" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>


								<h3 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="text-category"><?php the_excerpt();?></div>

							</div>

						</div>

					<?php endwhile;?>
				<?php endif; ?>


				<!-- phân trang -->

				<?php if(paginate_links()!='') {?>
					<div class="pagination">
						<?php
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('Trước'),
							'next_text'    => __('Tiếp Theo'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
					</div>
				<?php } ?>

			</div>

		</div>
	</div>

<?php get_footer(); ?>