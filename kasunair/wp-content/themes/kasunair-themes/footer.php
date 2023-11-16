	
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="logo-footer">
						<?php $image = get_field('logo-page', 'option');

				        if( !empty( $image ) ): ?>

				        	<a href="<?php echo home_url(); ?>">
				            	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				            </a>

				        <?php endif; ?>
					</div>

					<div class="description-footer"><?php the_field('description-footer', 'option'); ?></div>

					<ul class="list-social-footer">
						<?php if( have_rows('social-footer', 'option') ): ?>
				            <?php while( have_rows('social-footer', 'option') ): the_row(); 
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

				<div class="col-lg-4 col-12">
					<h2 class="title-footer"><?php echo get_field('title-footer', 'option'); ?></h2>

					<?php wp_nav_menu (
		    		array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
				</div>


				<div class="col-lg-4 col-12">
					<h2 class="title-footer"><?php echo get_field('title-footer-2', 'option'); ?></h2>

					<?php echo do_shortcode( '[contact-form-7 id="5aa0eec" title="Contact footer"]' ); ?>
				</div>
			</div>

			<p class="copyright"><?php echo get_field('copyright', 'option'); ?></p>
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
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


</body>
</html>