
	<div class="container bg-footer">
		<div class="content-footer">

	        <?php 
            $image = get_field('logo-footer', 'option');
            if( !empty( $image ) ): ?>

            	<a href="<?php echo get_field('link-logo-footer', 'option'); ?>">
                	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

            <?php endif; ?>

            <h1><?php the_field('title-footer', 'option'); ?></h1>

            <ul class="list-social-footer">
				<?php if( have_rows('list-social-footer', 'option') ): ?>
		            <?php while( have_rows('list-social-footer', 'option') ): the_row(); 
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
	
	<!-- ------------------ -->

	<div class="bg-footer2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<h2 class="title-footer"><?php echo get_field('contact-us', 'option'); ?></h2>

					<ul class="contact-footer">
						<li>
							<a href="<?php echo get_field('link-address', 'option'); ?>">
								<?php echo get_field('icon-address', 'option'); ?>

								<?php echo get_field('text-address', 'option'); ?>
							</a>
						</li>

						<li>
							<a href="tel:+0842 4567 99">
								<?php echo get_field('icon-phone', 'option'); ?>

								<?php echo get_field('text-phone', 'option'); ?>
							</a>
						</li>

						<li>
							<a href="mailto:smstheheat@gmail.com">
								<?php echo get_field('icon-mail', 'option'); ?>

								<?php echo get_field('text-mail', 'option'); ?>
							</a>
						</li>
					</ul>
				</div>

				<!-- dinh mục -->

				<div class="col-lg-4 col-12">
					<h2 class="title-footer"><?php echo get_field('category-service', 'option'); ?></h2>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
				</div>

				<div class="col-lg-4 col-12"></div>

			</div>
		</div>
	</div>

	<p class="copyright"><?php echo get_field('copyright', 'option'); ?></p>


	<div class="icon-fixed">
		<a class="back-top" href="#"><i class="far fa-chevron-double-up"></i></a>

        <?php 
        $image = get_field('messenger', 'option');
        if( !empty( $image ) ): ?>

        	<a href="<?php echo get_field('link-messenger', 'option'); ?>">
            	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>

        <?php endif; ?>
	</div>

	

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->


<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


</body>
</html>