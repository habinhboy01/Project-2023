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

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-banner', 'option') ): ?>
            <?php while( have_rows('slider-banner', 'option') ): the_row(); 
                $image = get_sub_field('img-banner');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img class="item-banner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- menu pc -->

	<div class="header-pc display-pc">
		<div class="container">
			<div class="bg-menu-pc">
			    <?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>


			    <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

			    <ul class="menu-icon">
			    	<li><i class="far fa-search"></i></li>

			    	<li>
				    	<?php global $woocommerce; ?>
					    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
					    	<span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

			                <span class="quantity-home">( <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> )
			                </span>
			            </a>
			    	</li>
			    </ul>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="header-pc display-mobile">
		<div class="container">
			<div class="bg-menu-pc">
				<?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

		        	<a href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

	        	<ul class="menu-icon">
			    	<li><i class="far fa-search"></i></li>

			    	<li>
			    		<?php global $woocommerce; ?>
					    <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
					    	<span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

			                <span class="quantity-home">( <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> )
			                </span>
			            </a>
			    	</li>

			    	<li class="icon-bar"><i class="far fa-bars"></i></li>
			    </ul>
			</div>
		</div>

		<!-- ------------------ -->

		<div class="bg-menu-mobile">
			<?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
		</div>
	</div>