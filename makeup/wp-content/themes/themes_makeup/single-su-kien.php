<?php
/*

	Template Name: Event posts
	* Template Post Type: post

*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php the_category(); ?></h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-md-9 col-12">
				<h1 class="title-single"><?php the_title(); ?></h1>

				<div class="content-intro-page2">
					<?php the_content(); ?>
				</div>

			</div>
		</div>
	</div>



<?php get_footer(); ?>