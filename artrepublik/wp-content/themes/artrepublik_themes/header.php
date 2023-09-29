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

	<!-- banner -->

	<?php if( have_rows('banner', 'option') ): ?>
	    <?php while( have_rows('banner', 'option') ): the_row(); 
	        $image = get_sub_field('img');
	        $link = get_sub_field('link');
	        ?>
	        <a href="<?php echo $link;?>">
	        	<img class="banner-header" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
	        </a>
	    <?php endwhile; ?>
	<?php endif; ?>

	<!-- menu pc -->

	<div class="bg-header-pc">
		<div class="container">
			<div class="header-pc">
				<a class="home-url" href="<?php echo home_url(); ?>">
		            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        </a>

		        <span class="icon-bar"><i class="fas fa-bars"></i></span>
			</div>
		</div>

		<div class="modal-menu">
			<div class="bg-menu"></div>

			<div class="bg-menu2">
				<div class="menu-pc">
					<a class="home-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo img_logo2" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			        </a>

			        <ul class="list-icon">        
			        	<li class="search-menu">
			        		<img src="<?php bloginfo('template_directory') ?>/images/search.png">
			        	</li>

			        	<li class="close-menu">
			        		<img src="<?php bloginfo('template_directory') ?>/images/close.png">
			        	</li>
			        </ul>
				</div>

				<!-- ---------------------- -->

				<div class="bg-search">
					<?php get_search_form(); ?>

					<img class="close-menu2" src="<?php bloginfo('template_directory') ?>/images/close.png">
				</div>

				<!-- ------------------------------ -->

			    <?php wp_nav_menu (
		        array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc2'));?>

		    	<?php wp_nav_menu (
		        array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc3'));?>

		        <!-- social menu -->

		        <ul class="social-menu">
		        	<?php if( have_rows('list-social', 'option') ): ?>
					    <?php while( have_rows('list-social', 'option') ): the_row(); 
					        $link = get_sub_field('link');
					        ?>

					        <li>
						        <a href="<?php echo $link;?>">
						        	<?php echo get_sub_field('icon'); ?>
						        </a>
						    </li>

					    <?php endwhile; ?>
					<?php endif; ?>
		        </ul>

		        <p class="rights-reserved"><?php echo get_field('rights-reserved', 'option'); ?></p>
		    </div>
	    </div>
	</div>