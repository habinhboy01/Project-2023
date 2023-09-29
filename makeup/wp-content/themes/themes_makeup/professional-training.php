<?php
/*

	Template Name: professional training

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
				<div class="content-intro-page2">
					<?php the_field('content'); ?>
				</div>


				<div class="book-service register-course">
			    	<h2>ĐĂNG KÝ KHOÁ HỌC</h2>

			    	<?php echo do_shortcode( '[contact-form-7 id="232" title="Register course"]' ); ?>
			    </div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>