<?php
/*

	Template Name: Detail project
	* Template Post Type: post

*/
get_header(); ?>

	<div class="detail-project">
		<div class="container">
			<div class="detail-project2">
				<div class="content-detail-project">
					<h1><?php the_title(); ?></h1>

					<p class="text-detail-project"><?php echo get_field('name-client'); ?></p>

					<ul>
						<?php if( have_rows('description') ): ?>
				            <?php while( have_rows('description') ): the_row(); ?>

				                <li><?php echo get_sub_field('text'); ?></li>

				            <?php endwhile; ?>
			        	<?php endif; ?>
					</ul>

					<div class="content-detail"><?php the_field('content'); ?></div>
				</div>


				<div class="content-detail-project2">

					<div class="owl-carousel owl-theme carousel_1">
						<?php if( have_rows('img_project') ): ?>
				            <?php while( have_rows('img_project') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>

				                <div class="item">
				                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                </div>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </div>
				    
					<?php if( get_field('link-youtube') ): ?>
	    				<div class="embed-youtube">
								<?php the_field('link-youtube') ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>