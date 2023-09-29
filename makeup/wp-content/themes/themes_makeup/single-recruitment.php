<?php
/*

	Template Name: Detail Career
	* Template Post Type: recruitment

*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php echo get_field('title-page'); ?></h1>

			<p><?php echo get_field('description'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12">
				<h2 class="title-intro">Đào tạo và tuyển dụng</h2>

				<?php wp_nav_menu (
	            array('theme_location' => 'menu-4', 'menu_class' => 'list-sidebar'));?>
			</div>

			<div class="col-lg-9 col-md-9 col-12">
				<div class="single-career">
				 	<h1 class="title-career"><?php the_title(); ?></h1>
					
					<p class="text-career"><?php the_field('description2'); ?></p>

				 	<!-- mô tả công việc -->

				 	<h2 class="title-career2"><?php echo get_field('job-description'); ?></h2>

				 	<div class="text-career"><?php the_field('content-job-description'); ?></div>

				 	<!-- yêu cầu -->

				 	<h2 class="title-career2"><?php echo get_field('request'); ?></h2>

				 	<div class="text-career"><?php the_field('content-request'); ?></div>

				 	<!-- Đãi ngộ -->

				 	<h2 class="title-career2"><?php echo get_field('treatment'); ?></h2>

				 	<div class="text-career"><?php the_field('content-treatment'); ?></div>
				</div>

				<!-- ỨNG TUYỂN -->

				<div class="book-service register-course">
			    	<h2>ỨNG TUYỂN</h2>

			    	<?php echo do_shortcode( '[contact-form-7 id="284" title="Apply"]' ); ?>
			    </div>
			</div>
		</div>
	</div>



<?php get_footer(); ?>


