
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<?php if( have_rows('logo', 'option') ): ?>
			            <?php while( have_rows('logo', 'option') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                $link = get_sub_field('link');
			                ?>

			                <a href="<?php echo $link['url'];?>">

			                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                </a>

			            <?php endwhile; ?>
		        	<?php endif; ?>
				</div>

				<div class="col-lg-9 col-12">
					<div class="row">
						<?php if( have_rows('list-contact', 'option') ): ?>
				            <?php while( have_rows('list-contact', 'option') ): the_row(); ?>

								<div class="col-lg-4 col-12">
									<h3 class="title-footer"><?php echo get_sub_field('title'); ?></h3>

									<p class="text-footer"><?php echo get_sub_field('text'); ?></p>

									<p class="text-footer text-footer3"><?php echo get_sub_field('text2'); ?></p>
								</div>

							<?php endwhile; ?>
				        <?php endif; ?>
				    </div>

				    <ul class="copyright-social">
				    	<li class="text-footer text-footer2"><?php the_field('copyright','option'); ?></li>

				    	<li>
				    		<ul class="list-social">
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
				    	</li>
				    </ul>
			    </div>
			</div>
		</div>
	</div>	

	<!-- icon liên hệ -->

	<ul class="bg-footer2">
		<li class="icon-phone-footer">
			<a href="tel:+0907 561 170">
				<?php echo get_field('icon-phone-footer', 'option'); ?>
			</a>
		</li>

		<li>
			<a href="<?php echo get_field('link-zalo-footer', 'option'); ?>">
				<?php 
			    $image = get_field('icon-zalo-footer', 'option');
			    if( !empty( $image ) ): ?>

			        <img class="icon-zalo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			    <?php endif; ?>
			</a>
		</li>
	</ul>


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