<?php get_header(); ?>
	
	<div class="detail-career">
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

		<div class="container">
			<div class="detail-career-2">
				<h3 class="title-single title-single-career"><?php the_title(); ?></h3>

				<div class="content-single"><?php the_content(); ?></div>

				<p class="button-apply">ỨNG TUYỂN NGAY</p>

				<div class="bg-apply">
					<?php echo do_shortcode( '[contact-form-7 id="2b243a8" title="Ứng Tuyển"]' ); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>