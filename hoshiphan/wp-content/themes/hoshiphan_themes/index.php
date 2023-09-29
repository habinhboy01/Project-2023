<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-banner') ): ?>
            <?php while( have_rows('slider-banner') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
				</div>

       	    <?php endwhile; ?>
		<?php endif; ?>
	</div>

	<!-- ĐÀO TẠO ĐẦU BẾP NHẬT -->

	<div class="container bg-training">
		<h1 class="title-training"><?php echo get_field('chef-training'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-course') ): ?>
	            <?php while( have_rows('list-course') ): the_row();
	            	$image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	                $link = get_sub_field('link');
	                ?>

	                <div class="col-lg-6 col-md-6 col-12">
	                	<div class="content-course">
		                	<a href="<?php echo $link;?>">
							   <img class="img-course" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
							</a>

							<h2 class="title-course">
			                	<a href="<?php echo $link;?>"><?php echo get_sub_field('title'); ?></a>
			                </h2>

							<p class="text-course"><?php the_sub_field('description'); ?></p>
						</div>
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Tiệc trình diễn HoshiPhan -->

	<div class="container bg-training">
		<h1 class="title-training"><?php echo get_field('performance-party'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-img-performance') ): ?>
	            <?php while( have_rows('list-img-performance') ): the_row();
	            	$image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-4 col-md-6 col-12">
						<img class="img-performance" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- slider modal trình diễn -->

	<div id="modal" class="bg-modal-performance">
		<span id="close-modal" class="close-modal-performance"><i class="fal fa-times"></i></span>

		<div id="modal2" class="owl-carousel owl-theme carousel_2">
			<?php if( have_rows('list-img-performance') ): ?>
	            <?php while( have_rows('list-img-performance') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="item">
						<img id="modal-performance" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- list video -->

	<div class="container">
		<div class="content-video"><?php the_field('video'); ?></div>

		<div class="list-video">
			<?php if( have_rows('video-2') ): ?>
	            <?php while( have_rows('video-2') ): the_row(); ?>

	            	<?php the_sub_field('video'); ?>

	          	<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<p class="text-video"><?php the_field('description'); ?></p>

		<div class="avatar">
			<?php 
            $image = get_field('avatar');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <p><?php echo get_field('descripton-avatar'); ?></p>
		</div>

		<ul class="list-social-home">
			<?php if( have_rows('list-social') ): ?>
	            <?php while( have_rows('list-social') ): the_row(); 
	                $link = get_sub_field('link');
	                ?>

	                <li>
	                	<p class="icon-social">
			                <a href="<?php echo $link;?>">
							   <?php echo get_sub_field('icon'); ?>
							</a>
						</p>

						<a class="text-social-home" href="<?php echo $link;?>">
							<?php echo get_sub_field('text'); ?>
						</a>
					</li>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>

	<!-- Đăng ký học ngay -->

	<div class="container bg-training">
		<h1 class="title-training"><?php echo get_field('title-register'); ?></h1>

		<div class="bg-form">
			<?php echo do_shortcode( '[contact-form-7 id="118" title="Đăng ký học ngay"]' ); ?>
		</div>

		<!-- Mọi thắc mắc xin vui lòng liên hệ -->

		<h1 class="title-training title-contact-home"><?php echo get_field('any-questions'); ?></h1>

		<p class="text-contact-home"><?php echo get_field('hotline'); ?></p>
	</div>



<?php get_footer(); ?>