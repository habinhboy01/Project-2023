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
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->

	<div class="bg-header">
		<div class="container-fluid">

			<!-- menu contact -->

			<div class="menu-contact">
				<?php echo do_shortcode('[wp_search_form]'); ?>

				<ul class="header-contact">
					<li>
						<?php if( have_rows('address', 'option') ): ?>
				            <?php while( have_rows('address', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>
				                
			                	<a href="<?php echo $link;?>">
		
			                		<?php echo get_sub_field('icon'); ?>

			                		<?php echo get_sub_field('text'); ?>

			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </li>

				    <li>
						<?php if( have_rows('phone', 'option') ): ?>
				            <?php while( have_rows('phone', 'option') ): the_row(); ?>
				                
			                	<a href="tel:+0397779868">
		
			                		<?php echo get_sub_field('icon'); ?>

			                		<?php echo get_sub_field('text'); ?>

			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </li>
				</ul>
			</div>

			<!-- menu chính -->

			<div class="menu-contact">
				<a class="home-url" href="<?php echo home_url(); ?>">
	            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        	</a>

        		<?php wp_nav_menu (
	            array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
			</div>

		</div>
	</div>


	<!-- menu mobile -->

	<div class="bg-header-mobile">
		<div class="container-fluid">
			<div class="header-mobile">
				<a class="home-url" href="<?php echo home_url(); ?>">
		        	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		    	</a>

		    	<span class="bar-menu"><i class="fas fa-bars"></i></span>
		    </div>
	    </div>

	    <div class="modal-menu">
	    	<div class="bg-mobile">
	    	 	<ul class="header-contact">
					<li>
						<?php if( have_rows('address', 'option') ): ?>
				            <?php while( have_rows('address', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>
				                
			                	<a href="<?php echo $link;?>">
		
			                		<?php echo get_sub_field('icon'); ?>

			                		<?php echo get_sub_field('text'); ?>

			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </li>

				    <li>
						<?php if( have_rows('phone', 'option') ): ?>
				            <?php while( have_rows('phone', 'option') ): the_row(); ?>
				                
			                	<a href="tel:+0397779868">
		
			                		<?php echo get_sub_field('icon'); ?>

			                		<?php echo get_sub_field('text'); ?>

			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </li>
				</ul>

				<?php echo do_shortcode('[wp_search_form]'); ?>

				<?php wp_nav_menu (
	            array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
	    	</div>

	    	<span class="close-menu"><i class="fas fa-times"></i></span>
	    </div>
	</div>