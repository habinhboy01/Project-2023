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

	<div class="bg-news">
		<div class="container">	
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

				<div class="row bg-news-2">
					<div class="col-lg-5 col-md-5 col-12">
						<a class="img-news" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>		
						</a>
					</div>

					<div class="col-lg-7 col-md-7 col-12">
						<div class="content-title">

							<h2 class="title-news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<div class="text-news"><?php the_excerpt();?></div>

							<p class="text-date"><?php the_author(); ?></p>
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