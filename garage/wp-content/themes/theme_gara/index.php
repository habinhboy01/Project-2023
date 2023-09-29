<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<!-- slider -->

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider') ): ?>
            <?php while( have_rows('slider') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- Về Gara Môi Trường Xanh -->

	<div class="container info-home">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="row">
					<?php if( have_rows('list-service') ): ?>
			            <?php while( have_rows('list-service') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                $link = get_sub_field('link');
			                ?>

			                <div class="col-lg-4 col-md-4 col-6">
			                	<a class="plain" href="<?php echo $link['url'];?>">
			                		<div class="service-home">
				                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                		<p><?php echo get_sub_field('text'); ?></p>
				                	</div>
			                	</a>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-6 col-12">
				<h2 class="title-info"><?php echo get_field('title-info'); ?></h2>

				<div class="content-info"><?php the_field('content-info'); ?></div>

				<?php if( have_rows('detail-info') ): ?>
		            <?php while( have_rows('detail-info') ): the_row(); 
		                $link = get_sub_field('link');
		                ?>

		                <a class="detail-info" href="<?php echo $link['url'];?>">
							<?php echo get_sub_field('text'); ?>
		                </a>

		          	<?php endwhile; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- TIÊU CHÍ HOẠT ĐỘNG -->

	<div class="activities-criteria">
		<div class="container">
			<h2 class="title-info title-criteria"><?php echo get_field('activities-criteria'); ?></h2>

			<p class="text-criteria"><?php echo get_field('text-criteria'); ?></p>

			<div class="row">
				<?php if( have_rows('list-criteria') ): ?>
		            <?php while( have_rows('list-criteria') ): the_row(); 
		                $image = get_sub_field('img');
		                $image2 = get_sub_field('icon');
		                $picture = $image['sizes']['thumbnail']; 
		                $picture2 = $image2['sizes']['thumbnail'];
		                ?>

		                <div class="col-lg-4 col-md-4 col-12">
		                	<div class="content-criteria">
		                		<img class="img-criteria" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                		<img class="img-criteria2" src="<?php echo $picture2;?>" alt="<?php echo $image2['alt'];?>">

		                		<div class="content-criteria2">
			                		<h3><?php echo get_sub_field('title'); ?></h3>

			                		<p><?php the_sub_field('content'); ?></p>
			                	</div>
		                	</div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Bạn hỏng xe dọc đường? -->

	<div class="support-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<h3 class="title-support"><?php echo get_field('title-support'); ?></h3>

					<p class="text-support"><?php echo get_field('text-support'); ?></p>
				</div>

				<div class="col-lg-5 col-12">
					<ul class="list-support">
						<li>
							<?php if( have_rows('zalo-support') ): ?>
					            <?php while( have_rows('zalo-support') ): the_row(); 
					                $image = get_sub_field('icon');
					                $picture = $image['sizes']['thumbnail'];
					                $link = get_sub_field('link');
					                ?>

					                	<a href="<?php echo $link;?>">
						                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

						                	<p><?php echo get_sub_field('text'); ?></p>
					                	</a>

					            <?php endwhile; ?>
			    			<?php endif; ?>
						</li>

						<li>
							<?php if( have_rows('messenger-support') ): ?>
					            <?php while( have_rows('messenger-support') ): the_row(); 
					                $image = get_sub_field('icon');
					                $picture = $image['sizes']['thumbnail'];
					                $link = get_sub_field('link');
					                ?>

					                	<a href="<?php echo $link;?>">
						                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

						                	<p><?php echo get_sub_field('text'); ?></p>
					                	</a>

					            <?php endwhile; ?>
			    			<?php endif; ?>
						</li>

						<li>
							<?php if( have_rows('phone-support') ): ?>
					            <?php while( have_rows('phone-support') ): the_row(); 
					                $image = get_sub_field('icon');
					                $picture = $image['sizes']['thumbnail'];
					                ?>

					                	<a href="tel:+0793.69.79.79">
						                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

						                	<p><?php echo get_sub_field('text'); ?></p>
					                	</a>

					            <?php endwhile; ?>
			    			<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<ul>
					<?php if( have_rows('quality-support') ): ?>
			            <?php while( have_rows('quality-support') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

			                <div class="quality-support">
			                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                	<h3><?php echo get_sub_field('title'); ?></h3>

			                	<p><?php echo get_sub_field('content'); ?></p>
			                </div>

			            <?php endwhile; ?>
	    			<?php endif; ?>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-4 col-12">
				<?php 
	            $image = get_field('img-support');
	            if( !empty( $image ) ): ?>
	                <img class="img-support" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            <?php endif; ?>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<ul>
					<?php if( have_rows('quality-support2') ): ?>
			            <?php while( have_rows('quality-support2') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

			                <div class="quality-support">
			                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                	<h3><?php echo get_sub_field('title'); ?></h3>

			                	<p><?php echo get_sub_field('content'); ?></p>
			                </div>

			            <?php endwhile; ?>
	    			<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- TIN TỨC & CHIA SẺ -->

	<div class="activities-criteria">
		<div class="container">
			<h2 class="title-info title-criteria"><?php echo get_field('title-news'); ?></h2>

			<div class="owl-carousel owl-theme carousel_2">
				<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 6,
						'order' => 'date',
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="item">
						<div class="news-home">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
								
								<h5><?php the_title(); ?></h5>
							</a>
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>

			<?php if( have_rows('detail-news') ): ?>
	            <?php while( have_rows('detail-news') ): the_row(); 
	                $link = get_sub_field('link');
	                ?>

	                <a class="detail-info" href="<?php echo $link;?>">
						<?php echo get_sub_field('text'); ?>
	                </a>

	          	<?php endwhile; ?>
		    <?php endif; ?>
		</div>
	</div>

	<!-- Khách Hàng Tin Tưởng -->

	<div class="bg-customer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<h3 class="title-support"><?php echo get_field('customer'); ?></h3>

					<p class="text-support"><?php the_field('content-customer'); ?></p>

					<ul class="statistical">
						<?php if( have_rows('statistical') ): ?>
				            <?php while( have_rows('statistical') ): the_row(); ?>

			                	<li>
				                	<h3><?php echo get_sub_field('number'); ?></h3>

				                	<p><?php echo get_sub_field('text'); ?></p>
			                	</li>

				            <?php endwhile; ?>
		    			<?php endif; ?>
					</ul>
				</div>

				<div class="col-lg-5 col-12">
					<?php 
		            $image = get_field('img-customer');
		            if( !empty( $image ) ): ?>
		                <img class="img-customer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>