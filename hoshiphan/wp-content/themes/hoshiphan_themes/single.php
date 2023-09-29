<?php get_header(); ?>

 	<div class="container bg-category">
 		<div class="row bg-single">
	 		<div class="col-lg-8 col-12">
	 			<h1 class="title-single"><?php the_title(); ?></h1>

	 			<div class="content-single"><?php the_content(); ?></div>
				
	 		</div>


	 		<div class="col-lg-4 col-12">

	 			<h2 class="title-single2">Tin tức</h2>
			
	 			<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 4,
						'category_name' => 'tin-tuc',
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