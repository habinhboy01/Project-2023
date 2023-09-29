
	<div class="bg-footer">
		<div class="container">
			<div class="bg-footer2">
				<?php if( have_rows('logo-footer', 'option') ): ?>
				    <?php while( have_rows('logo-footer', 'option') ): the_row(); 
				        $image = get_sub_field('img');
				        $link = get_sub_field('link');
				        ?>
				        <a href="<?php echo $link['url'];?>">
				        	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
				        </a>
				    <?php endwhile; ?>
				<?php endif; ?>


				<ul class="menu-footer">
					<?php if( have_rows('menu-footer', 'option') ): ?>
					    <?php while( have_rows('menu-footer', 'option') ): the_row(); 
					        $image = get_sub_field('img');
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

			<p class="text-footer"><?php echo get_field('rights-reserved', 'option'); ?></p>
		</div>
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