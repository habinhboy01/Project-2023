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
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">

  	<!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<div class="container">

		<!-- banner -->

		<?php $image = get_field('banner', 'option');

	    if( !empty( $image ) ): ?>

	    	<a href="<?php echo get_field('link-banner', 'option'); ?>">
	        	<img class="img-banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        </a>

	    <?php endif; ?>

	    <!-- menu pc -->

	    <div class="header-pc">

	    	<div class="img-logo">
	    		<?php $image = get_field('logo-page', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>
	    	</div>

        	<?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

	    </div>

	    <!-- menu mobile -->

	    <div class="header-mobile">
	    	
	    	<div class="menu-pc">
	    		<?php $image = get_field('logo-page', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img class="logo-mobile" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <span class="icon-bar"><i class="far fa-bars"></i></span>
	    	</div>

	    	<!-- ------------------- -->

	    	<div class="bg-mobile">
		    	<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
			</div>
	    </div>
	</div>











