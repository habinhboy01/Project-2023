<?php
/*

Template Name: Home page

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

	<div class="bg-header display-pc a menu-home">
		<div class="container">
			<div class="header-pc">
				<?php $image = get_field('logo-page', 'option');

		        if( !empty( $image ) ): ?>

		        	<a class="sticky-logo sticky-logo-3" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <?php $image = get_field('logo-page-2', 'option');

		        if( !empty( $image ) ): ?>

		        	<a class="sticky-logo-2" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="bg-header display-mobile a menu-home">
		<div class="container">
			<div class="header-mobile">
				<span class="icon-bar"><i class="far fa-bars"></i></span>

				<?php $image = get_field('logo-page', 'option');

		        if( !empty( $image ) ): ?>

		        	<a class="sticky-logo sticky-logo-3" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </a>

		        <?php endif; ?>

		        <?php $image = get_field('logo-page-2', 'option');

		        if( !empty( $image ) ): ?>

		        	<a class="sticky-logo-2" href="<?php echo home_url(); ?>">
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


	<!-- phần body -->

	<!-- slider intro -->

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-intro') ): ?>
            <?php while( have_rows('slider-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<a href="<?php echo get_sub_field('link'); ?>">
	                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                	<h1 class="title-intro"><?php echo get_sub_field('title'); ?></h1>
	                </a>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- đối tác -->

	<div class="bg-partner">
		<div class="container">
			<h3 class="category-partner text-center"><?php echo get_field('category-partner'); ?></h3>

			<h2 class="title-partner text-center"><?php echo get_field('title-partner'); ?></h2>

			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-partner') ): ?>
		            <?php while( have_rows('list-partner') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
			                <img class="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>


	<!-- về chúng tôi -->

	<div class="bg-about">
		<div class="container">

			<div class="row">
				<div class="col-lg-5 col-12">
					<div class="content-about">
						<?php $image = get_field('img-about-us');

				        if( !empty( $image ) ): ?>

				            <img id="img-about-us-home" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>

						<div>
							<h3><?php echo get_field('category-about-us'); ?></h3>

							<a class="read-more-home" href="<?php echo get_field('link-about-us'); ?>">
								Xem tất cả
							</a>
						</div>
							
					</div>
				</div>

				<div class="col-lg-7 col-12">
					<div class="content-about-3">
						<h3 class="category-about-us"><?php echo get_field('category-about-us'); ?></h3>

						<div class="content-about-2"><?php the_field('content-about-us'); ?></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- 5 ĐIỂM MẠNH CỦA CHÚNG TÔI? (USPs) -->

	<div class="mr-top">
		<div class="container">
			<h2 class="reliable-partner"><?php echo get_field('reliable-partner'); ?></h2>

			<h2 class="title-partner text-center"><?php echo get_field('strength'); ?></h2>

			<div class="row">
				<?php if( have_rows('list-strength') ): ?>
		            <?php while( have_rows('list-strength') ): the_row(); ?>

		            	<div class="col-lg-4 col-md-6 col-12">
		            		<div class="list-strength">
			            		<?php echo get_sub_field('icon'); ?>

			            		<h3><?php echo get_sub_field('title'); ?></h3>

			            		<p><?php the_sub_field('content'); ?></p>
			            	</div>
		            	</div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>

		    <a href="<?php echo get_field('link-request-price'); ?>">
		    	<p class="request-price"><?php echo get_field('request-price'); ?></p>
		    </a>
		</div>
	</div>


	<!-- dịch vụ -->

	<div class="mr-top">
		<div class="container">
			<h3 class="category-partner text-center"><?php echo get_field('category-service'); ?></h3>

			<h2 class="title-partner text-center"><?php echo get_field('title-service'); ?></h2>

			<!-- CUNG CẤP NHIÊN LIỆU ĐỐT THAN -->

			<div class="mr-top">
				<h4 class="charcoal"><?php echo get_field('charcoal'); ?></h4>

				<p class="description-charcoal"><?php echo get_field('description-charcoal'); ?></p>

				<div class="row">
					<?php
					$main_post = get_field('service-charcoal');
					if( $main_post ): ?>
						<?php foreach( $main_post as $post ): 
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
					 		
					 		<div class="col-lg-4 col-md-6 col-12">
								<div class="list-service-home">
									<a class="img-news-home" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>

									<div class="title-service-home">
										<h1 class="title-details">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h1>

										<a class="read-more-home" href="<?php the_permalink(); ?>">
											Xem CHI TIẾT
										</a>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
						<?php 
						// Reset the global post object so that the rest of the page works correctly.
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>

			<!-- iBiomass: Bã điều, viên nén, gỗ dăm -->

			<div class="mr-top">
				<h4 class="charcoal"><?php echo get_field('ibiomass'); ?></h4>

				<p class="description-charcoal"><?php echo get_field('description-ibiomass'); ?></p>

				<div class="row">
					<?php
					$main_post = get_field('service-ibiomass');
					if( $main_post ): ?>
						<?php foreach( $main_post as $post ): 
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
					 		
					 		<div class="col-lg-4 col-md-6 col-12">
								<div class="list-service-home">
									<a class="img-news-home" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>

									<div class="title-service-home">
										<h1 class="title-details">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h1>

										<a class="read-more-home" href="<?php the_permalink(); ?>">
											Xem CHI TIẾT
										</a>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
						<?php 
						// Reset the global post object so that the rest of the page works correctly.
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>

			<!-- Dịch vụ vận hành & cung cấp hơi, nhiệt -->

			<div class="mr-top">
				<h4 class="charcoal"><?php echo get_field('action'); ?></h4>

				<p class="description-charcoal"><?php echo get_field('description-action'); ?></p>

				<div class="row">
					<?php
					$main_post = get_field('service-action');
					if( $main_post ): ?>
						<?php foreach( $main_post as $post ): 
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
					 		
					 		<div class="col-lg-4 col-md-6 col-12">
								<div class="list-service-home">
									<a class="img-news-home" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>

									<div class="title-service-home">
										<h1 class="title-details">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h1>

										<a class="read-more-home" href="<?php the_permalink(); ?>">
											Xem CHI TIẾT
										</a>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
						<?php 
						// Reset the global post object so that the rest of the page works correctly.
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-service-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<h1 class="logistics"><?php echo get_field('logistics'); ?></h1>

					<p class="description-logistics"><?php the_field('description-logistics'); ?></p>
				</div>

				<?php
				$main_post = get_field('list-logistics');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="col-lg-3 col-md-6 col-12">
							<div class="list-logistics">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<h1 class="title-details mr-top-2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<div class="text-news"><?php the_excerpt();?></div>

								<a class="read-more-home-2" href="<?php the_permalink(); ?>">
									Xem CHI TIẾT
								</a>

							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- tin tức -->

	<div class="mr-bottom">
		<div class="container">
			<h3 class="category-partner text-center"><?php echo get_field('category-news'); ?></h3>

			<h2 class="title-partner text-center"><?php echo get_field('title-news'); ?></h2>

			<div class="mr-top">
	            <div class="row">
	                <?php
	                	$news = get_field('list-news');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => $news,
							'orderby' => 'post_date',
			                'order' => 'date',
							
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					
						<div class="col-lg-8 col-12">
	    					<div class="row">
	    						<div class="col-lg-6 col-12">
		    						<a class="img-news-home-2" href="<?php the_permalink(); ?>">
		    							<?php the_post_thumbnail('full'); ?>
		    						</a>
		    					</div>

		    					<div class="col-lg-6 col-12">
								    <h1 class="title-news-home">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>

									<div class="description-charcoal"><?php the_excerpt(); ?></div>

									<p class="text-date"><?php echo get_the_date(); ?></p>
								</div>
	    					</div>
	    				</div>

	    				
	    				<div class="col-lg-4 col-12">
	                        <?php
	                            $categories = get_the_category($post->ID);
	                            if ($categories) 
	                            {
	                                $category_ids = array();
	                                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	                         
	                                $args=array(
	                                'category__in' => $category_ids,
	                                'post__not_in' => array($post->ID),
	                                'showposts'=>3, // Số bài viết bạn muốn hiển thị.
	                                'caller_get_posts'=>1
	                                );
	                                $my_query = new wp_query($args);
	                                if( $my_query->have_posts() ) 
	                                {
	                                    echo '';
	                                    while ($my_query->have_posts())
	                                    {
	                                        $my_query->the_post();
	                                        ?>

	                                        <div class="row mr-top-3">
	                                        	<div class="col-lg-5 col-md-4 col-4">
	                								<a class="img-news-home-3" href="<?php the_permalink(); ?>">
	                									<?php the_post_thumbnail('full'); ?>
	                								</a>
	                                        	</div>

	                                        	<div class="col-lg-7 col-md-8 col-8">
	                								<h1 class="title-news-home-2">
	                									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	                								</h1>

	                								<p class="text-date"><?php echo get_the_date(); ?></p>
	                                        	</div>
	                						</div>

	                                    <?php
	                                    }
	                                    echo '';
	                                }
	                            }
	                        ?>
	    				</div>

					<?php endwhile; wp_reset_postdata(); ?>
	            </div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>