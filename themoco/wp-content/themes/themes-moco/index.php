<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<?php
	$featured_posts = get_field('post-intro');
	if( $featured_posts ): ?>
	    <div class="bg-look">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
			
				<?php $color2 = get_field('color_title', $term); ?>
				<?php $color3 = get_field('border_color', $term); ?>

				<div class="bg-read">

					<a class="img-read" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

					<div class="content-read">
						<div class="content-read2">
							<div class="text-read3" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>">
								<?php
								foreach((get_the_category()) as $category) { 
									echo $category->cat_name . ' '; 
								} 
								?>
							</div>

							<h2 class="title-read">
								<a style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<div class="text-read" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
						</div>
					</div>
				</div>

		    <?php endforeach; ?>
	    </div>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>


	<!-- read -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-12">
				<?php
					$read = get_field('news-read');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 6,
						'cat' => $read,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	        		<div class="row bg-read2">
	        			<div class="col-lg-4 col-md-4 col-5">
							<a class="img-read2" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
	        			</div>

	        			<div class="col-lg-8 col-md-8 col-7">
	        				<div class="description-news">
	        					<a href="<?php the_permalink(); ?>">
	        						<p class="date-news"><?php echo get_the_date(); ?></p>

	        						<h3 class="title-read2"><?php the_title(); ?></h3>

	        						<div class="text-read2"><?php the_excerpt(); ?></div>
	        					</a>
	        				</div>
	        			</div>
	        		</div>
	        	<?php endwhile; wp_reset_postdata(); ?>
			</div>

			 <div class="col-lg-6 col-12 bg-read3">
				<?php
				$featured_posts2 = get_field('banner-news-read');
				if( $featured_posts2 ): ?>
					<?php foreach( $featured_posts2 as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 
				 	<?php $color2 = get_field('color_title', $term); ?>
					<?php $color3 = get_field('border_color', $term); ?>

					<div class="bg-read">

						<a class="img-read" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>		
						</a>

						<a href="<?php the_permalink(); ?>">
							<div class="content-read">
								<div class="content-read2 content-look">				
									<h2 class="title-read title-look" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h2>

									<div class="text-read text-look" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
								</div>
							</div>
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


	<!-- --------------------------- -->

	<?php
	$featured_posts = get_field('featured-posts');
	if( $featured_posts ): ?>
	    <div class="bg-look">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
			
				<?php $color2 = get_field('color_title', $term); ?>
				<?php $color3 = get_field('border_color', $term); ?>

				<div class="bg-read">

					<a class="img-read" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

					<a href="<?php the_permalink(); ?>">
						<div class="content-read">
							<div class="content-read2 content-look">				
								<h2 class="title-read title-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h2>

								<div class="text-read text-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</a>
				</div>

		    <?php endforeach; ?>
	    </div>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>

	<!-- look -->

	<?php
		$look = get_field('news-look');

		$args = array(	
			'post_status' => 'publish',
			'post_type' => 'post',
			'posts_per_page' => 1,
			'cat' => $look,
			'order' => 'date',			
		);
	?>
	<?php $getposts = new WP_query($args); ?>
	<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

		<div class="bg-look">

			<div class="bg-read">

				<a class="img-read" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>		
				</a>

				<a href="<?php the_permalink(); ?>">
					<div class="content-read">
						<div class="content-read2 content-look">				
							<h2 class="title-read title-look"><?php the_title(); ?></h2>

							<div class="text-read text-look"><?php the_excerpt(); ?></div>
						</div>
					</div>
				</a>
			</div>

			<div class="container-fluid">
	            <?php
	                $categories = get_the_category($post->ID);
	                if ($categories) 
	                {
	                    $category_ids = array();
	                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	             
	                    $args=array(
	                    'category__in' => $category_ids,
	                    'post__not_in' => array($post->ID),
	                    'showposts'=>6, // Số bài viết bạn muốn hiển thị.
	                    'caller_get_posts'=>1
	                    );
	                    $my_query = new wp_query($args);
	                    if( $my_query->have_posts() ) 
	                    {
	                        echo '';
	                        while ($my_query->have_posts())
	                        {
	                            $my_query->the_post();
	                            ?>
	                            
                            		<div class="row bg-look2">
                            			<div class="col-lg-4 col-md-4 col-5">
		    								<a class="img-read2" href="<?php the_permalink(); ?>">
		    									<?php the_post_thumbnail('full'); ?>
		    								</a>
                            			</div>

                            			<div class="col-lg-8 col-md-8 col-7">
                            				<div class="description-news description-look">
                            					<a href="<?php the_permalink(); ?>">
                            						<p class="date-news"><?php echo get_the_date(); ?></p>

                            						<h3 class="title-read2"><?php the_title(); ?></h3>

                            						<div class="text-read2"><?php the_excerpt(); ?></div>
                            					</a>
                            				</div>
                            			</div>
                            		</div>
   						
	                            <?php
	                        }
	                        echo '';
	                    }
	                }
	            ?>
			</div>

		</div>
	<?php endwhile; wp_reset_postdata(); ?>

	<!-- MYTH ITEMS -->

	<?php
	$featured_posts = get_field('post-intro2');
	if( $featured_posts ): ?>
	    <div class="bg-look">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
			
				<?php $color2 = get_field('color_title', $term); ?>
				<?php $color3 = get_field('border_color', $term); ?>

				<div class="bg-read">

					<a class="img-read" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

					<div class="content-read">
						<div class="content-read2">
							<div class="text-read3" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>">
								<?php
								foreach((get_the_category()) as $category) { 
									echo $category->cat_name . ' '; 
								} 
								?>
							</div>

							<h2 class="title-read">
								<a style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<div class="text-read" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
						</div>
					</div>
				</div>

		    <?php endforeach; ?>
	    </div>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>

	<div class="container-fluid">
		<div class="row">
			<?php
				$mythItems = get_field('myth-items');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $mythItems,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            <div class="col-lg-6 col-12">
            		<div class="row bg-read2">
            			<div class="col-lg-4 col-md-4 col-5">
							<a class="img-read2" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
            			</div>

            			<div class="col-lg-8 col-md-8 col-7">
            				<div class="description-news">
            					<a href="<?php the_permalink(); ?>">
            						<p class="date-news"><?php echo get_the_date(); ?></p>

            						<h3 class="title-read2"><?php the_title(); ?></h3>

            						<div class="text-read2"><?php the_excerpt(); ?></div>
            					</a>
            				</div>
            			</div>
            		</div>
            	</div>
			
			<?php endwhile; wp_reset_postdata(); ?>					
		</div>
	</div>



	<!-- --------------------------- -->

	<?php
	$featured_posts = get_field('featured-posts2');
	if( $featured_posts ): ?>
	    <div class="bg-look">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
			
				<?php $color2 = get_field('color_title', $term); ?>
				<?php $color3 = get_field('border_color', $term); ?>

				<div class="bg-read">

					<a class="img-read" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

					<a href="<?php the_permalink(); ?>">
						<div class="content-read">
							<div class="content-read2 content-look">				
								<h2 class="title-read title-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h2>

								<div class="text-read text-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</a>
				</div>

		    <?php endforeach; ?>
	    </div>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>

	<!-- MYTH SOCIETY -->

	<div class="bg-myth-items">
		<?php
		$featured_posts = get_field('post-intro3');
		if( $featured_posts ): ?>
			<div class="bg-look">
				<?php foreach( $featured_posts as $post ): 

					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>

					<?php $color2 = get_field('color_title', $term); ?>
					<?php $color3 = get_field('border_color', $term); ?>

					<div class="bg-read">

						<a class="img-read" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>		
						</a>

						<div class="content-read">
							<div class="content-read2">
								<div class="text-read3" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>">
									<?php
									foreach((get_the_category()) as $category) { 
										echo $category->cat_name . ' '; 
									} 
									?>
								</div>

								<h2 class="title-read">
									<a style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>

								<div class="text-read" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
			<?php 
			// Reset the global post object so that the rest of the page works correctly.
			wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<!-- -------------------------- -->

	<div class="bg-look">

		<div class="bg-read">

			<?php
			$featured_posts = get_field('featured-posts3');
			if( $featured_posts ): ?>
			    <div class="bg-look">
				    <?php foreach( $featured_posts as $post ): 

				        // Setup this post for WP functions (variable must be named $post).
				        setup_postdata($post); ?>
					
						<?php $color2 = get_field('color_title', $term); ?>
						<?php $color3 = get_field('border_color', $term); ?>

						<div class="bg-read">

							<a class="img-read" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

							<a href="<?php the_permalink(); ?>">
								<div class="content-read">
									<div class="content-read2 content-look">				
										<h2 class="title-read title-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h2>

										<div class="text-read text-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
									</div>
								</div>
							</a>
						</div>

				    <?php endforeach; ?>
			    </div>
			    <?php 
			    // Reset the global post object so that the rest of the page works correctly.
			    wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>

		<div class="container-fluid">
				<?php
				$mythSociety = get_field('myth-society');

				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => $mythSociety,
					'order' => 'date',			
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

               	<div class="row bg-look2">
        			<div class="col-lg-4 col-md-4 col-5">
						<a class="img-read2" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
        			</div>

        			<div class="col-lg-8 col-md-8 col-7">
        				<div class="description-news description-look">
        					<a href="<?php the_permalink(); ?>">
        						<p class="date-news"><?php echo get_the_date(); ?></p>

        						<h3 class="title-read2"><?php the_title(); ?></h3>

        						<div class="text-read2"><?php the_excerpt(); ?></div>
        					</a>
        				</div>
        			</div>
        		</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

<!-- 	----------- -->

	<?php
	$featured_posts = get_field('featured-posts4');
	if( $featured_posts ): ?>
	    <div class="bg-look">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
			
				<?php $color2 = get_field('color_title', $term); ?>
				<?php $color3 = get_field('border_color', $term); ?>

				<div class="bg-read">

					<a class="img-read" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

					<a href="<?php the_permalink(); ?>">
						<div class="content-read">
							<div class="content-read2 content-look">				
								<h2 class="title-read title-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h2>

								<div class="text-read text-featured" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</a>
				</div>

		    <?php endforeach; ?>
	    </div>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>

<?php get_footer(); ?>