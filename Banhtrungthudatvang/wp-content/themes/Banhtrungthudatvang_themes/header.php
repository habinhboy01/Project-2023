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
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/icon.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>


	<div class="display-pc">
		<div class="bg-menu">
			<div class="container">
				<div class="menu-main">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<img class="img-logo" src="<?php bloginfo('template_directory') ?>/images/logochuan.svg">
					</a>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

				    <?php global $woocommerce; ?>
				    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
				    	<span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

		                <span class="quantity-home">( <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> )
		                </span>
		            </a>
				</div>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="display-mobile">
		<div class="bg-menu">
			<div class="container">
				<div class="menu-main">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<img class="img-logo" src="<?php bloginfo('template_directory') ?>/images/logochuan.svg">
					</a>

					<ul class="icon-mobile">
						<li>
							<?php global $woocommerce; ?>
						    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
						    	<span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

				                <span class="quantity-home">( <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> )
				                </span>
				            </a>
						</li>

						<li class="all-bar" onclick="myFunction(this)">
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- menu mobile -->

		<div class="bg-menu-mobile">
			<div class="container">
				<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
			</div>
		</div>
	</div>