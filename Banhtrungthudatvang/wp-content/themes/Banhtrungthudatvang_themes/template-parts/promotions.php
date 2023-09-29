<?php
/*

Template Name: Promotions page

*/

get_header(); ?>

	<!-- img banner -->
	
	<?php 
    $image = get_field('img-banner');
    if( !empty( $image ) ): ?>

        <img class="img-banner-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="bg-promotions">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5 col-md-5 col-12">
    				<?php if( have_rows('list-promotion') ): ?>
			            <?php while( have_rows('list-promotion') ): the_row(); ?>

			            	<button class="accordion"><?php echo get_sub_field('title'); ?></button>

			            	<div class="panel"><?php the_sub_field('content'); ?></div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
    			</div>

    			<div class="col-lg-7 col-md-7 col-12">
    				<?php 
				    $image = get_field('img');
				    if( !empty( $image ) ): ?>

				        <img class="img-banner-intro img-promotions" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				    <?php endif; ?>
    			</div>
    		</div>
    	</div>
    </div>


<?php get_footer(); ?>