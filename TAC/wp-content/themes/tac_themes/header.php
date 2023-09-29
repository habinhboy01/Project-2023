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

	<!-- menu pc -->
	<div class="bg-header">
		<div class="container-fluid">
			<div class="bg-menu">
				<div class="bg-menu2">
					<a class="text-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			        </a>

			        <ul class="menu-pc2">
			        	<!-- menu-design -->

			        	<li class="open-design">
			        		<?php echo get_field('design','option'); ?>
			        		
			        		<div class="bg-sub-menu menu-design">
								<div class="container-fluid">

									<h2 class="text-header2"><?php echo get_field('design','option'); ?></h2>

									<!-- sub 1 -->

									<div class="bg-sub-menu2">
										<?php if( have_rows('sub-design', 'option') ): ?>
								            <?php while( have_rows('sub-design', 'option') ): the_row(); ?>

								                <div class="btn-design">
								                	<p class="text-header">
									                	<?php echo get_sub_field('title'); ?> 

									                	<i class="fas fa-chevron-right sub-design"></i>
									                </p>

									                <ul class="list-sub-menu design">				
									                	<?php if( have_rows('title2', 'option') ): ?>
												            <?php while( have_rows('title2', 'option') ): the_row(); 
												                $link = get_sub_field('link');
												                $social_icon = get_sub_field('text');
												                ?>

												                <li>
													                <a href="<?php echo $link['url'];?>">
																	   <?php echo $social_icon ?>
																	</a>
																</li>

															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
								                </div>

								       	    <?php endwhile; ?>
										<?php endif; ?>
									</div>


									<!-- sub 2 -->

									<div class="bg-sub-menu2">
										<?php if( have_rows('sub-design2', 'option') ): ?>
								            <?php while( have_rows('sub-design2', 'option') ): the_row(); ?>

								                <div class="btn-design2">
								                	<p class="text-header">
									                	<?php echo get_sub_field('title'); ?> 

									                	<i class="fas fa-chevron-right sub-design"></i>
									                </p>

									                <ul class="list-sub-menu design2">				
									                	<?php if( have_rows('title2', 'option') ): ?>
												            <?php while( have_rows('title2', 'option') ): the_row(); 
												                $link = get_sub_field('link');
												                $social_icon = get_sub_field('text');
												                ?>

												                <li>
													                <a href="<?php echo $link['url'];?>">
																	   <?php echo $social_icon ?>
																	</a>
																</li>

															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
								                </div>

								       	    <?php endwhile; ?>
										<?php endif; ?>
									</div>

									<!-- sub 3 -->

									<div class="bg-sub-menu2">
										<?php if( have_rows('sub-design3', 'option') ): ?>
								            <?php while( have_rows('sub-design3', 'option') ): the_row(); ?>

								                <div class="btn-design3">
								                	<p class="text-header">
									                	<?php echo get_sub_field('title'); ?> 

									                	<i class="fas fa-chevron-right sub-design"></i>
									                </p>

									                <ul class="list-sub-menu design3">				
									                	<?php if( have_rows('title2', 'option') ): ?>
												            <?php while( have_rows('title2', 'option') ): the_row(); 
												                $link = get_sub_field('link');
												                $social_icon = get_sub_field('text');
												                ?>

												                <li>
													                <a href="<?php echo $link['url'];?>">
																	   <?php echo $social_icon ?>
																	</a>
																</li>

															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
								                </div>

								       	    <?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
			        	</li>

			        	 <!-- menu deploy -->

			        	<li class="open-deploy">
			        		<?php echo get_field('deploy','option'); ?>
			        		
						    <div class="bg-sub-menu menu-deploy">
						        <div class="container-fluid">

						            <h2 class="text-header2"><?php echo get_field('deploy','option'); ?></h2>

						            <!-- sub 1 -->

						            <div class="bg-sub-menu2">
										<?php if( have_rows('sub-deploy', 'option') ): ?>
								            <?php while( have_rows('sub-deploy', 'option') ): the_row(); ?>

								                <div class="btn-deploy">
								                	<p class="text-header">
									                	<?php echo get_sub_field('title'); ?> 

									                	<i class="fas fa-chevron-right sub-design"></i>
									                </p>

									                <ul class="list-sub-menu deploy">				
									                	<?php if( have_rows('title2', 'option') ): ?>
												            <?php while( have_rows('title2', 'option') ): the_row(); 
												                $link = get_sub_field('link');
												                $social_icon = get_sub_field('text');
												                ?>

												                <li>
													                <a href="<?php echo $link['url'];?>">
																	   <?php echo $social_icon ?>
																	</a>
																</li>

															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
								                </div>

								       	    <?php endwhile; ?>
										<?php endif; ?>
									</div>

						            <!-- sub 2 -->

						         	<div class="bg-sub-menu2">
										<?php if( have_rows('sub-deploy2', 'option') ): ?>
								            <?php while( have_rows('sub-deploy2', 'option') ): the_row(); ?>

								                <div class="btn-deploy2">
								                	<p class="text-header">
									                	<?php echo get_sub_field('title'); ?> 

									                	<i class="fas fa-chevron-right sub-design"></i>
									                </p>

									                <ul class="list-sub-menu deploy2">				
									                	<?php if( have_rows('title2', 'option') ): ?>
												            <?php while( have_rows('title2', 'option') ): the_row(); 
												                $link = get_sub_field('link');
												                $social_icon = get_sub_field('text');
												                ?>

												                <li>
													                <a href="<?php echo $link['url'];?>">
																	   <?php echo $social_icon ?>
																	</a>
																</li>

															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
								                </div>

								       	    <?php endwhile; ?>
										<?php endif; ?>
									</div>
						        </div>
						    </div>
			        	</li>
			        </ul>
			    </div>

			    <div class="bg-menu3">
	        		<?php wp_nav_menu (
			        array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>


	        		<?php wp_nav_menu (
			        array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc3'));?>
			    </div>

			</div>
		</div>
	</div>


	<!-- menu mobile -->
	<div class="header-mobile">
		<div class="container">
			<div class="bg-mobile">
		        <a class="text-url" href="<?php echo home_url(); ?>">
		            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        </a>

		        <div class="bg-mobile2">
			        <?php wp_nav_menu (
				        array('theme_location' => 'menu-2', 'menu_class' => 'menu-mobile'));?>

				    <span class="icon-bar"><i class="fas fa-bars"></i></span>
				</div>
			</div>
		</div>

		<div class="model-mobile">
			<ul class="menu-pc2">
	        	<li class="open-design-mobile">
	        		<p>
	        			<?php echo get_field('design','option'); ?>

	        			<i class="fas fa-chevron-down sub-design"></i>
	        		</p>
	        	</li>

        	    <div class="bg-sub-menu menu-design-mobile">
					<div class="container-fluid">

						<!-- sub 1 -->

						<div class="bg-sub-menu2">
							<?php if( have_rows('sub-design', 'option') ): ?>
					            <?php while( have_rows('sub-design', 'option') ): the_row(); ?>

					                <p class="text-header btn-design-mobile">
					                	<?php echo get_sub_field('title'); ?> 

					                	<i class="fas fa-chevron-down sub-design"></i>
					                </p>

					                <ul class="list-sub-menu design-mobile">				
					                	<?php if( have_rows('title2', 'option') ): ?>
								            <?php while( have_rows('title2', 'option') ): the_row(); 
								                $link = get_sub_field('link');
								                $social_icon = get_sub_field('text');
								                ?>

								                <li>
									                <a href="<?php echo $link['url'];?>">
													   <?php echo $social_icon ?>
													</a>
												</li>

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>


						<!-- sub 2 -->

						<div class="bg-sub-menu2">
							<?php if( have_rows('sub-design2', 'option') ): ?>
					            <?php while( have_rows('sub-design2', 'option') ): the_row(); ?>

					                <p class="text-header btn-design-mobile2">
					                	<?php echo get_sub_field('title'); ?> 

					                	<i class="fas fa-chevron-down sub-design"></i>
					                </p>

					                <ul class="list-sub-menu design-mobile2">				
					                	<?php if( have_rows('title2', 'option') ): ?>
								            <?php while( have_rows('title2', 'option') ): the_row(); 
								                $link = get_sub_field('link');
								                $social_icon = get_sub_field('text');
								                ?>

								                <li>
									                <a href="<?php echo $link['url'];?>">
													   <?php echo $social_icon ?>
													</a>
												</li>

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>

						<!-- sub 3 -->

						<div class="bg-sub-menu2">
							<?php if( have_rows('sub-design3', 'option') ): ?>
					            <?php while( have_rows('sub-design3', 'option') ): the_row(); ?>

					                <p class="text-header btn-design-mobile3">
					                	<?php echo get_sub_field('title'); ?> 

					                	<i class="fas fa-chevron-down sub-design"></i>
					                </p>

					                <ul class="list-sub-menu design-mobile3">				
					                	<?php if( have_rows('title2', 'option') ): ?>
								            <?php while( have_rows('title2', 'option') ): the_row(); 
								                $link = get_sub_field('link');
								                $social_icon = get_sub_field('text');
								                ?>

								                <li>
									                <a href="<?php echo $link['url'];?>">
													   <?php echo $social_icon ?>
													</a>
												</li>

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

	        	<li class="open-deploy-mobile">

	        		<p>
	        			<?php echo get_field('deploy','option'); ?>

	        			<i class="fas fa-chevron-down sub-design"></i>
	        		</p>
	        			
	        	</li>

				<div class="bg-sub-menu menu-deploy-mobile">
					<div class="container-fluid">

						<!-- sub 1 -->

						<div class="bg-sub-menu2">
							<?php if( have_rows('sub-deploy', 'option') ): ?>
					            <?php while( have_rows('sub-deploy', 'option') ): the_row(); ?>

					                <p class="text-header btn-deploy-mobile">
					                	<?php echo get_sub_field('title'); ?> 

					                	<i class="fas fa-chevron-down sub-design"></i>
					                </p>

					                <ul class="list-sub-menu deploy-mobile">				
					                	<?php if( have_rows('title2', 'option') ): ?>
								            <?php while( have_rows('title2', 'option') ): the_row(); 
								                $link = get_sub_field('link');
								                $social_icon = get_sub_field('text');
								                ?>

								                <li>
									                <a href="<?php echo $link['url'];?>">
													   <?php echo $social_icon ?>
													</a>
												</li>

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>


						<!-- sub 2 -->

						<div class="bg-sub-menu2">
							<?php if( have_rows('sub-deploy2', 'option') ): ?>
					            <?php while( have_rows('sub-deploy2', 'option') ): the_row(); ?>

					                <p class="text-header btn-deploy-mobile2">
					                	<?php echo get_sub_field('title'); ?> 

					                	<i class="fas fa-chevron-down sub-design"></i>
					                </p>

					                <ul class="list-sub-menu deploy-mobile2">				
					                	<?php if( have_rows('title2', 'option') ): ?>
								            <?php while( have_rows('title2', 'option') ): the_row(); 
								                $link = get_sub_field('link');
								                $social_icon = get_sub_field('text');
								                ?>

								                <li>
									                <a href="<?php echo $link['url'];?>">
													   <?php echo $social_icon ?>
													</a>
												</li>

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>

					</div>
				</div>
	        </ul>

			<?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile2'));?>
  
		</div>
	</div>