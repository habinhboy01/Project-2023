<?php
/*

Template Name: Intro page

*/

get_header(); ?>
	
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

	<!-- ------------- -->

	<div class="bg-intro">
		<?php $image = get_field('img-intro');

        if( !empty( $image ) ): ?>

            <img class="img-intro-page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <div class="bg-intro2">
        	<h1 class="title-home text-center"><?php echo get_field('title-intro'); ?></h1>

        	<p><?php the_field('description'); ?></p>
        </div>
	</div>

	<!-- Showroom Trầm Hương -->

	<div class="bg-showroom">
		<h1 class="title-home text-center"><?php echo get_field('showroom'); ?></h1>

		<?php $image = get_field('img-showroom');

        if( !empty( $image ) ): ?>

            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
	</div>

	<!-- LỊCH SỬ HÌNH THÀNH -->

	<div class="container">
		<h1 class="title-home"><?php echo get_field('title-history'); ?></h1>

		<div class="content-history"><?php the_field('content-history'); ?></div>
	</div>

	<!-- TẦM NHÌN -->

	<div class="bg-partner">
		<div class="container">
			<div class="row bg-vision">
				<div class="col-lg-6 col-12">
					<?php $image = get_field('img-vision');

			        if( !empty( $image ) ): ?>

			            <img class="img-intro img-vision" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<h2 class="title-vision"><?php echo get_field('title-vision'); ?></h2>

					<div class="content-history"><?php the_field('content-vision'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- SỨ MỆNH -->

	<div class="container mr-top">
		<div class="row bg-vision">
			<div class="col-lg-3 col-12">
				<h2 class="title-vision title-mission"><?php echo get_field('title-mission'); ?></h2>

				<p class="text-mission"><?php the_field('description-mission'); ?></p>
			</div>

			<div class="col-lg-9 col-12">
				<ul class="list-mission">
					<?php if( have_rows('list-mission') ): ?>
			            <?php while( have_rows('list-mission') ): the_row(); ?>

			            	<li>
			            		<?php echo get_sub_field('icon'); ?>
			            		
			            		<?php echo get_sub_field('text'); ?>
			            	</li>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- TẠI SAO CHỌN CHÚNG TÔI? -->

	<div class="bg-partner">
		<div class="container">
			<h2 class="title-home text-center"><?php echo get_field('why-choose-us'); ?></h2>

			<p class="text-choose"><?php echo get_field('description-choose'); ?></p>

			<div class="row">
				<div class="col-lg-5 col-12">
					<?php $image = get_field('img-choose');

			        if( !empty( $image ) ): ?>

			            <img class="img-intro img-choose" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>

				<div class="col-lg-7 col-12">
					<ul class="list-choose">
						<?php if( have_rows('list-choose') ): ?>
				            <?php while( have_rows('list-choose') ): the_row(); ?>

				            	<li>
				            		<i class="fas fa-check"></i>
				            		<?php echo get_sub_field('text'); ?>
				            	</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- GIÁ TRỊ MANG LẠI CHO KHÁCH HÀNG -->

	<div class="container mr-top">
		<h2 class="title-home text-center"><?php echo get_field('value-for-customers'); ?></h2>

		<ul class="list-value">
			<?php if( have_rows('list-value') ): ?>
	            <?php while( have_rows('list-value') ): the_row(); ?>

	            	<li>
	            		<i class="fal fa-gem"></i>

	            		<?php echo get_sub_field('text'); ?>
	            	</li>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</ul>

		<div class="row">
			<?php if( have_rows('list-value2') ): ?>
	            <?php while( have_rows('list-value2') ): the_row(); ?>

	                <div class="col-lg-4 col-12">

	                	<div class="list-intro">
		                	<span><?php echo get_sub_field('icon'); ?></span>

		                	<h2><?php echo get_sub_field('number'); ?></h2>

		                	<p><?php echo get_sub_field('text'); ?></p>
		                </div>

	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- Đối Tác Của Chúng Tôi -->

	<div class="bg-partner">
		<div class="container">
			<h2 class="title-home title-home3 text-center"><?php echo get_field('title-partner'); ?></h2>

			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-partner') ): ?>
		            <?php while( have_rows('list-partner') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<img class="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		            <?php endwhile; ?>
	    		<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>