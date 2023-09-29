<?php
/*

Template Name: Service page

*/

get_header(); ?>

	<div class="bg-intro-page">
		<div class="container">
			<div class="breadcrumb-intro">
				<p class="title-intro-intro"><?php echo get_field('title-page'); ?></p>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>


	<!-- dịch vụ -->

	<div class="bg-service">
		<div class="container">
			<h2 class="title-intro"><?php echo get_field('title-page'); ?></h2>

			<div class="text-service"><?php the_field('description-service'); ?></div>


			<div class="row">
	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	            <?php
	            if (get_query_var('paged')) {
	                $paged = get_query_var('paged');
	            } elseif (get_query_var('page')) { // 'page' is used instead of 'paged' on Static Front Page
	                $paged = get_query_var('page');
	            } else {
	                $paged = 1;
	            }
	            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	            $service = get_field('list-service');

	            $loop = new WP_Query(
	                array(
	                    'post_type' => 'post',
	                    'posts_per_page' => 6,
	                    'cat' => $service,
	                    'paged' => $paged,                       
	                    'post_status' => 'publish',
	                    'orderby' => 'date' // modified | title | name | ID | rand
	                )
	            );
	            ?>  

		            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-6">

							<div class="content-service-home">
								<a class="img-service-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<h3 class="title-service-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="text-service-home"><?php the_excerpt(); ?></div>
							</div>
						</div>

		            <?php endwhile; ?>               
	   
	             

	                <?php if ($loop->max_num_pages > 1) : // custom pagination  ?>
		                <div class="pagination">
		                    <?php
		                        $orig_query = $wp_query; // fix for pagination to work
		                        $wp_query = $loop;
		                        $big = 999999999;
		                        echo paginate_links(array(
		                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		                            'format' => '?paged=%#%',
		                            'prev_text'    => __('<i class="far fa-angle-left"></i>'),
		                            'next_text'    => __('<i class="far fa-angle-right"></i>'),
		                            'current' => max(1, get_query_var('paged')),
		                            'total' => $wp_query->max_num_pages
		                        ));
		                    $wp_query = $orig_query; // fix for pagination to work ?>
		                </div>
	            	<?php endif; ?>
	            	<?php wp_reset_postdata();
	                else : echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
	                endif; ?>
	  
			    <?php endwhile; ?>
			    <?php endif; ?>
			</div>


			<!-- Đăng ký lịch hẹn -->

			<div class="bg-book">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-book2">
							<h3 class="title-book"><?php echo get_field('title-register'); ?></h3>

							<div class="text-book"><?php the_field('description-register'); ?></div>

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

			<!-- --------------------------- -->

			<div class="content-service-page">
				<div class="row">

					<div class="col-lg-4 col-12">
						<div class="text-book"><?php the_field('description');?></div>
					</div>

					<div class="col-lg-4 col-12">
						<div class="text-book"><?php the_field('description2');?></div>
					</div>

					<div class="col-lg-4 col-12">
						<div class="text-book"><?php the_field('description3');?></div>
					</div>
					
				</div>
			</div>

		</div>
	</div>


	<!-- trải nghiệm khách hàng -->

	<div class="bg-news-home bg-service2">
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

<?php get_footer(); ?>