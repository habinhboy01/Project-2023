<?php
/*

Template Name: motion graphic page

*/
?>

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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom2.css">

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

	<div class="bg-graphic">
		<?php 
        $image = get_field('img-intro');
        if( !empty( $image ) ): ?>
            <img class="img-graphic" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="title-intro">
        	<p><?php echo get_field('text'); ?></p>

        	<h3><?php echo get_field('text2'); ?></h3>
        </div>
	</div>


	<!-- WE ARE AN EVENT EXPERIENCED AGENCY -->

	<div class="bg-graphic2">
		<div class="container">
			<h2 class="title-experienced"><?php echo get_field('event-experienced'); ?></h2>

			<div class="content-experienced">
				<p class="text-experienced"><?php the_field('description-experienced'); ?></p>

				<?php 
		        $image = get_field('img-event');
		        if( !empty( $image ) ): ?>
		            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
		    </div>

		    <!-- WITH ANIMATION, THERE IS NO BOUNDARY -->

		    <h2 class="title-experienced"><?php echo get_field('event-experienced2'); ?></h2>

		    <ul class="list-event">
		    	<li class="button-event active-event"><?php echo get_field('visual-event'); ?></li>
		    	<li class="button-event"><?php echo get_field('key-moment'); ?></li>
		    	<li class="button-event"><?php echo get_field('opening'); ?></li>
		    	<li class="button-event"><?php echo get_field('tvc'); ?></li>
		    	<li class="button-event"><?php echo get_field('hologram'); ?></li>
		    	<li class="button-event"><?php echo get_field('mapping'); ?></li>
		    </ul>

		    <!-- Visual Event -->

		    <div class="content-event active-content">
			    <div class="row">

				    <?php
						$visual = get_field('list-visual-event');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $visual,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>

			    </div>
			</div>

		    <!-- key-moment -->

		    <div class="content-event">
			    <div class="row">
				    <?php
						$moment = get_field('list-key-moment');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $moment,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>
			    </div>
			</div>

		    <!-- opening -->

		    <div class="content-event">
			   	<div class="row">
				    <?php
						$opening = get_field('list-opening');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $opening,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>
			    </div>
			</div>

		    <!-- tvc -->

		    <div class="content-event">
			   	<div class="row">
				    <?php
						$tvc = get_field('list-tvc');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $tvc,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>
			    </div>
			</div>

		    <!-- hologram -->

		    <div class="content-event">
			   	<div class="row">
				    <?php
						$hologram = get_field('list-hologram');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $hologram,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>
			    </div>
			</div>

		    <!-- mapping -->

		    <div class="content-event">
			    <div class="row">
				    <?php
						$mapping = get_field('list-mapping');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $mapping,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<a class="img-event" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

						</div>

					<?php endwhile; wp_reset_postdata(); ?>
			    </div>
			</div>

		</div>
	</div>


	<div class="bg-graphic">
		<?php 
        $image = get_field('bg-img');
        if( !empty( $image ) ): ?>
            <img class="img-graphic" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="title-intro title-event">
        	<h3><?php echo get_field('event-experienced3'); ?></h3>
        </div>
	</div>


    <div class="content-questions4">
	    <?php if( have_rows('join-us') ): ?>
            <?php while( have_rows('join-us') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                $link = get_sub_field('link');
                ?>

                <img class="img-questions3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                <div class="title-questions4">
                	<div class="container">
	                	<h3><?php the_sub_field('content'); ?></h3>

	                	<a href="<?php echo $link['url'];?>">
	                		<?php echo get_sub_field('text'); ?>	
	                	</a>
	                </div>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
    </div>

<?php get_footer(); ?>