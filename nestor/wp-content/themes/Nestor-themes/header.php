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
  	<link rel="shortcut icon" type="image/png" type="text/css" href="<?php bloginfo('template_directory') ?>/images/logo.ico">

  	<!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- header contact -->

	<div class="header-contact display-pc">
		<div class="container">
			<ul class="list-contact-header">
				<?php if( have_rows('contact-header', 'option') ): ?>
		            <?php while( have_rows('contact-header', 'option') ): the_row(); ?>

		            	<li>
		            		<?php echo get_sub_field('icon'); ?>
		            		
		            		<?php echo get_sub_field('text'); ?>
		            	</li>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</ul>
		</div>
	</div>

	<!-- meunu pc -->

	<div class="bg-header display-pc">
		<div class="container">
			<div class="header-pc">
				<?php $image = get_field('logo-page-2', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="bg-header display-mobile">
		<div class="container">
			<div class="header-mobile">
				<span class="icon-bar"><i class="far fa-bars"></i></span>

				<?php $image = get_field('logo-page-2', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <div></div>
			</div>
		</div>

		<!-- ----------- -->

		<div class="modal-menu">
			<?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
		</div>
	</div>



