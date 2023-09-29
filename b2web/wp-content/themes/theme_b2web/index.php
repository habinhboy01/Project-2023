<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<div class="bg-body">
		<div class="container">
			<div class="img-intro">
				<?php 
	            $image = get_field('img-intro');
	            if( !empty( $image ) ): ?>
	                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            <?php endif; ?>
	        </div>
		</div>

		<!-- WE ARE AN EXPERIENCED EVENT AGENCY -->

		<div class="experienced-event">
			<img class="img-event2" src="<?php bloginfo('template_directory') ?>/images/img4-1.png" alt="">

			<?php if( have_rows('experienced-event') ): ?>
	            <?php while( have_rows('experienced-event') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail'];
	                ?>

	                <img class="img-event" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">   

	                <div class="content-event">
	                	<h1><?php echo get_sub_field('title'); ?></h1>

	                	<p><?php the_sub_field('text'); ?></p>
	                </div>

	            <?php endwhile; ?>
        	<?php endif; ?>

        	<img class="img-event3" src="<?php bloginfo('template_directory') ?>/images/img4-2.png" alt="">
		</div>

		<!-- Questions about us -->

		<!-- questions-1 -->

		<?php if( have_rows('questions-1') ): ?>
            <?php while( have_rows('questions-1') ): the_row(); ?>

                <div class="bg-questions questions-1">
                	<div class="container">
                		<div class="row list-questions">
                			<div class="col-lg-2 col-2">
		                		<p class="text-questions" data-aos="fade-up" data-aos-duration="1000"><?php echo get_sub_field('number'); ?></p>
		                	</div>

		                	<div class="col-lg-9 col-8">
		                		<h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_sub_field('title'); ?></h2>
		                	</div>

		                	<div class="col-lg-1 col-2">
			                	<span class="arrow-questions" data-aos="fade-up" data-aos-duration="1000">
			                		<img class="a-1" src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
			                	</span>
			                </div>
		                </div>
	                </div>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>

    	<div class="content-question1">
	    	<div class="container">
		        <div class="parent-question">
		        	<?php if( have_rows('content-question1') ): ?>
			            <?php while( have_rows('content-question1') ): the_row();
			            	$image = get_sub_field('img');
			            	$picture = $image['sizes']['thumbnail']
			                ?>

			                <div>
			                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                	<p><?php echo get_sub_field('text'); ?></p>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
		        </div>
		    </div>
		</div>

    	<!-- questions-2 -->

    	<?php if( have_rows('questions-2') ): ?>
            <?php while( have_rows('questions-2') ): the_row();
            	$image = get_sub_field('img');
            	$picture = $image['sizes']['thumbnail']
                ?>

                <div class="bg-questions questions-2">
                	<div class="container">
                		<div class="row list-questions">
                			<div class="col-lg-2 col-2">
		                		<p class="text-questions" data-aos="fade-down" data-aos-duration="1000"><?php echo get_sub_field('number'); ?></p>
		                	</div>

		                	<div class="col-lg-9 col-8">
		                		<h2 data-aos="fade-up" data-aos-duration="1000"><?php echo get_sub_field('title'); ?></h2>
		                	</div>

		                	<div class="col-lg-1 col-2">
			                	<span class="arrow-questions2" data-aos="fade-down" data-aos-duration="1000">
			                		<img class="a-2" src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
			                	</span>
			                </div>
		                </div>
	                </div>
                </div>

                <div class="img-questions2">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>

    	<!-- questions-3 -->

        <div class="bg-questions questions-3">
        	<div class="container">
        		<div class="row list-questions">
        			<div class="col-lg-2 col-2">
                		<p class="text-questions" data-aos="fade-up" data-aos-duration="1000"><?php echo get_field('number-3'); ?></p>
                	</div>

                	<div class="col-lg-9 col-8">
                		<h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_field('title-number-3'); ?></h2>
                	</div>

                	<div class="col-lg-1 col-2">
	                	<span class="arrow-questions3" data-aos="fade-up" data-aos-duration="1000">
	                		<img class="a-3" src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
	                	</span>
	                </div>
                </div>
            </div>
        </div>

        <div class="display-questions">
            <div class="list-img-questions3">
				<?php
					$project = get_field('content-question3');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 8,
						'cat' => $project,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>		
					</a>

				<?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>


    	<!-- questions-4 -->

        <div class="bg-questions questions-4">
        	<div class="container">
        		<div class="row list-questions">
        			<div class="col-lg-2 col-2">
                		<p class="text-questions" data-aos="fade-down" data-aos-duration="1000"><?php echo get_field('number-4'); ?></p>
                	</div>

                	<div class="col-lg-9 col-8">
                		<h2 data-aos="fade-up" data-aos-duration="1000"><?php echo get_field('title-number-4'); ?></h2>
                	</div>

                	<div class="col-lg-1 col-2">
	                	<span class="arrow-questions4" data-aos="fade-down" data-aos-duration="1000">
	                		<img class="a-4" src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
	                	</span>
	                </div>
                </div>
            </div>
        </div>

    	
        <div class="content-questions4">
		    <?php if( have_rows('content-questions4') ): ?>
	            <?php while( have_rows('content-questions4') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                $link = get_sub_field('link');
	                ?>

	                <img class="img-questions3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                <div class="title-questions4">
	                	<div class="container">
		                	<h3><?php the_sub_field('content'); ?></h3>

		                	<a href="<?php echo $link['url'];?>">
		                		<?php echo get_sub_field('text'); ?>	
		                	</a>
		                </div>
	                </div>

	            <?php endwhile; ?>
        	<?php endif; ?>
        </div>
	</div>


<?php get_footer(); ?>