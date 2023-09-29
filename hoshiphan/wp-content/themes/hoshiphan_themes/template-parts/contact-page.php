<?php
/*

Template Name: Contact page

*/

get_header(); ?>

	<!-- Đăng ký học ngay -->

	<div class="container bg-training">
		<h1 class="title-training"><?php echo get_field('title-register'); ?></h1>

		<div class="bg-form">
			<?php echo do_shortcode( '[contact-form-7 id="118" title="Đăng ký học ngay"]' ); ?>
		</div>

		<!-- Mọi thắc mắc xin vui lòng liên hệ -->

		<h1 class="title-training title-contact-home"><?php echo get_field('any-questions'); ?></h1>

		<p class="text-contact-home"><?php echo get_field('hotline'); ?></p>
	</div>

	<!-- map -->

	<div class="contact-map"><?php echo get_field('map'); ?></div>

<?php get_footer(); ?>