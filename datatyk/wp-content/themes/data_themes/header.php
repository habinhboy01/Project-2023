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

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->

	<div class="main-pc">
		<div class="bg-header">
			<div class="container-fluid">
				<div class="bg-header2">
					<ul class="menu1">
						<li>
						    <span class="icon-menu"><?php echo get_field('icon-mail','option'); ?></span>
						    
		                    <a href="mailto:contact@datayk.com"><?php echo get_field('text-mail','option');?></a>
						</li>

						<li>
						    <span class="icon-menu"><?php echo get_field('icon-phone','option'); ?></span>

		                    <a href="tel:(+84) 906 885 828"><?php echo get_field('text-phone','option');?></a>
						</li>
					</ul>

					<!-- menu 1 -->

					<div class="menu1">
						<?php wp_nav_menu (
		                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

		                <?php echo do_shortcode('[language-switcher]');?>
		            </div>
	               
				</div>
			</div>
		</div>

		<div class="bg-header3">
			<div class="container-fluid">
				<div class="bg-header2">
					<a class="home-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			        </a>

					<?php wp_nav_menu (
			        array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc2'));?>

				</div>
			</div>
		</div>

	</div>


	<!-- menu mobile -->

	<div class="main-mobile">
		<div class="bg-header">
			<div class="container-fluid">
				<?php echo do_shortcode('[language-switcher]');?>
			</div>
		</div>

		<div class="bg-header3">
			<div class="container-fluid">
				<div class="bg-header2">
					<a class="home-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			        </a>

			        <span class="bar-menu"><i class="fas fa-bars"></i></span>
				</div>
			</div>
		</div>

		<!-- sub menu -->

		<div class="bg-header-mobile">
			<div class="close-menu"><i class="fas fa-times"></i></div>

			<ul class="menu1">
				<li>
				    <span class="icon-menu"><?php echo get_field('icon-mail','option'); ?></span>
				    
                    <a href="mailto:contact@datayk.com"><?php echo get_field('text-mail','option');?></a>
				</li>

				<li>
				    <span class="icon-menu"><?php echo get_field('icon-phone','option'); ?></span>

                    <a href="tel:(+84) 906 885 828"><?php echo get_field('text-phone','option');?></a>
				</li>
			</ul>

			<?php wp_nav_menu (
            array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>

            <?php wp_nav_menu (
            array('theme_location' => 'menu-5', 'menu_class' => 'menu-mobile'));?>
            
		</div>

		<!-- da cấp menu -->

		<!-- company -->

		<div class="company-mobile display-sub">
			<?php if( have_rows('menu-company', 'option') ): ?>
	            <?php while( have_rows('menu-company', 'option') ): the_row();
	            	$image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail'];
	                ?>

	                <h2 class="text-menu-mobile sub-company">

	                	<i class="fas fa-chevron-left"></i>

	                	<?php echo get_sub_field('title'); ?>
	                		
	                </h2>

                	<ul class="list-sub-menu">
                		<?php if( have_rows('list-menu', 'option') ): ?>
				            <?php while( have_rows('list-menu', 'option') ): the_row();
				                $link = get_sub_field('link');
				                ?>

				                <li>
				                	<a href="<?php echo $link;?>">
				   						<?php echo get_sub_field('text'); ?>
									</a>
				                </li>

                			<?php endwhile; ?>
						<?php endif; ?>
                	</ul>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>

		<!-- Services -->

		<div class="company-mobile display-sub3">
		    <h2 class="text-menu-mobile sub-services-mobile">

            	<i class="fas fa-chevron-left"></i>

            	Services
            		
            </h2>

            <ul class="list-solution-mobile">

            	 <!--services-data-analytics -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile"><?php echo get_field('services','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile">
		                		<div class="row">
		            				<?php if( have_rows('services-data-analytics', 'option') ): ?>
							            <?php while( have_rows('services-data-analytics', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>

            	 <!--services applications -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile2"><?php echo get_field('services2','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile2">
		                		<div class="row">
		            				<?php if( have_rows('services-applications', 'option') ): ?>
							            <?php while( have_rows('services-applications', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>

            	 <!--services cloud -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile3"><?php echo get_field('services3','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile3">
		                		<div class="row">
		            				<?php if( have_rows('services-cloud', 'option') ): ?>
							            <?php while( have_rows('services-cloud', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>

            	 <!--services training -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile4"><?php echo get_field('services4','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile4">
		                		<div class="row">
		            				<?php if( have_rows('services-training', 'option') ): ?>
							            <?php while( have_rows('services-training', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>
            	
            	<!--services licensing-->
            	
            	<li>
            		<ul>
            			<li class="open-solution-mobile5"><?php echo get_field('services5','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile5">
		                		<div class="row">
		            				<?php if( have_rows('services-licensing', 'option') ): ?>
							            <?php while( have_rows('services-licensing', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>
            	
            	<!--services-manage-services-->
            	
            	<li>
            		<ul>
            			<li class="open-solution-mobile6"><?php echo get_field('services6','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile6">
		                		<div class="row">
		            				<?php if( have_rows('services-manage-services', 'option') ): ?>
							            <?php while( have_rows('services-manage-services', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>
            </ul>
        </div>

        <!-- our-case-studies -->

        <div class="company-mobile display-sub4">
		    <h2 class="text-menu-mobile sub-our-case-studies">

            	<i class="fas fa-chevron-left"></i>

            	Our Case Studies
            		
            </h2>

            <ul class="list-solution-mobile">

            	<!--our-case-studies-data-analytics -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile"><?php echo get_field('our-case-studies','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile">
		                		<div class="row">
		            				<?php if( have_rows('our-case-studies-data-analytics', 'option') ): ?>
							            <?php while( have_rows('our-case-studies-data-analytics', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>

            	 <!--our-case-studies-application -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile2"><?php echo get_field('our-case-studies2','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile2">
		                		<div class="row">
		            				<?php if( have_rows('our-case-studies-application', 'option') ): ?>
							            <?php while( have_rows('our-case-studies-application', 'option') ): the_row();
							                ?>

							                <div class="col-lg-4 col-6">
							                	<h2 class="text-menu2"><?php echo get_sub_field('title'); ?></h2>

							                	<ul class="list-sub-menu2">
									                <?php if( have_rows('list-menu', 'option') ): ?>
											            <?php while( have_rows('list-menu', 'option') ): the_row();
											                $link = get_sub_field('link');
											                ?>

											                <li>
											                	<a href="<?php echo $link;?>">
											   						<?php echo get_sub_field('text'); ?>
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
            			</li>
            		</ul>
            		
            	</li>
            </ul>
        </div>


        <!-- Resource -->

		<div class="company-mobile display-sub5">
			<?php if( have_rows('menu-resource', 'option') ): ?>
	            <?php while( have_rows('menu-resource', 'option') ): the_row();
	            	$image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail'];
	                ?>

	                <h2 class="text-menu-mobile sub-resource">

	                	<i class="fas fa-chevron-left"></i>

	                	<?php echo get_sub_field('title'); ?>
	                		
	                </h2>

                	<ul class="list-sub-menu">
                		<?php if( have_rows('list-menu', 'option') ): ?>
				            <?php while( have_rows('list-menu', 'option') ): the_row();
				                $link = get_sub_field('link');
				                ?>

				                <li>
				                	<a href="<?php echo $link;?>">
				   						<?php echo get_sub_field('text'); ?>
									</a>
				                </li>

                			<?php endwhile; ?>
						<?php endif; ?>
                	</ul>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		

	</div>


 
