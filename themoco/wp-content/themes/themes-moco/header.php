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

	<div class="img-banner">
	    <a href="<?php echo get_field('link-banner', 'option'); ?>">
			<?php 
	        $image = get_field('img-banner', 'option');
	        if( !empty( $image ) ): ?>

	            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	        <?php endif; ?>
		</a>
	</div>

	<div class="bg-header">
		<div class="container-fluid">
			<div class="header-menu">
				<div>
					<span class="icon-bar"><i class="fal fa-bars"></i></span>

		        	<a href="<?php echo home_url(); ?>">
		        		<?php 
			            $image = get_field('logo', 'option');
			            if( !empty( $image ) ): ?>

			                <img class="logo-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			            <?php endif; ?>
		        	</a>
				</div>

				<span class="icon-search"><i class="far fa-search"></i></span>
			</div>
		</div>
	</div>

	<!-- sub menu chính -->

	<div class="header-menu2">
		<div class="bg-menu">
			<ul class="menu-icon">
				<li class="icon-close"><i class="fal fa-times"></i></li>

				<li class="icon-search2"><i class="far fa-search"></i></li>
			</ul>

			<?php wp_nav_menu (
			array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

			<ul class="social-network">
				<?php if( have_rows('social-network', 'option') ): ?>
		            <?php while( have_rows('social-network', 'option') ): the_row(); 
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
		</div>
	</div>

	<!-- form tìm kiếm -->

	<div class="modal-search">
		<?php echo do_shortcode('[wp_search_form]'); ?>
	</div>
