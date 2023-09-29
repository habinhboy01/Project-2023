<?php get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1">
		<?php $term = get_queried_object(); ?>
		<?php $color = get_field('color_text', $term); ?>

		<?php if( have_rows('slider-image',$term) ): ?>
            <?php while( have_rows('slider-image',$term) ): the_row(); 
                $image = get_sub_field('image');
                $picture = $image['sizes']['thumbnail'];
                $link = get_sub_field('link');
                ?>

                <div class="item">
                	<a href="<?php echo $link;?>">
                		<img class="img-category" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                	</a>
					
					<h1 class="title-category2" style="color: <?php echo $color; ?>"><?php single_cat_title(); ?></h1>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<div class="container-fluid bg-category">
		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-3 col-md-6 col-12">
						<?php if( get_field('link-youtube') ): ?>
						    <div class="embed-container">
								<?php the_field('link-youtube') ?>
							</div>
						<?php endif; ?>

						<h1 class="title-read2 title-youtube"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
					'prev_text'    => __('<i class="far fa-chevron-left"></i>'),
					'next_text'    => __('<i class="far fa-chevron-right"></i>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>