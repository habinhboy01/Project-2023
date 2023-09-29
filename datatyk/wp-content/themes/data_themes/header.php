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

	<div class="main-pc">
		<div class="bg-header">
			<div class="container-fluid">
				<div class="bg-header2">
					<ul class="menu1">
						<li>
						    <?php 
		                    $image = get_field('icon-mail','option');
		                    if( !empty( $image ) ): ?>
		                        <img class="icon-menu" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		                    <?php endif; ?>

		                    <a href="mailto:contact@datayk.com"><?php echo get_field('text-mail','option');?></a>
						</li>

						<li>
						    <?php 
		                    $image = get_field('icon-phone','option');
		                    if( !empty( $image ) ): ?>
		                        <img class="icon-menu" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		                    <?php endif; ?>

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

			    	<?php if( have_rows('request', 'option') ): ?>
			            <?php while( have_rows('request', 'option') ): the_row(); 
			                $link = get_sub_field('link');
			                $social_icon = get_sub_field('text');
			                ?>

			                <a class="request-demo" href="<?php echo $link;?>">
							   <?php echo $social_icon ?>
							</a>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<!-- --------------- -->

		<!-- menu đa cấp -->

		<!-- menu company -->

		<div class="container-fluid">
			<div id="company" class="bg-sub-menu">
				<div class="row">
					<?php if( have_rows('menu-company', 'option') ): ?>
			            <?php while( have_rows('menu-company', 'option') ): the_row();
			            	$image = get_sub_field('img');
		                	$picture = $image['sizes']['thumbnail'];
			                ?>

			                <div class="col-lg-3 col-md-3">
			                	<div class="bg-sub-menu2">
			                		<h2 class="text-menu"><?php echo get_sub_field('title'); ?></h2>

			                		<p class="text-technology2"><?php the_sub_field('description'); ?></p>
			                	</div>
			                </div>

			                <div class="col-lg-6 col-md-6">
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
			                </div>

			                <div class="col-lg-3 col-md-3">
			                	<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
			                </div>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<!-- menu solution -->

		<div class="container-fluid">
			<div id="solution" class="bg-sub-menu">

				<div class="row">
					<div class="col-lg-4 col-md-4">
						<!-- data analytics -->

	                	<div class="bg-sub-menu3 tab-sub-menu active-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('solution','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-solution','option'); ?></p>
	                	</div>

	                	<!-- application modernization -->

	                	<div class="bg-sub-menu3 tab-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('solution2','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-solution2','option'); ?></p>
	                	</div>

	                	<!-- cloud solution -->

	                	<div class="bg-sub-menu3 tab-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('solution3','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-solution3','option'); ?></p>
	                	</div>

	                	<!-- security -->

	                	<div class="bg-sub-menu3 tab-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('solution4','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-solution4','option'); ?></p>
	                	</div>
	                </div>


	                <div class="col-lg-8 col-md-8">
	                	 <!-- solution-data-analytics -->

	                	<div class="row content-sub-menu content-sub-menu2">
            				<?php if( have_rows('solution-data-analytycs', 'option') ): ?>
					            <?php while( have_rows('solution-data-analytycs', 'option') ): the_row();
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

	                	<!-- application modernization -->

	                	<div class="row content-sub-menu">
            				<?php if( have_rows('solution-application-modernization', 'option') ): ?>
					            <?php while( have_rows('solution-application-modernization', 'option') ): the_row();
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

	                	<!-- cloud solution -->

	                	<div class="row content-sub-menu">
            				<?php if( have_rows('solution-cloud-solution', 'option') ): ?>
					            <?php while( have_rows('solution-cloud-solution', 'option') ): the_row();
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

	                	<!-- security -->

	                	<div class="row content-sub-menu">
            				<?php if( have_rows('solution-security', 'option') ): ?>
					            <?php while( have_rows('solution-security', 'option') ): the_row();
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

	               
				</div>
			</div>
		</div>


		<!-- menu services -->

		<div class="container-fluid">
			<div id="services" class="bg-sub-menu">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<!-- data analytics -->

	                	<div class="bg-sub-menu3 tab-sub-menu2 active-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('services','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-services','option'); ?></p>
	                	</div>

	                	<!-- digital tranformation -->

	                	<div class="bg-sub-menu3 tab-sub-menu2">
	                		<h2 class="text-menu"><?php echo get_field('services2','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-services2','option'); ?></p>
	                	</div>

	                	<!-- Consultant & Training -->

	                	<div class="bg-sub-menu3 tab-sub-menu2">
	                		<h2 class="text-menu"><?php echo get_field('services3','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-services3','option'); ?></p>
	                	</div>

	                	<!-- LICENSING -->

	                	<div class="bg-sub-menu3 tab-sub-menu2">
	                		<h2 class="text-menu"><?php echo get_field('services4','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-services4','option'); ?></p>
	                	</div>
	                </div>

	                <!-- ------------- -->

	                <div class="col-lg-8 col-md-8">
	                	<!-- services-data-analytics -->

	                	<div class="row content-sub-menu3 content-sub-menu2">
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

	                	<!-- digital tranformation -->

	                	<div class="row content-sub-menu3">
            				<?php if( have_rows('services-digital-transformation', 'option') ): ?>
					            <?php while( have_rows('services-digital-transformation', 'option') ): the_row();
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

	                	<!-- Consultant & Training -->

	                	<div class="row content-sub-menu3">
            				<?php if( have_rows('services-consultant-&-training', 'option') ): ?>
					            <?php while( have_rows('services-consultant-&-training', 'option') ): the_row();
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

	                	<!-- LICENSING -->

	                	<div class="row content-sub-menu3">
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
				</div>
			</div>
		</div>


		<!-- menu our case studies -->

		<div class="container-fluid">
			<div id="studies" class="bg-sub-menu">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<!-- data analytics -->

	                	<div class="bg-sub-menu3 tab-sub-menu3 active-sub-menu">
	                		<h2 class="text-menu"><?php echo get_field('our-case-studies','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-our-case-studies','option'); ?></p>
	                	</div>

	                	<!-- application -->

	                	<div class="bg-sub-menu3 tab-sub-menu3">
	                		<h2 class="text-menu"><?php echo get_field('our-case-studies2','option'); ?></h2>

	                		<p class="text-technology2"><?php the_field('description-our-case-studies2','option'); ?></p>
	                	</div>

	                </div>

	                <!-- ------------------ -->

	                <div class="col-lg-8 col-md-8">
	                	<!--data-analytics -->

	                	<div class="row content-sub-menu4 content-sub-menu2">
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

	                	<!-- application -->

	                	<div class="row content-sub-menu4">
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
	            </div>
			</div>
		</div>


		<!-- menu resource -->

		<div class="container-fluid">
			<div id="resource" class="bg-sub-menu">
				<div class="row">
					<?php if( have_rows('menu-resource', 'option') ): ?>
			            <?php while( have_rows('menu-resource', 'option') ): the_row();
			            	$image = get_sub_field('img');
		                	$picture = $image['sizes']['thumbnail'];
			                ?>

			                <div class="col-lg-3 col-md-3">
			                	<div class="bg-sub-menu2">
			                		<h2 class="text-menu"><?php echo get_sub_field('title'); ?></h2>

			                		<p class="text-technology2"><?php the_sub_field('description'); ?></p>
			                	</div>
			                </div>

			                <div class="col-lg-6 col-md-6">
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
			                </div>

			                <div class="col-lg-3 col-md-3">
			                	<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
			                </div>

			       	    <?php endwhile; ?>
					<?php endif; ?>
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
				    <?php 
                    $image = get_field('icon-mail','option');
                    if( !empty( $image ) ): ?>
                        <img class="icon-menu" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <a href="mailto:contact@datayk.com"><?php echo get_field('text-mail','option');?></a>
				</li>

				<li>
				    <?php 
                    $image = get_field('icon-phone','option');
                    if( !empty( $image ) ): ?>
                        <img class="icon-menu" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <a href="tel:(+84) 906 885 828"><?php echo get_field('text-phone','option');?></a>
				</li>
			</ul>

			<?php wp_nav_menu (
            array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>

            <?php wp_nav_menu (
            array('theme_location' => 'menu-5', 'menu_class' => 'menu-mobile'));?>

            <div class="request-demo-mobile">
	    		<?php if( have_rows('request', 'option') ): ?>
		            <?php while( have_rows('request', 'option') ): the_row(); 
		                $link = get_sub_field('link');
		                $social_icon = get_sub_field('text');
		                ?>

		                <a class="request-demo" href="<?php echo $link;?>">
						   <?php echo $social_icon ?>
						</a>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</div>
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

		<!-- solution -->

		<div class="company-mobile display-sub2">
		    <h2 class="text-menu-mobile sub-solution">

            	<i class="fas fa-chevron-left"></i>

            	Solution
            		
            </h2>

            <ul class="list-solution-mobile">

            	<!-- solution-data-analytics -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile"><?php echo get_field('solution','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile">
		                		<div class="row">
		            				<?php if( have_rows('solution-data-analytycs', 'option') ): ?>
							            <?php while( have_rows('solution-data-analytycs', 'option') ): the_row();
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

            	<!-- solution-application-modernization -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile2"><?php echo get_field('solution2','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile2">
		                		<div class="row">
		            				<?php if( have_rows('solution-application-modernization', 'option') ): ?>
							            <?php while( have_rows('solution-application-modernization', 'option') ): the_row();
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

            	<!-- solution-cloud-solution -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile3"><?php echo get_field('solution3','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile3">
		                		<div class="row">
		            				<?php if( have_rows('solution-cloud-solution', 'option') ): ?>
							            <?php while( have_rows('solution-cloud-solution', 'option') ): the_row();
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

            	<!-- solution-security -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile4"><?php echo get_field('solution4','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile4">
		                		<div class="row">
		            				<?php if( have_rows('solution-security', 'option') ): ?>
							            <?php while( have_rows('solution-security', 'option') ): the_row();
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

		<!-- Services -->

		<div class="company-mobile display-sub3">
		    <h2 class="text-menu-mobile sub-services">

            	<i class="fas fa-chevron-left"></i>

            	Services
            		
            </h2>

            <ul class="list-solution-mobile">

            	<!-- services-data-analytics -->

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

            	<!-- services-digital-transformation -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile2"><?php echo get_field('services2','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile2">
		                		<div class="row">
		            				<?php if( have_rows('services-digital-transformation', 'option') ): ?>
							            <?php while( have_rows('services-digital-transformation', 'option') ): the_row();
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

            	<!-- services-consultant-&-training -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile3"><?php echo get_field('services3','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile3">
		                		<div class="row">
		            				<?php if( have_rows('services-consultant-&-training', 'option') ): ?>
							            <?php while( have_rows('services-consultant-&-training', 'option') ): the_row();
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

            	<!-- services-licensing -->

            	<li>
            		<ul>
            			<li class="open-solution-mobile4"><?php echo get_field('services4','option'); ?> <i class="fas fa-chevron-down"></i></li>

            			<li>
		                	<div class="border-content-mobile4">
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

            	<!-- our-case-studies-application -->

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


 
