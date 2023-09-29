	
	<div class="bg-footer">
		<div class="container-fluid">
			<div class="row">

				<!-- thông tin công ty -->

				<div class="col-lg-4 col-md-6 col-12">
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>


		        	<div class="address-footer"><?php the_field('info-company', 'option'); ?></div>

				</div>

				<!-- tuyển dụng và đào tạo -->

				<div class="col-lg-3 col-md-6 col-12">
					<!-- tuyển dụng -->

					<h3 class="title-footer2"><?php echo get_field('recruitment', 'option'); ?></h3>
					<p class="line-footer"></p>

					<ul class="recruitment">
						<?php if( have_rows('list-recruitment', 'option') ): ?>
				            <?php while( have_rows('list-recruitment', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>
				                
				                <li>
				                	<a href="<?php echo $link['url'];?>">

				                		<?php echo get_sub_field('text'); ?>

				                	</a>
				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>

					<!-- đào tạo -->

					<h3 class="title-footer2"><?php echo get_field('training', 'option'); ?></h3>
					<p class="line-footer"></p>

					<ul class="recruitment">
						<?php if( have_rows('list-training', 'option') ): ?>
				            <?php while( have_rows('list-training', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>
				                
				                <li>
				                	<a href="<?php echo $link['url'];?>">

				                		<?php echo get_sub_field('text'); ?>

				                	</a>
				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>
				</div>

				<!-- dịch vụ -->

				<div class="col-lg-3 col-md-6 col-12 service-footer">
					
					<!-- dịch vụ -->

					<h3 class="title-footer2"><?php echo get_field('service', 'option'); ?></h3>
					<p class="line-footer"></p>

					<ul class="recruitment">
						<?php if( have_rows('list-service', 'option') ): ?>
				            <?php while( have_rows('list-service', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>
				                
				                <li>
				                	<a href="<?php echo $link['url'];?>">

				                		<?php echo get_sub_field('text'); ?>

				                	</a>
				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
					</ul>

				</div>

				<!-- fan page -->

				<div class="col-lg-2 col-md-6 col-12 service-footer">
					<h3 class="title-footer2"><?php echo get_field('fan-fage', 'option'); ?></h3>
					<p class="line-footer"></p>

					<div class="fb-page" data-href="https://www.facebook.com/ChouLeMakeUp" data-tabs="timeline" data-width="" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ChouLeMakeUp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ChouLeMakeUp">ChouLe Makeup</a></blockquote></div>

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

					<div class="phone-footer">
						<?php if( have_rows('phone-footer', 'option') ): ?>
				            <?php while( have_rows('phone-footer', 'option') ): the_row(); ?>
				                
			                	<a href="tel:+0397779868">

			                		<?php echo get_sub_field('icon'); ?>

			                		<?php echo get_sub_field('text'); ?>

			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </div>
				</div>
			</div>
		</div>
	</div>	


	<ul class="contact-footer">
		<li class="open-book">
			<?php if( have_rows('contact-footer', 'option') ): ?>
	            <?php while( have_rows('contact-footer', 'option') ): the_row(); 
	                $image = get_sub_field('img');
		            $picture = $image['sizes']['thumbnail'];
	                ?>

            		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                	<?php echo get_sub_field('text'); ?>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</li>

		<li>
			<?php if( have_rows('contact-footer2', 'option') ): ?>
	            <?php while( have_rows('contact-footer2', 'option') ): the_row(); 
	                $image = get_sub_field('img');
		            $picture = $image['sizes']['thumbnail'];
	                ?>

	                <a href="tel:+0397 779 868">
	            		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                	<?php echo get_sub_field('text'); ?>
	                </a>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</li>

		<li>
			<?php if( have_rows('contact-footer3', 'option') ): ?>
	            <?php while( have_rows('contact-footer3', 'option') ): the_row(); 
	                $image = get_sub_field('img');
		            $picture = $image['sizes']['thumbnail'];
		            $link = get_sub_field('link');
	                ?>

	                <a href="<?php echo $link;?>">
	            		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                	<?php echo get_sub_field('text'); ?>
	                </a>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</li>
	</ul>

	<div class="book-footer">

		<div class="book-footer2">

			<span class="close-book">
				<img src="<?php bloginfo('template_directory') ?>/images/close.png">
			</span>

	    	<h2>ĐẶT LỊCH MAKEUP</h2>

	    	<p>Giữ chỗ trước, thanh toán sau, không cần cọc</p>

	    	<?php echo do_shortcode( '[contact-form-7 id="95" title="Book Makeup"]' ); ?>

		</div>
	</div>


	<!-- nút liên hệ -->

	<div class="btn-contact">
		<i class="fal fa-comments-alt"></i>

		<p>liên hệ</p>
	</div>

	<!-- list contact footer -->

	<div class="display-contact-footer">
		<ul class="list-contact-footer">
			<li><?php echo get_field('contact-us', 'option'); ?></li>

			<li class="close-btn-contact"><i class="fas fa-times"></i></li>
		</ul>

		<ul class="list-contact-footer2">
			<li>
				<span class="icon-contact-footer"><?php echo get_field('icon-phone', 'option'); ?></span>

				<div class="text-contact-footer">
					<p><?php echo get_field('hotline', 'option'); ?></p>

					<a href="tel: 0397779868">
						<?php echo get_field('number-phone', 'option'); ?>	
					</a>
				</div>
			</li>

			<!-- mail -->

			<li>
				<span class="icon-contact-footer icon-contact-footer2"><?php echo get_field('icon-mail', 'option'); ?></span>

				<div class="text-contact-footer">
					<p><?php echo get_field('email', 'option'); ?></p>

					<a href="mailto:choulemakeup@gmail.com">
						<?php echo get_field('text-email', 'option'); ?>	
					</a>
				</div>
			</li>

			<!-- Messenger -->

			<li>
				<span class="icon-contact-footer icon-contact-footer3"><?php echo get_field('icon-messenger', 'option'); ?></span>

				<div class="text-contact-footer">
					<p><?php echo get_field('messenger', 'option'); ?></p>

					<a href="<?php echo get_field('link-messenger','option'); ?>">
						<?php echo get_field('text-messenger', 'option'); ?>	
					</a>
				</div>
			</li>

			<!-- zalo chat -->

			<li>
				<span class="icon-contact-footer icon-contact-footer4"><?php echo get_field('icon-zalo', 'option'); ?></span>

				<div class="text-contact-footer">
					<p><?php echo get_field('zalo-chat', 'option'); ?></p>

					<a href="<?php echo get_field('link-zalo-chat','option'); ?>">
						<?php echo get_field('text-zalo-chat', 'option'); ?>	
					</a>
				</div>
			</li>

			<!-- map -->

			<li>
				<span class="icon-contact-footer icon-contact-footer5"><?php echo get_field('icon-map', 'option'); ?></span>

				<div class="text-contact-footer">
					<p><?php echo get_field('google-map', 'option'); ?></p>

					<a href="<?php echo get_field('link-map','option'); ?>">
						<?php echo get_field('text-google-map', 'option'); ?>	
					</a>
				</div>
			</li>

		</ul>
	</div>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- plugin facebook -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="IyqV9OdY"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


<script>
  AOS.init();
</script>

</body>
</html>