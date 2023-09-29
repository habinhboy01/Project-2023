<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="container mr-top">
		<div class="row">
			<div class="col-lg-6 col-12">
				<?php
				$main_post = get_field('main-post');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 
						<div class="images-container">
							<a class="img-news-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<h1 class="title-details">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>

							<a class="read-more-home" href="<?php the_permalink(); ?>">
								<p>read more</p>
							</a>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			
			<div class="col-lg-6 col-12">
				<?php
				$sub_post = get_field('sub-post');
				if( $sub_post ): ?>
					<?php foreach( $sub_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 
                    <div class="secondary-post-2 display-post">

                    	<div class="container-secondary">

                    		<div class="images-container2">
                    			<a class="img-news-home2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
                    		</div>

                    		<h1 class="title-details2">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>

							<a class="read-more-home2" href="<?php the_permalink(); ?>">
								<p>read more</p>
							</a>
                    	</div>

                    	<div class="categories-container">
                    		<?php the_category(); ?>
                    	</div>
                    </div>


                    <!-- ------------------------ -->

                    <div class="images-container display-post2">
						<a class="img-news-home" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<h1 class="title-details">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>
					</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	


	<!-- category 1 -->

	<div class="container">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post'); ?></h1>
		</div>

		<!-- -------- -->

		<div class="row">
			<?php
				$category = get_field('content-category-1');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $category,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-12">

	                <div class="images-container mr-top2">
						<a class="img-news-home" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<h1 class="title-details">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>

						<div class="categories-container2">
	                		<?php the_category(); ?>
	                	</div>
					</div>

				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 2 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-2'); ?></h1>
		</div>

		<!-- ----------- -->

		<div class="row">
			<?php
				$category2 = get_field('content-category-2');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 8,
					'cat' => $category2,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="content-post-home2">
						<a href="<?php the_permalink(); ?>">
							<div class="content-post-home">					
								<?php the_post_thumbnail('full'); ?>

			                	<?php the_category(); ?>
							</div>
						</a>

						<!-- --------------- -->
						
						<h1 class="title-details3">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home3" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 3 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-3'); ?></h1>
		</div>

		<!-- -------- -->

		<div class="row">
			<?php
				$category3 = get_field('content-category-3');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $category3,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-12">

	                <div class="images-container mr-top2">
						<a class="img-news-home" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<h1 class="title-details">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>

						<div class="categories-container2">
	                		<?php the_category(); ?>
	                	</div>
					</div>

				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 4 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-4'); ?></h1>
		</div>

		<!-- ----------- -->

		<div class="row">
			<?php
				$category4 = get_field('content-category-4');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 8,
					'cat' => $category4,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="content-post-home2">
						<a href="<?php the_permalink(); ?>">
							<div class="content-post-home">					
								<?php the_post_thumbnail('full'); ?>

			                	<?php the_category(); ?>
							</div>
						</a>

						<!-- --------------- -->
						
						<h1 class="title-details3">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home3" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 5 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-5'); ?></h1>
		</div>

		<!-- -------- -->

		<div class="row">
			<?php
				$category5 = get_field('content-category-5');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $category5,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-12">

            		<?php if( get_field('video-news') ): ?>

					    <div class="video-news">
							<?php the_field('video-news') ?>
						</div>

					<?php endif; ?>

					<h1 class="title-details3">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<a class="read-more-home3" href="<?php the_permalink(); ?>">
						<p>read more</p>
					</a>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 6 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-6'); ?></h1>
		</div>

		<!-- -------- -->

		<div class="row">
			<?php
				$category6 = get_field('content-category-6');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $category6,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-12">

	                <div class="images-container mr-top2">
						<a class="img-news-home" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<h1 class="title-details">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>

						<div class="categories-container2">
	                		<?php the_category(); ?>
	                	</div>
					</div>

				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 7 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-7'); ?></h1>
		</div>

		<!-- ----------- -->

		<div class="row">
			<?php
				$category7 = get_field('content-category-7');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 8,
					'cat' => $category7,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="content-post-home2">
						<a href="<?php the_permalink(); ?>">
							<div class="content-post-home">					
								<?php the_post_thumbnail('full'); ?>

			                	<?php the_category(); ?>
							</div>
						</a>

						<!-- --------------- -->
						
						<h1 class="title-details3">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home3" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- category 8 -->

	<div class="container mr-top3">
		<div class="section-header">
			<div class="divider"></div>

			<h1 class="text"><?php echo get_field('title-post-8'); ?></h1>
		</div>

		<!-- -------- -->

		<div class="row">
			<?php
				$category8 = get_field('content-category-8');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $category8,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-12">

	                <div class="images-container mr-top2">
						<a class="img-news-home" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<h1 class="title-details">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<a class="read-more-home" href="<?php the_permalink(); ?>">
							<p>read more</p>
						</a>

						<div class="categories-container2">
	                		<?php the_category(); ?>
	                	</div>
					</div>

				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>


<?php get_footer(); ?>