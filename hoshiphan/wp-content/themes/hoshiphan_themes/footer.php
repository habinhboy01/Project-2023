	
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="<?php echo get_field('link-logo', 'option'); ?>">
						<?php 
			            $image = get_field('logo', 'option');
			            if( !empty( $image ) ): ?>
			                <img class="logo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>
					</a>
				</div>

				<!-- ĐÀO TẠO BẾP NHẬT -->

				<div class="col-lg-2 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('title-train', 'option'); ?></h3>

					<ul class="list-train">
						<?php if( have_rows('list-train', 'option') ): ?>
				            <?php while( have_rows('list-train', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>">
									   <?php echo get_sub_field('title'); ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- HOSHI STORE -->

				<div class="col-lg-2 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('title-store', 'option'); ?></h3>

					<ul class="list-train">
						<?php if( have_rows('list-store', 'option') ): ?>
				            <?php while( have_rows('list-store', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>">
									   <?php echo get_sub_field('title'); ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- liên hệ -->

				<div class="col-lg-3 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('title-contact', 'option'); ?></h3>

					<div class="contact-footer"><?php the_field('content-contact', 'option'); ?></div>
				</div>

				<!-- social -->

				<div class="col-lg-2 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('title-social', 'option'); ?></h3>

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
			</div>
		</div>
	</div>

	<!-- back top -->

	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>

	<!-- contact footer -->

	<ul class="contact-footer2">
		<?php if( have_rows('contact-footer','option') ): ?>
            <?php while( have_rows('contact-footer','option') ): the_row();
            	$image = get_sub_field('icon');
            	$picture = $image['sizes']['thumbnail'];
                ?>

                <li>
            		<a href="<?php echo get_sub_field('link');?>">
					   <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
					</a>
                </li>

       	    <?php endwhile; ?>
		<?php endif; ?>
	</ul>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->


<!-- My Js -->

<?php if (is_page('trang-chu')) { ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/modal-slider.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


</body>
</html>