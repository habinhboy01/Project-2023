<?php
/*

	Template Name: Solution

*/
get_header(); ?>

	<div class="page-services">
		<?php if( have_rows('title-intro') ): ?>
            <?php while( have_rows('title-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

				<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				<div class="content-page-services">
					<h2><?php echo get_sub_field('title'); ?></h2>

					<p><?php the_sub_field('text'); ?></p>
				</div>

       	    <?php endwhile; ?>
		<?php endif; ?>
	</div>


	<!-- DATA ANALYTICS -->

	<div class="container-fluid bg-company">
		<h2 class="title-about text-center"><?php echo get_field('title'); ?></h2>

		<p class="text-solution"><?php the_field('description'); ?></p>

		<div class="row">
			<?php if( have_rows('list-solution') ): ?>
	            <?php while( have_rows('list-solution') ): the_row(); 
	                $link = get_sub_field('link');
	                ?>

	                <div class="col-lg-3 col-md-6 col-12">
						<div class="list-solution">
			                <h1><?php echo get_sub_field('title'); ?></h1>

			                <p><?php echo the_sub_field('content'); ?></p>

			                <div class="text-solution2">
				                <a href="<?php echo $link['url'];?>" target="_blank">
								   <?php echo get_sub_field('learn_more'); ?>
								</a>
							</div>
						</div>
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Enterprise Data Platform (EDP) -->

	<div class="container-fluid bg-company ">
		<h2 class="title-about text-center"><?php echo get_field('title2'); ?></h2>

		<p class="text-solution text-solution3"><?php the_field('description2'); ?></p>

		<h2 class="text-solution4"><?php echo get_field('enperprise'); ?></h2>

		<ul class="content-data">
			<?php if( have_rows('content-data') ): ?>
	            <?php while( have_rows('content-data') ): the_row(); ?>

					<li>
						<i class="fas fa-circle"></i> 

						<p><?php the_sub_field('text'); ?></p>
					</li>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</ul>

		<?php 
        $image = get_field('img');
        if( !empty( $image ) ): ?>
            <img class="img-solution" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <p class="caption-img"><?php echo get_field('caption-img');?></p>

        <?php 
        $image = get_field('img2');
        if( !empty( $image ) ): ?>
            <img class="img-solution" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <h2 class="text-solution4"><?php echo get_field('erp-solution'); ?></h2>

        <?php 
        $image = get_field('img-erp-solution');
        if( !empty( $image ) ): ?>
            <img class="img-solution" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <h2 class="text-solution4"><?php echo get_field('services'); ?></h2>

		<ul class="content-data platform-services">
			<?php if( have_rows('list-services') ): ?>
	            <?php while( have_rows('list-services') ): the_row(); ?>

					<li>
						<i class="fas fa-circle"></i> 

						<p><?php echo get_sub_field('text'); ?></p>
					</li>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>


<?php get_footer(); ?>