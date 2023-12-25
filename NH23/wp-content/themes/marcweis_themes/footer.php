	<div class="bg-footer">
		<div class="container">
			<div class="row menu-logo">
				<div class="col-lg-4 col-4">
					<a href="<?php echo home_url(); ?>">
						<?php 
						$image = get_field('logo-footer', 'option');
						if( !empty( $image ) ): ?>

						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

						<?php endif; ?>
					</a>
				</div>
				
				<div class="col-lg-4 col-4"></div>
				
				<div class="col-lg-4 col-4">
					<a href="<?php echo home_url(); ?>">
						<?php 
						$image = get_field('logo-footer-2', 'option');
						if( !empty( $image ) ): ?>

						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

						<?php endif; ?>
					</a>
				</div>
			</div>
			
			<div class="row bg-footer2">
				<div class="col-lg-4 col-12">
					<?php wp_nav_menu (
		    		array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
				</div>

				<div class="col-lg-4 col-12">
					<div class="logo-footer">
						<a href="<?php echo home_url(); ?>">
			        		<?php 
				            $image = get_field('logo-footer', 'option');
				            if( !empty( $image ) ): ?>

				                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				            <?php endif; ?>
			        	</a>
					</div>
				</div>

				<div class="col-lg-4 col-12">
					<div class="logo-footer-2">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('logo-footer-2', 'option');
							if( !empty( $image ) ): ?>

							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<?php endif; ?>
						</a>
					</div>

		    		<ul class="list-social-footer">
		    			<?php if( have_rows('social', 'option') ): ?>
				            <?php while( have_rows('social', 'option') ): the_row(); 
				            	$image = get_sub_field('icon');
                				$picture = $image['sizes']['thumbnail']; 
				            	?>

				                <li>
				                	<a href="<?php echo get_sub_field('link-social'); ?>">
				                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                	</a>
				                </li>

				            <?php endwhile; ?>
    					<?php endif; ?>
		    		</ul>
				</div>
			</div>
		</div>
	</div>

	<span class="back-top"><a href="#"><i class="fas fa-chevron-up"></i></a></span>

	<div class="hotline"><a href="<?php echo get_field('hotline','option'); ?>"><?php echo get_field('icon-hotline', 'option'); ?></a></div>

	<span class="messenger"><a href="<?php echo get_field('link-messenger','option'); ?>"><?php echo get_field('icon-messenger', 'option'); ?></a></span>


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

<?php if (is_page('trang-chu')) { ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/banner.js"></script>
<?php } ?>

<?php if (is_page('lien-he')) { ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/map.js"></script>
<?php } ?>

<?php if (is_page('haiz-quizz') || is_page('quizzes')) { ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/question.js"></script>
<?php } ?>

<script>
  AOS.init();
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/651fa5106fcfe87d54b70623/1hc1ppip1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>