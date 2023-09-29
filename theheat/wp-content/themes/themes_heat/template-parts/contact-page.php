<?php
/*

Template Name: Contact page

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


	<!-- nội dung -->

	<div class="map-contact">
		<?php echo get_field('map');?>
	</div>

	<div class="bg-contact">
		<div class="container">
			<div class="bg-contact2">
				<div class="content-contact">
					<p class="icon-contact"><i class="fas fa-envelope-open"></i></p>

					<p class="text-contact"><?php echo get_field('title-info'); ?></p>

					<div class="form-contact">
						<?php echo do_shortcode( '[contact-form-7 id="357" title="Liên hệ"]' ); ?>
					</div>
				</div>

				<!-- liên hệ -->

				<div class="content-contact2">
					<p class="icon-contact2"><i class="fas fa-map-marker-alt"></i></p>

					<p class="text-contact2"><?php echo get_field('title-contact'); ?></p>

					<!-- Thông tin liên hệ -->

					<ul class="list-contact">
						<li><?php echo get_field('info-contact'); ?></li>

						<li><?php echo get_field('address'); ?></li>
					</ul>


					<!-- phone -->

					<ul class="list-contact">
						<?php if( have_rows('list-phone') ): ?>
	            			<?php while( have_rows('list-phone') ): the_row(); ?>

	            				<li><?php echo get_sub_field('text'); ?></li>

	            			<?php endwhile; ?>
	    				<?php endif; ?>		
					</ul>

					<!-- giờ mở cửa -->

					<ul class="list-contact">
						<?php if( have_rows('time-open') ): ?>
	            			<?php while( have_rows('time-open') ): the_row(); ?>

	            				<li><?php echo get_sub_field('text'); ?></li>

	            			<?php endwhile; ?>
	    				<?php endif; ?>		
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>