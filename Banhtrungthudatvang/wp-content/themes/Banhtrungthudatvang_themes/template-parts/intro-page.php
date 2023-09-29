<?php
/*

Template Name: Intro page

*/

get_header(); ?>

	<!-- img banner -->
	
	<?php 
    $image = get_field('img-banner');
    if( !empty( $image ) ): ?>

        <img class="img-banner-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="bg-prduct-home">
    	<div class="container">
    		<h1 class="title-intro"><?php echo get_field('title-intro'); ?></h1>

    		<p class="text-intro-page"><?php echo get_field('text-intro'); ?></p>

    		<div class="content-page-intro"><?php the_field('content-page'); ?></div>
    	</div>
    </div>


    <?php 
    $image = get_field('img-banner2');
    if( !empty( $image ) ): ?>

        <img class="img-banner-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>


<?php get_footer(); ?>