<?php
/*

Template Name: Intro page

*/

get_header(); ?>

	<div class="bg-intro-page">
		<div class="container">
			<div class="breadcrumb-intro">
				<p class="title-intro-intro"><?php echo get_field('title-page'); ?></p>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>


	<!-- Về Chúng Tôi -->

	<div class="bg-intro-page2">
		<div class="container">

			<h2 class="title-intro"><?php echo get_field('title-intro'); ?></h2>

			<div class="text-intro"><?php echo get_field('text-intro'); ?></div>

			<div class="row bg-intro">
				<div class="col-lg-5 col-12">
					<p class="text-intro2"><?php echo get_field('about-us'); ?></p>

					<div class="text-intro3"><?php echo get_field('description-about-us'); ?></div>

					<p class="text-slogan"><?php echo get_field('slogan-about-us'); ?></p>
				</div>


				<div class="col-lg-7 col-12">
					<?php 
		            $image = get_field('img-about-us');
		            if( !empty( $image ) ): ?>

		                <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		            <?php endif; ?>
				</div>
			</div>

		</div>
	</div>


	<!-- Chúng tôi hướng tới các mục đích: -->

	<div class="bg-intro-page3">
		<div class="container">
			<h3 class="title-purpose"><?php echo get_field('title-purpose'); ?></h3>

			<div class="row">
				<?php if( have_rows('list-purpose') ): ?>
		            <?php while( have_rows('list-purpose') ): the_row(); ?>

		            	<div class="col-lg-4 col-md-6 col-12">
		            		<ul class="list-purpose">
		            			<li class="number-purpose"><?php echo get_sub_field('number'); ?></li>

		            			<li>
		            				<p class="text-purpose"><?php echo get_sub_field('title'); ?></p>

		            				<div class="text-purpose2"><?php the_sub_field('content'); ?></div>
		            			</li>
		            		</ul>
		            	</div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>
		</div>
	</div>


	<!-- Các chương trình hành động cụ thể của chúng tôi: -->

	
	<div class="bg-intro-page3">
		<div class="container">
			<h3 class="title-purpose"><?php echo get_field('title-action'); ?></h3>

			<div class="row">
				<?php if( have_rows('list-action') ): ?>
		            <?php while( have_rows('list-action') ): the_row(); ?>

		            	<div class="col-lg-4 col-md-6 col-12">
		            		<ul class="list-purpose">
		            			<li class="number-purpose"><?php echo get_sub_field('number'); ?></li>

		            			<li>
		            				<p class="text-purpose"><?php echo get_sub_field('title'); ?></p>

		            				<div class="text-purpose2"><?php the_sub_field('content'); ?></div>
		            			</li>
		            		</ul>
		            	</div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>
		</div>
	</div>

<?php get_footer(); ?>