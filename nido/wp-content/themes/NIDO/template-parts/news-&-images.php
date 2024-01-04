<?php 

/**template name: Tin tức và hình ảnh */

get_header(); ?>

	<div class="bg-about bg-news">

		<div class="bg-news-2">
			<div class="container">
				<h1 class="title-question title-event">
					<?php echo get_field('title-event'); ?>
					
					<img src="<?php bloginfo('template_directory')?>/images/line.png">
				</h1>

				<div class="row">

					<?php
						$event = get_field('news-event');

						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => $event,
							'order' => 'date',			
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            <div class="col-12">
			                <div class="event">
			                    <div class="event-img">
			                        <?php the_post_thumbnail() ?>
			                    </div>
			                    <div class="event-info">
			                        <div class="event-name">
			                            <?php

			                            $post_id = get_the_ID();

			                            $categories = get_the_category($post_id);

			                            if ($categories) {
			                                
			                                    echo "<a class='cate' href='" . esc_url(get_category_link($categories[0]->term_id)) . "'>" . esc_html($categories[0]->name) . "</a>";
			                            }
			                            ?>
			                            <br>

			                            <div class="event-title-group">
			                                <a href="<?php the_permalink()?>"><?php the_title() ?></a>
			                                <div class="post-time">
			                                    <i class="fa-regular fa-clock-three"></i>
			                                    <?php echo get_the_date('d M, Y')?>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>

					<?php endwhile; wp_reset_postdata(); ?>

		        </div>
			</div>
		</div>

	</div>

	<!-- Khoảnh khắc tại trường & ngoại khóa -->

	<div class="bg-contact bg-moment">
		<h2 class="title-question"><?php echo get_field('title-images'); ?></h2>

		<div class="list-img-moment">
			<?php if( have_rows('list-img') ): ?>
	            <?php while( have_rows('list-img') ): the_row(); 
			        $image = get_sub_field('img');
			        $picture = $image['sizes']['thumbnail']; ?>

			        <img class="img-moment" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			    <?php endwhile; ?>
        	<?php endif; ?>
		</div>

		<?php $image = get_field('img-moment');

	    if( !empty( $image ) ): ?>

	        <img class="img-moment-2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	    <?php endif; ?>    
	</div>


	<!-- bài đọc -->

	<div class="reading container">
	    <div class="reading-text position-relative">
	        <?php echo get_field('title-reading')?>
	        <div class="brushh">
				<img src="<?php bloginfo('template_directory')?>/images/line2.png">
	        </div>
	    </div>
	</div>

	<!-- ------------------------------- -->

	<div class="mr-bottom">
		<div class="container">
			<?php
			$main_post = get_field('reading-new');
			if( $main_post ): ?>
				<?php foreach( $main_post as $post ): 
				// Setup this post for WP functions (variable must be named $post).
				setup_postdata($post); ?>
			 
					
					<a href="<?php the_permalink(); ?>">

						<div class="content-reading">

							<?php the_post_thumbnail('full', ['class' => 'img-reading']); ?>

							<div class="content-reading-2">
								<span class="category-reading">
									<?php
									foreach((get_the_category()) as $category) { 
										echo $category->cat_name . ' '; 
									} 
									?>
								</span>

								<h3 class="title-reading"><?php the_title(); ?></h3>

								<p class="date-post"><?php echo get_the_date(); ?></p>
							</div>

						</div>
					</a>

				<?php endforeach; ?>
				<?php 
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
			<?php endif; ?>

			<!-- ------------------------------- -->

			<div class="row">
				<?php
					$reading = get_field('list-reading');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => -1,
						'cat' => $reading,
						'order' => 'date',			
					);

	            $query = new WP_Query($args);

	            if ($query->have_posts()) :
	                while ($query->have_posts()) : $query->the_post(); ?>

	            <div class="col-md-6">
	                <div class="related-post">
	                    <div class="post-img">
	                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
	                    </div>
	                    <div class="p-detail">
	                        <?php

	                    $post_id = get_the_ID();

	                    $categories = get_the_category($post_id);

	                    if ($categories) {
	                        
	                            echo "<a class='cate' href='" . esc_url(get_category_link($categories[0]->term_id)) . "'>" . esc_html($categories[0]->name) . "</a>";
	                    }
	                    ?>
	                        <div class="post-name">
	                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
	                        </div>
	                        <div class="post-time time2">
	                            <?php echo get_the_date('M d')?>, 10 mins read
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <?php endwhile;
	                wp_reset_postdata();  
	            endif;
	            ?>

	        </div>

		</div>

   </div>


<?php get_footer(); ?>