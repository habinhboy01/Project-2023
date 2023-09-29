<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<div class="bg-intro">
		<div class="owl-carousel owl-theme carousel_4">
			<?php if( have_rows('img-intro') ): ?>
	            <?php while( have_rows('img-intro') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="item">
	                	<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
	    </div>


	    <!-- đặt lịch makeup -->

	    <div class="book-makeup">
	    	<h2><?php echo get_field('book-makeup'); ?></h2>

	    	<p><?php echo get_field('description-book'); ?></p>

	    	<?php echo do_shortcode( '[contact-form-7 id="95" title="Book Makeup"]' ); ?>
	    </div>
	</div>

	<!-- dịch vụ makeup -->

	<div class="bg-service-makeup">
		<div class="title-page">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line.png">

			<h1><?php echo get_field('service-makeup'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line2.png">
		</div>

		<div class="container-fluid">
			<div class="owl-carousel owl-theme carousel_6">
				<?php if( have_rows('list-service-makeup') ): ?>
		            <?php while( have_rows('list-service-makeup') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail'];
		                $link = get_sub_field('link');
		                ?>

		                <div class="item">
		                	<div class="content-service-makeup">
				                <a href="<?php echo $link['url'];?>">
				                	<img class="img-service-makeup" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                </a>

				                <h3>
				                    <a href="<?php echo $link['url'];?>">
				                        <?php echo get_sub_field('title'); ?>
				                    </a>
				                </h3>

    				             <p>
    				                <a href="<?php echo $link['url'];?>">
    				                    <?php echo get_sub_field('text'); ?>
    				                </a>
    				             </p>

                                <p id="learn-more-service">
                                    <a href="<?php echo get_field('link-advice-now'); ?>">
    				                	<?php echo get_field('advice-now'); ?>
    
    				                	<i class="far fa-play"></i>
    				                </a>
                                </p>

				            </div>
			            </div>

		            <?php endwhile; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- hình ảnh học viên -->

	<div class="bg-photo">

		<div class="title-page title-photo">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line3.png">

			<h1><?php echo get_field('student-photo'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line4.png">
		</div>

		<!-- slider hình ảnh học viên -->

		<div class="container-fluid">
			<div class="owl-carousel owl-theme carousel_1">
				<?php if( have_rows('list-student-photo') ): ?>
		            <?php while( have_rows('list-student-photo') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<img class="student-photo" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>
		</div>

	</div>

	<!-- kháo đào tạo -->

	<div class="bg-training">
		<div class="title-page">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line.png">

			<h1><?php echo get_field('title-training'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line2.png">
		</div>

		<div class="container-fluid bg-training">
			<div class="row">
				<?php if( have_rows('list-training') ): ?>
		            <?php while( have_rows('list-training') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail'];
		                $link = get_sub_field('link');
		                ?>

		                <div class="col-lg-5 col-12">
		                	<img class="img-training" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		                <div class="col-lg-7 col-12">
		                	<div class="content-training">
			                	<h3><?php echo get_sub_field('title'); ?></h3>

			                	<p class="text-training"><?php echo get_sub_field('text'); ?></p>

			                	<p class="text-training2"><?php the_sub_field('content'); ?></p>

		                		<a class="detail-training" href="<?php echo $link['url'];?>">
				                	<?php echo get_sub_field('detail'); ?>

				                	<i class="fal fa-play"></i>
				                </a>
				            </div>
		                </div>

		            <?php endwhile; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- CẢM NHẬN KHÁCH HÀNG -->

	<div class="bg-customer">
		<div class="title-page title-photo">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line3.png">

			<h1><?php echo get_field('customer-feeling'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line4.png">
		</div>

		<p class="text-feeling"><?php echo get_field('text-feeling'); ?></p>

		<div class="container-fluid">
			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-customer') ): ?>
		            <?php while( have_rows('list-customer') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<div class="list-customer">
		                		<p><?php echo get_sub_field('content'); ?></p>

		                		<img id="img-customer" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </div>
		</div>
	</div>

	<!-- tin tức sự kiện -->

	<div class="bg-training">
		<div class="title-page">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line.png">

			<h1><?php echo get_field('title-news'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line2.png">
		</div>

		<div class="container-fluid">
			<div class="owl-carousel owl-theme carousel_3">
				<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'cat' => '[1,8]',
						'posts_per_page' => 6,
						'order' => 'date',
						
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="item">
						<div class="news-home"> 
							<a class="img-news-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>	
							</a>

							<h1 class="title-news-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="text-news-home"><?php the_excerpt(); ?></div>	
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>
		    </div>
		</div>
	</div>

	<!-- đặt lịch -->

	<div class="bg-photo">

		<div class="title-page title-photo">

			<img class="line-title" src="<?php bloginfo('template_directory') ?>/images/line3.png">

			<h1><?php echo get_field('title-book'); ?></h1>

			<img class="line-title2" src="<?php bloginfo('template_directory') ?>/images/line4.png">
		</div>

		<div class="container-fluid">
			<div class="book-makeup book-home">
		    	<h2><?php echo get_field('book-makeup'); ?></h2>

		    	<p><?php echo get_field('description-book'); ?></p>

		    	<?php echo do_shortcode( '[contact-form-7 id="95" title="Book Makeup"]' ); ?>
		    </div>
		</div>
	</div>






<?php get_footer(); ?>