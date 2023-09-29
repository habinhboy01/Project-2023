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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/category.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->

	<div class="bg-header-pc display-pc">
		<div class="container">
			<div class="main-pc">
				<a class="home-url" href="<?php echo home_url(); ?>">
	            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        	</a>

        		<?php wp_nav_menu (
	            array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="display-mobile">
		<div class="bg-header-pc">
			<div class="container">
				<div class="main-pc">
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

		        	<span class="icon-bar"><i class="fas fa-bars"></i></span>
		        </div>
			</div>
		</div>

		<?php wp_nav_menu (
	    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
	</div>


	<!-- phần body -->

	<!-- banner -->

	<div class="container">
		<div class="row banner-category">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="img-intro img-banner-category">
					<?php 
		            $image = get_field('banner', 'option');
		            if( !empty( $image ) ): ?>
		                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            <?php endif; ?>
		        </div>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<div class="img-intro">
					<?php 
		            $image = get_field('banner2', 'option');
		            if( !empty( $image ) ): ?>
		                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            <?php endif; ?>
		        </div>
			</div>
		</div>
	</div>

	<div class="bg-category">
		<div class="container">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="row content-category">
						<div class="col-lg-6 col-md-6 col-12">
							<a class="img-category" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<h3 class="title-category2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="text-category"><?php the_excerpt();?></div>
						</div>

					</div>

				<?php endwhile;?>
			<?php endif; ?>


			<!-- phân trang -->

			<?php if(paginate_links()!='') {?>
				<div class="pagination">
					<?php
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
						'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
						) );
				    ?>
				</div>
			<?php } ?>

		</div>
	</div>

<?php get_footer(); ?>