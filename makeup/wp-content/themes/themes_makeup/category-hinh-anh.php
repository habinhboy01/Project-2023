<?php

/*
	Template Name: thumbnail page
*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php single_cat_title(); ?></h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">

				<div class="row">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

	                    	<div class="col-lg-3 col-md-6 col-12">
	                    		<div class="img-thumbnail-page">
									<?php the_post_thumbnail('full'); ?>	
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
								'prev_text'    => __('<'),
								'next_text'    => __('>'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
								) );
						    ?>
						</div>
					<?php } ?>

				</div>


				<!-- ----------------------- -->
	

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<!-- ------------------------------------- -->

						<?php 
							$images = get_field('list-img');
							if( $images ): ?>
								<div class="modal-slider">
									<span class="close-modal-slider"><i class="fal fa-times"></i></span>

									<div class="modal-slider2">

									    <div class="owl-carousel owl-theme carousel_5">
									        <?php foreach( $images as $image ): ?>
									            <div class="item">

									                <img class="img-modal-slider2" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

									                <p><?php echo esc_html($image['caption']); ?></p>
									            </div>
									        <?php endforeach; ?>
									    </div>

									</div>
								</div>
						<?php endif; ?>

						<!-- -------------------------------------- -->

					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</div>
	</div>

<?php get_footer(); ?>