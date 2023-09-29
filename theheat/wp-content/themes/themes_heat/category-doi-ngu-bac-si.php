<?php get_header(); ?>

	<div class="bg-intro-page">
		<div class="container">
			<div class="breadcrumb-intro">
				<p class="title-intro-intro">THÀNH VIÊN</p>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>


	<!-- Đội ngũ bác sĩ -->

	<div class="bg-news-home bg-service2">
		<div class="container">
			<h2 class="title-team"><?php single_cat_title(); ?></h2>

			<p class="text-team">Thành Viên The Heat</p>

			<div class="row">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="col-lg-3 col-md-6 col-6">
							<div class="team-of-doctors">
								<a class="img-doctor" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<h3 class="title-doctor"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<p class="text-doctor"><?php echo get_field('office-doctor'); ?></p>

								<p class="text-doctor2"><?php echo get_field('experience'); ?></p>
							</div>
						</div>

					<?php  endwhile;?>
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
	</div>


<?php get_footer(); ?>