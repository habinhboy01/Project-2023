
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<h3 class="title-footer"><?php echo get_field('title-footer', 'option'); ?></h3>

					<div class="text-footer"><?php the_field('about-us', 'option'); ?></div>
				</div>

				<div class="col-lg-2 col-12">
					<h3 class="title-footer"><?php echo get_field('title-footer2', 'option'); ?></h3>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
				</div>

				<div class="col-lg-4 col-12">
					<h3 class="title-footer"><?php echo get_field('title-footer3', 'option'); ?></h3>

					<ul class="contact-footer">
						<?php if( have_rows('contact-footer', 'option') ): ?>
				            <?php while( have_rows('contact-footer', 'option') ): the_row(); ?>

				                <li>
				                	<?php echo get_sub_field('icon'); ?>
				                	<?php echo get_sub_field('text'); ?>
				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>
				</div>

				<div class="col-lg-3 col-12">
					<h3 class="title-footer"><?php echo get_field('title-footer4', 'option'); ?></h3>

					<div class="facebook-footer">
						<div class="fb-page" data-href="https://www.facebook.com/tramhuonghaga/?ref=embed_page" data-tabs="timeline" data-width="270" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tramhuonghaga/?ref=embed_page" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tramhuonghaga/?ref=embed_page">Trầm Hương HAGA</a></blockquote></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-top" href="#"><i class="fal fa-long-arrow-up"></i></a>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- facebook -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0" nonce="sSkPa4Qu"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


</body>
</html>