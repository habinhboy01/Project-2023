	<div class="container">
		<div class="bg-footer">
			<ul class="list-footer">
				<?php if( have_rows('list-contact', 'option') ): ?>
		            <?php while( have_rows('list-contact', 'option') ): the_row(); 
		                $link = get_sub_field('link');
		                $social_icon = get_sub_field('icon');
		                ?>

		                <li>
			                <a href="<?php echo $link;?>">
							   <?php echo $social_icon ?>
							</a>
						</li>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</ul>

			<a class="text-url" href="<?php echo home_url(); ?>">
				<?php 
		            $image = get_field('logo-footer','option');
		            if( !empty( $image ) ): ?>
		                <img class="logo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
	        </a>

	        <ul class="list-footer2">
				<?php if( have_rows('list-social', 'option') ): ?>
		            <?php while( have_rows('list-social', 'option') ): the_row(); 
		                $link = get_sub_field('link');
		                $social_icon = get_sub_field('icon');
		                ?>

		                <li>
			                <a href="<?php echo $link;?>">
							   <?php echo $social_icon ?>
							</a>
						</li>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>

		<p class="text-footer"><?php echo get_field('copyright','option'); ?></p>
	</div>


	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


<script>
  AOS.init();
</script>

</body>
</html>