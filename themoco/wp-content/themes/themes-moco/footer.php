	<div class="bg-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="menu-footer">
						<a href="<?php echo home_url(); ?>">
			        		<?php 
				            $image = get_field('logo', 'option');
				            if( !empty( $image ) ): ?>

				                <img class="logo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				            <?php endif; ?>
			        	</a>

			        	<ul class="social-network social-network-footer">
							<?php if( have_rows('social-network', 'option') ): ?>
					            <?php while( have_rows('social-network', 'option') ): the_row(); 
				            		$link = get_sub_field('link');
					            	?>

				            		<li>
				            			<a href="<?php echo $link;?>">
				            				<?php echo get_sub_field('icon'); ?>
				            			</a>
				            		</li>

					            <?php endwhile; ?>
					    	<?php endif; ?>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<?php wp_nav_menu (
					array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer2'));?>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<?php wp_nav_menu (
					array('theme_location' => 'menu-3', 'menu_class' => 'menu-footer2'));?>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<?php wp_nav_menu (
					array('theme_location' => 'menu-4', 'menu_class' => 'menu-footer2'));?>
				</div>
			</div>
		</div>
	</div>

	<a class="back-top" href="#"><i class="far fa-angle-up"></i></a>

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