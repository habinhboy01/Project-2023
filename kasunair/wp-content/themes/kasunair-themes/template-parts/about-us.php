<?php
/*

Template Name: About us page

*/

get_header(); ?>

	<!-- breadcrumb -->

	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<h1><?php the_title(); ?></h1>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- -------------- -->

	<div class="bg-about-us">
		<div class="container">
			<p class="category-page"><?php echo get_field('category-page'); ?></p>

			<h1 class="title-page title-page2"><?php echo get_field('title-about-us'); ?></h1>

			<p class="description-contact"><?php echo get_field('text-about-us'); ?></p>

			<div class="row bg-about-us-2">
				<div class="col-lg-6 col-12">
					<div class="description-about-us"><?php the_field('description-about-us'); ?></div>
				</div>

				<div class="col-lg-6 col-12 bg-about-us-3">
					<?php $image = get_field('img-about-us');

			        if( !empty( $image ) ): ?>

			            <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- CERTIFICATE -->

	<div class="mr-top-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php $image = get_field('img-certificate');

			        if( !empty( $image ) ): ?>

			            <img class="img-certificate" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<div class="certificate">
						<h2 class="title-certificate"><?php echo get_field('title-certificate'); ?></h2>

						<p class="category-page"><?php echo get_field('text-certificate'); ?></p>

						<div class="description-about-us description-certificate"><?php the_field('description-certificate'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ------------------- -->

	<div class="bg-about-us">
		<div class="container">
			<?php if( have_rows('list-address') ): ?>
	            <?php while( have_rows('list-address') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="row address">
						<div class="col-lg-4 col-md-4 col-12 bg-about-us-3">
							<img class="img-about-us" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
						</div>

						<div class="col-lg-8 col-md-8 col-12">
							<div class="list-address">
								<p><?php echo get_sub_field('text'); ?></p>

								<h3><?php echo get_sub_field('title'); ?></h3>

								<div class="description-about-us"><?php the_sub_field('content'); ?></div>
							</div>
						</div>
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>


<?php get_footer(); ?>