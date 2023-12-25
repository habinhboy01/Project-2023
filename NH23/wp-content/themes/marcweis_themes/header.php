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

	<!-- menu pc -->

	<div class="bg-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-4"></div>
				
				<div class="col-lg-4 col-md-4 col-4">
					<div class="logo-intro">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('logo', 'option');
							if( !empty( $image ) ): ?>

								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<?php endif; ?>
						</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-4">
					<div class="logo-intro-2">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('logo-2', 'option');
							if( !empty( $image ) ): ?>

								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
			

			<div class="bg-menu">
				<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

			    <ul class="menu-icon">
			    	<li class="open-search"><i class="far fa-search"></i></li>

			    	<li>
				    	<?php global $woocommerce; ?>
					    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
					    	<span class="icon-cart"><i class="far fa-shopping-cart"></i></span>

			                <span class="quantity-home"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
			                </span>
			            </a>
			    	</li>
			    </ul>
			</div>
		</div>

		<div class="bg-search-form">
			<span class="close-search"><i class="fal fa-times"></i></span>

			<?php echo do_shortcode('[wp_search_form]'); ?>
		</div>		
	</div>

	<!-- menu mobile -->

	<div class="bg-header2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-4"></div>
				
				<div class="col-lg-4 col-md-4 col-4">
					<div class="logo-intro">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('logo', 'option');
							if( !empty( $image ) ): ?>

								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<?php endif; ?>
						</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-4">
					<div class="logo-intro-2">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('logo-2', 'option');
							if( !empty( $image ) ): ?>

								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<?php endif; ?>
						</a>
					</div>
				</div>
			</div>

			<ul class="menu-mobile">
				<li class="icon-bar"><i class="far fa-bars"></i></li>

				<li>
				    <ul class="menu-icon">
				    	<li class="open-search-mobile"><i class="far fa-search"></i></li>

				    	<li>
				    		<?php global $woocommerce; ?>
						    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
						    	<span class="icon-cart"><i class="far fa-shopping-cart"></i></span>

				                <span class="quantity-home">( <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> )
				                </span>
				            </a>
				    	</li>
				    </ul>
		        </li>
			</ul>
		</div>

		<!-- ------------ -->

		<div class="bg-search-form-mobile">
			<span class="close-search-mobile"><i class="fal fa-times"></i></span>

			<?php echo do_shortcode('[wp_search_form]'); ?>
		</div>	

		<!-- menu mobile -->

		<div class="bg-mobile">
			<span class="close-menu"><i class="fal fa-times"></i></span>

			<?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile2'));?>
		</div>
	</div>