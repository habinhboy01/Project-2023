	
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<?php if( have_rows('logo-footer', 'option') ): ?>
			            <?php while( have_rows('logo-footer', 'option') ): the_row(); 
			                $link = get_sub_field('link');
			                $image = get_sub_field('logo');
			                ?>

							<a class="logo-footer" href="<?php echo $link['url'];?>">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
							</a>

							<p class="text-footer"><?php the_sub_field('content'); ?></p>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="col-lg-4 col-12">
					<h3 class="title-footer"><?php echo get_field('service','option'); ?></h3>

					<ul class="list-footer">
						<?php if( have_rows('list-service', 'option') ): ?>
			            	<?php while( have_rows('list-service', 'option') ): the_row(); ?>

			            		<li>
			            			<i class="fas fa-circle"></i>

			            			<?php echo get_sub_field('text'); ?>
			            		</li>

			         		<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<div class="col-lg-4 col-12">
					<h3 class="title-footer"><?php echo get_field('info','option'); ?></h3>

					<ul class="list-footer">
						<?php if( have_rows('list-info', 'option') ): ?>
			            	<?php while( have_rows('list-info', 'option') ): the_row(); ?>

			            		<li>
			            			<i class="fas fa-circle"></i>

			            			<?php echo get_sub_field('text'); ?>
			            		</li>

			         		<?php endwhile; ?>
						<?php endif; ?>
					</ul>

					<p class="hotline"><?php echo get_field('hotline','option'); ?></p>

					<?php if( have_rows('social', 'option') ): ?>
			            <?php while( have_rows('social', 'option') ): the_row(); 
			                $link = get_sub_field('link');
			                ?>

							<a class="social-footer" href="<?php echo $link;?>" target="_blank">
								<?php echo get_sub_field('icon'); ?>
							</a>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
 
	<div class="bg-footer2">
		<div class="container">
			<ul class="copyright">
				<li><?php echo get_field('copyright','option'); ?></li>

				<li><?php echo get_field('hotline-copyright','option'); ?></li>
			</ul>
		</div>
	</div>

	<div class="phone-footer">
		<a href="tel:+0793.69.79.79"><i class="fas fa-phone-alt"></i></a>
	</div>

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