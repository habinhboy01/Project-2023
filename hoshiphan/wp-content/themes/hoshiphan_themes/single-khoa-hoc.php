<?php

/*
 *Template Name: Course Training
 * Template Post Type: post
 */

 get_header(); ?>

 	<div class="container bg-category">
 		<div class="row bg-single">
	 		<div class="col-lg-8 col-12">
	 			<h1 class="title-single"><?php the_title(); ?></h1>

	 			<div class="content-single"><?php the_content(); ?></div>
	 			
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

				<div class="content-single2">
					<!-- Đăng ký -->

					<h1 class="title-training"><?php echo get_field('title-register', 'option'); ?></h1>

					<div class="bg-form">
						<?php echo do_shortcode( '[contact-form-7 id="118" title="Đăng ký học ngay"]' ); ?>
					</div>

					<!-- Mọi thắc mắc xin vui lòng liên hệ -->

					<h1 class="title-training title-contact-home"><?php echo get_field('any-questions', 'option'); ?></h1>

					<p class="text-contact-home"><?php echo get_field('hotline', 'option'); ?></p>
				</div>
				
	 		</div>


	 		<div class="col-lg-4 col-12">

	 			<h2 class="title-single2">Khóa học</h2>
			
	 			<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 4,
						'category_name' => 'khoa-hoc',
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="row content-single2">
						<div class="col-lg-3 col-md-3 col-3">
							<a class="img-single" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>
						</div>


						<div class="col-lg-9 col-md-9 col-9">
							<h3 class="title-single3">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<p class="date-single">
								<i class="fal fa-clock"></i> <?php echo get_the_date(); ?>
							</p>
						
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>

	 		</div>
	 	</div>
 	</div>


 <?php get_footer(); ?>