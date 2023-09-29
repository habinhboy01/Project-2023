
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<ul class="logo-footer">
						<?php if( have_rows('logo', 'option') ): ?>
				            <?php while( have_rows('logo', 'option') ): the_row(); 
				                $image = get_sub_field('img');
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

				<div class="col-lg-5 col-md-6 col-12">
					<h1 class="title-footer"><?php echo get_field('name-company', 'option'); ?></h1>

					<ul class="list-address">
						<?php if( have_rows('list-address', 'option') ): ?>
				            <?php while( have_rows('list-address', 'option') ): the_row(); ?>

				            	<li>
				            		<?php echo get_sub_field('icon'); ?>

				            		<?php echo get_sub_field('text'); ?>
				            	</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>
				</div>

				<div class="col-lg-4 col-12">
					<?php if( have_rows('fan-page', 'option') ): ?>
			            <?php while( have_rows('fan-page', 'option') ): the_row(); 
			                $image = get_sub_field('img');
				            $picture = $image['sizes']['thumbnail'];
				            $link = get_sub_field('link');
			                ?>

			                <a class="fan-page" href="<?php echo $link;?>">
		            			<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		            		</a>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>

			</div>
		</div>
	</div>

	<p class="bg-footer2"><?php echo get_field('Copyright', 'option'); ?></p>

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