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

	<div class="display-menu-pc">
		<!-- menu contact -->

		<div class="bg-menu-contact">
			<div class="container">
				<div class="bg-menu-contact2">
					<p class="text-header-contact"><?php echo get_field('text-contact','option'); ?></p>

					<ul class="header-contact">
						<li>
							<?php if( have_rows('email-header', 'option') ): ?>
					            <?php while( have_rows('email-header', 'option') ): the_row(); ?>
					            	<a href="mailto:nhatnq@vantaimoitruongxanh.com">
					            		<?php echo get_sub_field('icon'); ?>

					            		<?php echo get_sub_field('text'); ?>
					            	</a>
					           	<?php endwhile; ?>
							<?php endif; ?>
						</li>

						<li>|</li>

						<li>
							<?php if( have_rows('phone-header', 'option') ): ?>
					            <?php while( have_rows('phone-header', 'option') ): the_row(); ?>
					            	<a href="tel:+0793.69.79.79">
					            		<?php echo get_sub_field('icon'); ?>

					            		<?php echo get_sub_field('text'); ?>
					            	</a>
					           	<?php endwhile; ?>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- menu chính -->

		<div class="bg-menu-pc">
			<div class="container">
				<div class="bg-menu-contact2">
					<a class="home-url" href="<?php echo home_url(); ?>">
		                <img class="logo-pc" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		            </a>

					<?php wp_nav_menu (
		                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

		        </div>

		        <?php get_search_form(); ?>
			</div>
		</div>
	</div>
	

	<!-- menu mobile -->

	<div class="display-menu-mobile">
		<p class="text-header-contact"><?php echo get_field('text-contact2','option'); ?></p>

		<div class="bg-menu-mobile">
			<div class="container">
				<ul class="bg-menu-contact2">
					<li class="icon-bar"><i class="fas fa-bars"></i></li>

					<li>
						<a class="home-url" href="<?php echo home_url(); ?>">
			                <img class="logo-pc" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			            </a>
					</li>

					<li class="icon-search"><i class="fas fa-search"></i></li>
				</ul>
			</div>
		</div>

		<!-- modal menu -->

		<div class="bg-modal">
			<div class="modal-menu">
				<?php wp_nav_menu (
		                array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
			</div>

			<span class="icon-close">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
			</span>
		</div>

		<!-- modal search -->

		<div class="modal-search">
			<span class="icon-close2">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
			</span>

			<?php get_search_form(); ?>
		</div>
	</div>
