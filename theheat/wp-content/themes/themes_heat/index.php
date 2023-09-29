<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<!-- img banner -->
	
	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('img-baner') ): ?>
            <?php while( have_rows('img-baner') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>


	<!-- giới thiệu -->

	<div class="container">
		<div class="bg-intro">
			<h2 class="title-intro"><?php echo get_field('title-intro'); ?></h2>

			<div class="text-intro"><?php echo get_field('text-intro'); ?></div>

			<div class="row bg-intro">
				<div class="col-lg-5 col-12">
					<p class="text-intro2"><?php echo get_field('about-us'); ?></p>

					<div class="text-intro3"><?php echo get_field('description-about-us'); ?></div>

					<p class="text-slogan"><?php echo get_field('slogan-about-us'); ?></p>
				</div>


				<div class="col-lg-7 col-12">
					<?php 
		            $image = get_field('img-about-us');
		            if( !empty( $image ) ): ?>

		                <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		            <?php endif; ?>
				</div>
			</div>
		</div>
	</div>


	<!-- dịch vụ -->

	<div class="bg-service">
		<div class="container">
			<h2 class="title-intro"><?php echo get_field('title-service'); ?></h2>

			<div class="text-service"><?php echo get_field('description-service'); ?></div>

			<div class="row">

				<?php
					$service = get_field('list-service');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 6,
						'cat' => $service,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-6">

						<div class="content-service-home">
							<a class="img-service-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

							<h3 class="title-service-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="text-service-home"><?php the_excerpt(); ?></div>
						</div>

					</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>


			<!-- Đăng ký lịch hẹn -->

			<div class="bg-book">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-book2">
							<h3 class="title-book"><?php echo get_field('title-register'); ?></h3>

							<p class="text-book"><?php echo get_field('description-register'); ?></p>

							<div class="bg-register">
								<?php echo do_shortcode( '[contact-form-7 id="129" title="Đăng ký lịch hẹn"]' ); ?>
							</div>
						</div>
					</div>

					<div class="col-lg-7 col-md-7 col-12">
						<?php 
			            $image = get_field('img-register');
			            if( !empty( $image ) ): ?>

			                <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			            <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Đội Ngũ Bác Sỹ -->

	<div class="bg-team">
		<div class="container">

			<h2 class="title-intro"><?php echo get_field('title-doctors'); ?></h2>

			<p class="text-service"><?php echo get_field('description-doctors'); ?></p>

			<div class="owl-carousel owl-theme carousel_2">

				<?php
					$team = get_field('team-of-doctors');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						// 'posts_per_page' => 8,
						'cat' => $team,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>

					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="item">

							<div class="team-of-doctors">
								<a class="img-doctor" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<h3 class="title-doctor"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<p class="text-doctor"><?php echo get_field('office-doctor'); ?></p>

								<p class="text-doctor2"><?php echo get_field('experience'); ?></p>
							</div>

						</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>


	<!-- tin tức -->

	<div class="bg-news-home">
		<div class="container">

			<h2 class="title-intro"><?php echo get_field('title-news'); ?></h2>

			<p class="text-service"><?php echo get_field('description-news'); ?></p>

			<div class="owl-carousel owl-theme carousel_3">

				<?php
					$news = get_field('list-news');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 6,
						'cat' => $news,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>

					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="item">

							<div class="content-news-home">
								<a class="img-doctor" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<div class="content-news-home2">
									<ul class="date-author">	        
			        					<li><?php echo get_the_date(); ?></li>

			        					<li><?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-news-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

									<div class="text-news-home"><?php the_excerpt();?></div>

									<p class="read-more"><a href="<?php the_permalink(); ?>">READ MORE <i class='fal fa-long-arrow-right'></i></a></p>
								</div>
							</div>

						</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>


	<!-- kiến thức -->

	<div class="bg-knowledge">
		<div class="container">
			<p class="text-intro2"><?php echo get_field('knowledge'); ?></p>

			<ul class="list-knowledge">
				<li class="tab-knowledge active-tab"><?php echo get_field('title-knowledge1'); ?></li>

				<li class="tab-knowledge"><?php echo get_field('title-knowledge2'); ?></li>

				<li class="tab-knowledge"><?php echo get_field('title-knowledge3'); ?></li>

				<li class="tab-knowledge"><?php echo get_field('title-knowledge4'); ?></li>
			</ul>


			<!-- content kiến thức -->

			<!-- y học thể thao -->

			<div class="content-knowledge active-knowledge">
				<div class="owl-carousel owl-theme carousel_3">

					<?php
						$knowledge1 = get_field('list-knowledge1');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $knowledge1,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>

						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

							<div class="item">

								<div class="content-knowledge2">
									<a class="img-knowledge" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>		
									</a>


									<ul class="date-author date-knowledge">	        
			        					<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>

			        					<li><i class="fal fa-user"></i> <?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-knowledge">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>

								</div>

							</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>


			<!-- Nối soi khớp -->

			<div class="content-knowledge">
				<div class="owl-carousel owl-theme carousel_3">

					<?php
						$knowledge2 = get_field('list-knowledge2');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $knowledge2,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>

						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

							<div class="item">

								<div class="content-knowledge2">
									<a class="img-knowledge" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>		
									</a>


									<ul class="date-author date-knowledge">	        
			        					<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>

			        					<li><i class="fal fa-user"></i> <?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-knowledge">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>

								</div>

							</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>

			<!-- Phục hồi chức năng -->

			<div class="content-knowledge">
				<div class="owl-carousel owl-theme carousel_3">

					<?php
						$knowledge3 = get_field('list-knowledge3');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $knowledge3,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>

						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

							<div class="item">

								<div class="content-knowledge2">
									<a class="img-knowledge" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>		
									</a>


									<ul class="date-author date-knowledge">	        
			        					<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>

			        					<li><i class="fal fa-user"></i> <?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-knowledge">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>

								</div>

							</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>

			<!-- Chấn thương chỉnh hình khác -->

			<div class="content-knowledge">
				<div class="owl-carousel owl-theme carousel_3">

					<?php
						$knowledge4 = get_field('list-knowledge4');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 6,
							'cat' => $knowledge4,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>

						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

							<div class="item">

								<div class="content-knowledge2">
									<a class="img-knowledge" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>		
									</a>


									<ul class="date-author date-knowledge">	        
			        					<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>

			        					<li><i class="fal fa-user"></i> <?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-knowledge">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>

								</div>

							</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>


	<!-- trải nghiệm khách hàng -->

	<div class="bg-news-home">
		<div class="container">

			<h2 class="title-intro"><?php echo get_field('title-customer-reviews'); ?></h2>

			<p class="text-service"><?php echo get_field('description-customer-reviews'); ?></p>

			<div class="owl-carousel owl-theme carousel_4">
				<?php if( have_rows('list-customer-reviews') ): ?>
		            <?php while( have_rows('list-customer-reviews') ): the_row(); 
		                $image = get_sub_field('avatar');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">

		                	<div class="content-customer">

		                		<img id="icon-img-customer" src="<?php bloginfo('template_directory') ?>/images/icon4.png">
		                		
		                		<p class="text-customer"><?php the_sub_field('content'); ?></p>

		                		<ul class="avatar-customer">
		                			<li>
		                				<img id="img-customer" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                			</li>

		                			<li class="name-customer"><?php echo get_sub_field('name-customer'); ?></li>
		                		</ul>

		                		<img id="icon-img-customer2" src="<?php bloginfo('template_directory') ?>/images/icon3.png">

		                	</div>
		                	
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>

		</div>

	</div>


	<!-- Đơn Vị - Tổ Chức Mà Chúng Tôi Liên Kết -->

	<div class="bg-partner">
		<div class="container">

			<h2 class="title-intro"><?php echo get_field('title-partner'); ?></h2>

			<div class="owl-carousel owl-theme carousel_5">
				<?php if( have_rows('list-partner') ): ?>
		            <?php while( have_rows('list-partner') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">

							<img class="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>
		</div>
	</div>

<?php get_footer(); ?>