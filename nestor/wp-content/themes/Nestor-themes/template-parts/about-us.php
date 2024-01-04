<?php
/*

Template Name: About us page

*/
get_header(); ?>

	<div class="intro-service">
		<?php $image = get_field('img-intro');

        if( !empty( $image ) ): ?>

            <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <h1 class="title-service"><?php echo get_field('title-page'); ?></h1>
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

	<!-- ---------------- -->

	<div class="mr-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-12">
					<div class="img-about-us">
						<?php $image = get_field('img-about-us');

				        if( !empty( $image ) ): ?>

				            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>

						<h3><?php echo get_field('title-about-us'); ?></h3>
							
					</div>
				</div>

				<div class="col-lg-7 col-12">
					<div class="about-us-page">
						<div class="about-us-page-2"><?php the_field('content-about-us'); ?></div>

						<img class="icon-quotes" src="<?php bloginfo('template_directory') ?>/images/icon-quotes.png">					
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Sứ mệnh và tầm nhìn -->

	<div class="mr-top">
		<div class="container">
			<h2 class="title-partner text-center"><?php echo get_field('supply-chain'); ?></h2>

			<h3 class="mission-vision"><?php echo get_field('mission-vision'); ?></h3>

			<p class="content-mission-vision"><?php the_field('content-mission-vision'); ?></p>

			<!-- Nguồn lực của chúng tôi -->

			<h3 class="mission-vision mission-vision-2"><?php echo get_field('our-resources'); ?></h3>

			<div class="row mr-bottom">
				<div class="col-lg-6 col-12">
					<div class="our-resources">
						<?php $image = get_field('img-resources');

				        if( !empty( $image ) ): ?>

				            <img class="img-resources" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>

				        <h4><?php echo get_field('title-resources'); ?></h4>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<div class="row">
						<?php if( have_rows('list-resources') ): ?>
				            <?php while( have_rows('list-resources') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>

				                <div class="col-lg-6 col-md-6 col-6">
				                	<div class="our-resources our-resources-2">
					                	<img class="img-resources-2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					                	<h4><?php echo get_sub_field('title'); ?></h4>
					                </div>
				                </div>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>