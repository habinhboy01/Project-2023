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

	<div class="display-pc">
		
		<!-- menu contact -->

		<div class="bg-header">
			<div class="container">
				<div class="header-contact">
					<ul class="menu-pc">
						<?php if( have_rows('header-contact', 'option') ): ?>
				            <?php while( have_rows('header-contact', 'option') ): the_row(); 
				            	$image = get_sub_field('icon');
		                		$picture = $image['sizes']['thumbnail'];
				            	?>

		                		<li>
		                			<img class="img-header" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                			<?php echo get_sub_field('text'); ?>
		                		</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>

					<!-- ----------------------- -->

					<ul class="menu-pc">
						<?php if( have_rows('header-social', 'option') ): ?>
				            <?php while( have_rows('header-social', 'option') ): the_row(); 
				            	$image = get_sub_field('icon');
		                		$picture = $image['sizes']['thumbnail'];
		                		$link = get_sub_field('link');
				            	?>

		                		<li>
		                			<a href="<?php echo $link;?>">
		                				<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                			</a>
		                		</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>

		<!-- menu chính -->

		<div class="bg-header2">
			<div class="container">
				<div class="header-contact">
					
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

		        	<?php wp_nav_menu (
				    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc2'));?>

				</div>
			</div>
		</div>

	</div>


	<!-- menu mobile -->

	<div class="display-mobile">

		<div class="bg-header">
			<div class="container">

				<ul class="menu-pc">
					<?php if( have_rows('header-social', 'option') ): ?>
			            <?php while( have_rows('header-social', 'option') ): the_row(); 
			            	$image = get_sub_field('icon');
	                		$picture = $image['sizes']['thumbnail'];
	                		$link = get_sub_field('link');
			            	?>

	                		<li>
	                			<a href="<?php echo $link;?>">
	                				<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                			</a>
	                		</li>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</ul>
			
			</div>
		</div>

		<!-- ------------------------ -->

		<div class="bg-header2">
			<div class="container">
				<div class="header-contact">
					
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

		        	<span class="icon-bar"><i class="far fa-bars"></i></span>

		        </div>
		    </div>
		</div>


		<!-- menu mobile chính -->

		<div class="bg-mobile">
			<span class="close-menu"><i class="fal fa-times"></i></span>

			<div class="bg-mobile2">
				<div class="container">
				    <?php wp_nav_menu (
				    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
				</div>
			</div>
		</div>
	</div>

