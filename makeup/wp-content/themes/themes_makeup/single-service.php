<?php
/*

	Template Name: Detail service
	* Template Post Type: service

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
				<h2 class="title-intro">Dịch vụ</h2>

				<?php wp_nav_menu (
	            array('theme_location' => 'menu-2', 'menu_class' => 'list-sidebar'));?>
			</div>

			<div class="col-lg-9 col-md-9 col-12">
				<div class="content-intro-page2">
					<?php the_field('content'); ?>
				</div>


				<div class="book-makeup book-service">
			    	<h2>ĐẶT LỊCH MAKEUP</h2>

			    	<p>Giữ chỗ trước, thanh toán sau, không cần cọc</p>

			    	<?php echo do_shortcode( '[contact-form-7 id="95" title="Book Makeup"]' ); ?>
			    </div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
