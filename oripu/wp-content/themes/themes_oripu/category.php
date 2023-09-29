<?php get_header(); ?>
	
	<div class="bg-breadcrumb">
		<div class="container">
			<?php

			if ( function_exists('yoast_breadcrumb') ) {

			 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

			}

			?>
		</div>
	</div>


	<div class="container bg-category">
		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="content-category">
							<a class="img-category" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
						</div>
					</div>


					<div class="col-lg-8 col-md-8 col-12">
						<div class="content-category">
							<h2 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<p class="text-category"><i class="far fa-clock"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

							<div class="text-category2"><?php the_excerpt(); ?></div>
						</div>
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
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>