<?php get_header(); ?>

	<div class="intro-service">
		<?php $image = get_field('img-intro', 'option');

        if( !empty( $image ) ): ?>

            <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <h1 class="title-service title-career"><?php echo get_field('title-intro', 'option'); ?></h1>
	</div>


	<!-- Breadcrumbs -->

	<div class="container">
		<div class="breadcrumb-intro">
			<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

			?>
		</div>
	</div>


	<!-- ------------------------- -->

	<div class="container mr-bottom">
		<p class="text-result">Kết quả tìm kiếm:</p>

		<h2 class="title-career-2"><?php the_title(); ?></h2>


		<div class="row">
			<div class="col-lg-4 col-12">
				<?php echo do_shortcode('[csw_search_form]'); ?>
			</div>

			<div class="col-lg-8 col-12">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

		            	<div class="bg-result">
			            	<p><b>VỊ TRÍ:</b> <?php the_title(); ?></p>

			            	<p><b>CHI NHÁNH:</b> <?php location_cate();?></p>

			            	<p class="apply-career">
		            			<a href="<?php the_permalink(); ?>">
		            				ỨNG TUYỂN NGAY
		            			</a>
			            	</p>
			            </div>

			       <?php endwhile; wp_reset_postdata(); ?>
			    <?php
				else :
					echo '<p>No search results found!</p>';

				endif; ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>