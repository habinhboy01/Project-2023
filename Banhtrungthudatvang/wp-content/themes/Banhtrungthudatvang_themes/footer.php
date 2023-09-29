	
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-12">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<img class="img-logo" src="<?php bloginfo('template_directory') ?>/images/logochuan.svg">
					</a>

					<!-- list social -->

					<ul class="list-social-footer">
						<?php if( have_rows('list-social', 'option') ): ?>
				            <?php while( have_rows('list-social', 'option') ): the_row(); 
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


				<div class="col-lg-5 col-12">
					<div class="info-company"><?php the_field('info-company', 'option');?></div>
				</div>

				<div class="col-lg-5 col-12">
					<h1 class="hotline"><?php echo get_field('hotline', 'option'); ?></h1>

					<p class="text-footer"><?php echo get_field('copyrights', 'option'); ?></p>

					<p class="text-footer">
						<a href="<?php echo get_field('link-logo', 'option'); ?>">
							<?php echo get_field('website', 'option'); ?>
						</a>
					</p>
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