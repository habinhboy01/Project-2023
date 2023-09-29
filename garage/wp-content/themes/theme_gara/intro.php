<?php
/*

Template Name: Intro page

*/

get_header(); ?>

	<div class="container">
		<?php 
        $image = get_field('img-intro');
        if( !empty( $image ) ): ?>
            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="row bg-intro">
        	<div class="col-lg-3 col-md-3 col-12">
        		<h3 class="title-intro"><?php echo get_field('title-vision'); ?></h3>

        		<p class="text-intro"><?php echo get_field('doctor'); ?></p>
        	</div>

        	<div class="col-lg-9 col-md-9 col-12">
        		<p class="text-intro2"><?php echo get_field('text-garage'); ?></p>

        		<p class="text-intro2"><?php echo get_field('text-garage2'); ?></p>
        	</div>
        </div>
	</div>

	<!-- CÁC DỊCH VỤ CHÍNH -->

	<div class="container">
		<div class="intro-service">
			<h2 class="title-info title-criteria"><?php echo get_field('title-service'); ?></h2>

			<div class="row">
				<?php if( have_rows('intro-service') ): ?>
		            <?php while( have_rows('intro-service') ): the_row(); 
		                $image = get_sub_field('icon');
		                $picture = $image['sizes']['thumbnail'];
		                ?>

		                <div class="col-lg-3 col-md-6 col-12">
			                <div class="content-intro-service">
			                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                	<h3><?php echo get_sub_field('title'); ?></h3>

			                	<p><?php the_sub_field('content'); ?></p>
			                </div>
			            </div>

		            <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- NHỮNG CAM KẾT CỦA GARA MÔI TRƯỜNG XANH -->

	<div class="container commitment">
		<h5 class="title-commitment"><?php echo get_field('commitment'); ?></h5>

		<p class="text-commitment"><?php echo get_field('text-commitment'); ?></p>

		<p class="text-commitment2"><?php echo get_field('text-commitment2'); ?></p>

		<p class="text-commitment2"><?php echo get_field('text-commitment3'); ?></p>

		<p class="text-commitment"><?php echo get_field('text-commitment4'); ?></p>
	</div>

<?php get_footer(); ?>