<?php
/*

Template Name: Contact page

*/
get_header(); ?>


	<div class="container">
		<div class="breadcrumb-intro">
			<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

			?>
		</div>
	</div>

	<!-- ----------- -->

	<div class="container">
		<h1 class="title-partner text-center"><?php echo get_field('title-contact'); ?></h1>

		<h2 class="text-contact-3"><?php echo get_field('title-contact-2'); ?></h2>

		<ul class="list-contact">
			<?php if( have_rows('list-contact') ): ?>
	            <?php while( have_rows('list-contact') ): the_row(); ?>

	            	<li>
	            		<p class="text-contact"><?php echo get_sub_field('title'); ?></p>

	            		<p class="text-contact-2"><?php echo get_sub_field('text'); ?></p>
	            	</li>

	            <?php endwhile; ?>
	    	<?php endif; ?>
	    </ul>


	    <!-- CẦN TƯ VẤN HOẶC NHẬN BÁO GIÁ? ĐỂ LẠI THÔNG TIN -->

	    <div class="bg-contact">
    		<?php $image = get_field('img-contact');

	        if( !empty( $image ) ): ?>

	            <img class="item-contact" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	        <?php endif; ?>

	    	<div class="item-contact-2">
	    		<h3 class="text-contact-4"><?php echo get_field('title-contact-3'); ?></h3>

	    		<p class="text-contact-4"><?php echo get_field('text-contact'); ?></p>

	    		<?php echo do_shortcode( '[contact-form-7 id="f23c984" title="Liên hệ"]' ); ?>
	    	</div>
	    </div>
	</div>

	<!-- -------------------- -->

	<div class="bg-map">
		<?php echo get_field('map'); ?>
	</div>

<?php get_footer(); ?>