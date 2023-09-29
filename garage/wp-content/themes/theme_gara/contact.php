<?php
/*

Template Name: Contact page

*/

get_header(); ?>

	<div class="container">
		<div class="map-contact">
			<?php echo get_field('map'); ?>
		</div>

		<div class="row">
			<div class="col-lg-7 col-12">
				<h2 class="title-info title-criteria"><?php echo get_field('info-contact'); ?></h2>

				<p class="title-contact"><?php echo get_field('text'); ?></p>

				<p class="text-commitment"><?php echo get_field('text2'); ?></p>

				<div class="content-intro">
					<p class="text-commitment"><?php echo get_field('address'); ?></p>

					<p class="text-commitment"><?php echo get_field('phone'); ?></p>

					<p class="text-commitment"><?php echo get_field('email'); ?></p>

					<p class="text-commitment"><?php echo get_field('website'); ?></p>
				</div>
			</div>

			<div class="col-lg-5 col-12">
				<div class="bg-contact">
					<?php echo do_shortcode( '[contact-form-7 id="204" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>