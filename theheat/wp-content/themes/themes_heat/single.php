<?php get_header(); ?>

	<div class="bg-intro-page">
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


	<!-- nội dung -->

	<div class="bg-news2">
		<div class="container">
			<div class="row bg-news">
				<div class="col-lg-8 col-12">
					<?php the_post_thumbnail('full', ['class' => 'img-single']); ?>

					<div class="bg-single">
						<h1 class="title-single"><?php the_title(); ?></h1>

						<p class="date-single"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?> </p>

						<div class="content-single"><?php the_content(); ?></div>
					</div>
				</div>


				<div class="col-lg-4 col-12">

					<div class="bg-sidebar">
						<?php echo do_shortcode('[wp_search_form]'); ?>
					</div>

					<?php get_sidebar(); ?>
				</div>
				
			</div>
		</div>
	</div>


<?php get_footer(); ?>