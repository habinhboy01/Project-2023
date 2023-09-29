<?php get_header(); ?>

	<div class="container bg-category">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12">
				<?php echo get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-md-9 col-12">

				<div class="row">

					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

                        	<div class="col-lg-3 col-md-6 col-12">
			            		<div class="content-product-new">
			                		<a class="img-product-oripu" href="<?php the_permalink(); ?>">
			                			<?php the_post_thumbnail('full'); ?>
			                		</a>

			                		<h3><?php the_title(); ?></h3>

			                		<a class="text-product-new" href="<?php the_permalink(); ?>">
			                			<?php echo get_sub_field('description'); ?>
			                		</a>
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
	</div>



<?php get_footer(); ?>