<!DOCTYPE html>
<html>
<head>
	<title>
	    <?php if (is_front_page()) : ?>
	        <?php bloginfo('name') ?>
	    <?php elseif (is_single()) : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php else : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php endif ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/FontAwesome.Pro.5.15.2.Web/css/all.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->


  	<!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->

	<div class="display-pc">
		<div class="bg-header">
			<div class="container">
				<div class="header-phone">
					<a href="tel:+078 55555 80">
						<?php echo get_field('icon-phone', 'option'); ?>

						<?php echo get_field('phone-header', 'option'); ?>
					</a>
				</div>
			</div>
		</div>

		<!-- menu  -->

		<div class="bg-menu">
			<div class="container">
				<div class="bg-header2">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<?php 
			            $image = get_field('logo', 'option');
			            if( !empty( $image ) ): ?>
			                <img class="img-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>
					</a>

					<!-- ------------- -->

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
				</div>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="display-mobile">
		<div class="bg-header">
			<div class="container">
				<div class="header-phone">
					<a href="tel:+078 55555 80">
						<?php echo get_field('icon-phone', 'option'); ?>

						<?php echo get_field('phone-header', 'option'); ?>
					</a>
				</div>
			</div>
		</div>

		<!-- menu -->

		<div class="bg-menu">
			<div class="container">
				<div class="bg-header2">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<?php 
			            $image = get_field('logo', 'option');
			            if( !empty( $image ) ): ?>
			                <img class="img-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>
					</a>

					<span class="btn-bar"><i class="fal fa-bars"></i></span>
				</div>
			</div>
		</div>

		<?php wp_nav_menu (
	    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
	</div>

