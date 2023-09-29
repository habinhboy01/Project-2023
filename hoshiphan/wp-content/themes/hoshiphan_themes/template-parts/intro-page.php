<?php
/*

Template Name: Intro page

*/

get_header(); ?>

	<div class="container bg-training">
		<h1 class="title-training title-intro"><?php echo get_field('title-intro'); ?></h1>

		<div class="content-intro"><?php the_field('content-intro'); ?></div>

		<div class="owl-carousel owl-theme carousel_3">
			<?php if( have_rows('list-intro') ): ?>
	            <?php while( have_rows('list-intro') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="item">
						<img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">

						<p class="text-intro"><?php echo get_sub_field('text'); ?></p>

						<p class="text-intro2"><?php echo get_sub_field('text2'); ?></p>
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Học viên từ khoá đào tạo -->

	<div class="container bg-training">
		<h1 class="title-training title-intro"><?php echo get_field('title-intro2'); ?></h1>

		<div class="row">
			
			<?php if( have_rows('student-pictures') ): ?>
	            <?php while( have_rows('student-pictures') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-4 col-12">
		                <div class="student-pictures">
			                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">

			                <p><?php the_sub_field('description'); ?></p>
			            </div>
			        </div>

	            <?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

	<!-- list img -->

	<div class="list-img-intro">
		
		<?php if( have_rows('list-img') ): ?>
            <?php while( have_rows('list-img') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

		        <img class="img-intro2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">

            <?php endwhile; ?>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>