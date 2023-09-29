<?php
/*

Template Name: Sales point page

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
    		<h1 class="title-intro title-address"><?php echo get_field('title-address'); ?></h1>

    		<div class="content-page-intro"><?php the_field('content-page'); ?></div>
    	</div>
    </div>


<?php get_footer(); ?>