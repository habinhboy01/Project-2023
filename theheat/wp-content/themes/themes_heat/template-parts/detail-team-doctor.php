<?php
/*

	Template Name: Detail doctor
	Template Post Type: post

*/

get_header(); ?>

	<div class="bg-intro-page">
		<div class="container">
			<div class="breadcrumb-intro">
				<p class="title-intro-intro"><?php the_title(); ?></p>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- detail doctor -->

	<div class="bg-news2">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-12">
					<?php 
		            $image = get_field('img-doctor');
		            if( !empty( $image ) ): ?>

		                <img class="img-detail-doctor" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		            <?php endif; ?>
				</div>

				<div class="col-lg-7 col-12">
					
					<div class="bg-detail-dotor">
						<h1 class="title-detail-dotor"><?php the_title(); ?></h1>

						<p class="text-detail-dotor"><?php echo get_field('office-doctor'); ?></p>

						<div class="content-single"><?php the_field('description-doctor'); ?></div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- đội ngũ bác sĩ -->

	<div class="bg-detail-dotor2">
		<div class="container">

			<h2 class="title-team">ĐỘI NGŨ BÁC SỸ</h2>

			<p class="text-team">Thành Viên <span class="text-detail-dotor2">The Heat</span></p>

			<?php
				/*
				 * Code hiển thị bài viết liên quan trong cùng 1 category

				 */
				$categories = get_the_category(get_the_ID());
				if ($categories){
				    echo '<div class="owl-carousel owl-theme carousel_2">';
				    $category_ids = array();
				    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				    $args=array(
				        'category__in' => $category_ids,
				        'post__not_in' => array(get_the_ID()),
				        'posts_per_page' => 8,
				        'order'        => 'ASC',
				        
				    );
				    $my_query = new wp_query($args);
				    if( $my_query->have_posts() ):
				       
				        while ($my_query->have_posts()):$my_query->the_post();
				            ?>

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

				            <?php
				        endwhile;
				        echo '</div>';
				    endif; wp_reset_query();
				    echo '</div>';
				}
			?>
		</div>
	</div>

<?php get_footer(); ?>