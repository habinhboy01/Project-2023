	
	<div class="bg-footer">
		<div class="container-fluid">

			<?php if( have_rows('logo-footer','option') ): ?>
	            <?php while( have_rows('logo-footer','option') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail'];
	                $link = get_sub_field('link');
	                ?>

					<a href="<?php echo $link['url'];?>" target="_blank">
						<img class="logo-footer" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					</a>

	       	    <?php endwhile; ?>
			<?php endif; ?>

			<div class="row">
				<div class="col-lg-6 col-12">
					<h2 class="text-footer"><?php echo get_field('name-company', 'option'); ?></h2>

					<div class="row">
						<?php if( have_rows('address-company','option') ): ?>
				            <?php while( have_rows('address-company','option') ): the_row(); 
				                $image = get_sub_field('icon');
				                $picture = $image['sizes']['thumbnail'];
				                $link = get_sub_field('link');
				                ?>

				                <div class="col-lg-6 col-md-6 col-12">
									<a class="address-company" href="<?php echo $link;?>" target="_blank">
										<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

										<p><?php echo get_sub_field('text'); ?></p>
									</a>
								</div>

				       	    <?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>

				<div class="col-lg-6 col-12">
					<h2 class="text-footer"><?php echo get_field('important-link', 'option'); ?></h2>

					<div class="row">
						<div class="col-lg-6 col-12">
							<ul class="list-important-link">
								<?php if( have_rows('list-important-link','option') ): ?>
						            <?php while( have_rows('list-important-link','option') ): the_row(); ?>

										<li><i class="fas fa-circle"></i> <?php echo get_sub_field('text'); ?></li>

						       	    <?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>


						<div class="col-lg-6 col-12 list-social2">
							<div class="list-social">
								<?php if( have_rows('list-social','option') ): ?>
						            <?php while( have_rows('list-social','option') ): the_row(); 
						                $image = get_sub_field('icon');
						                $picture = $image['sizes']['thumbnail'];
						                $link = get_sub_field('link');
						                ?>

										<a href="<?php echo $link;?>" target="_blank">
											<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
										</a>
										
						       	    <?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="bg-footer2">
				<div class="menu-footer">
					<?php if( have_rows('menu-footer','option') ): ?>
			            <?php while( have_rows('menu-footer','option') ): the_row(); 
			                $link = get_sub_field('link');
			                ?>

								<a href="<?php echo $link;?>" target="_blank">
									<?php echo get_sub_field('text'); ?>
								</a>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>

				<p class="text-technology2"><?php echo get_field('copyright','option'); ?></p>
			</div>
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
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/menu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/canvas-particle.js"></script>


<script>
  AOS.init();
</script>

</body>
</html>