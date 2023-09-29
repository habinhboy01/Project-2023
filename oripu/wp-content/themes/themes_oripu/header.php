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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->

	<div class="display-pc">

		<!-- menu pc 1 -->

		<div class="header-pc">
			<div class="container">
				<ul class="phone-language">
					<li class="phone-header">
						<?php if( have_rows('phone-header', 'option') ): ?>
				            <?php while( have_rows('phone-header', 'option') ): the_row(); ?>
		
		                		<?php echo get_sub_field('icon'); ?>

		                		<?php echo get_sub_field('text'); ?>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</li>

					<li>
						<?php wp_nav_menu (
					    array('theme_location' => 'menu-2', 'menu_class' => 'menu-language'));?>
					</li>
				</ul>
			</div>
		</div>

		<!-- menu pc 2 -->

		<div class="header-pc2">
			<div class="container">
				<div class="menu-main">
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

	        		<?php wp_nav_menu (
				    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
				</div>

				<?php get_search_form(); ?>
			</div>
		</div>

	</div>


	<!-- ------------------------------ -->


	<!-- mobile mobile -->

	<div class="display-mobile">

		<!-- menu mobile 1 -->

		<div class="header-pc">
			<div class="container">
				<ul class="phone-language">
					<li class="phone-header">
						<?php if( have_rows('phone-header', 'option') ): ?>
				            <?php while( have_rows('phone-header', 'option') ): the_row(); ?>
		
		                		<?php echo get_sub_field('icon'); ?>

		                		<?php echo get_sub_field('text'); ?>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</li>

					<li>
						<?php wp_nav_menu (
					    array('theme_location' => 'menu-2', 'menu_class' => 'menu-language'));?>
					</li>
				</ul>
			</div>
		</div>

		<!-- menu mobile 2 -->

		<div class="header-pc2">
			<div class="container">
				<div class="menu-main">
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

					<ul class="all-icon">
						<li class="icon-search-mobile"><i class="fas fa-search"></i></li>

						<li class="icon-bar"><i class="fas fa-bars"></i></li>
					</ul>
				</div>

				<div class="bg-search-mobile">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

		<!-- menu mobile chính -->

		<div class="bg-menu-mobile">
		    <?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
		</div>
	</div>
