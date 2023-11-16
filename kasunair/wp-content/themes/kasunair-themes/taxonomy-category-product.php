<?php get_header(); ?>

	<!-- breadcrumb -->

	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<h1><?php single_cat_title(); ?></h1>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- -------------- -->

	<div class="mr-top-2">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

	                	<div class="col-lg-4 col-md-6 col-12">
		            		<div class="content-product-new">
		                		<a class="img-product-kasunair" href="<?php the_permalink(); ?>">
		                			<?php the_post_thumbnail('full'); ?>
		                		</a>

		                		<div class="content-product-new-2">
			                		<h3 class="title-product">
			                			<a href="<?php the_permalink(); ?>">
			                				<?php the_title(); ?>
			                			</a>         				
			                		</h3>

			                		<div class="description-product"><?php the_excerpt();?></div>
			                	</div>
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
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
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