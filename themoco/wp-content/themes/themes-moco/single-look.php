<?php
/*

	Template Name: youtube
	* Template Post Type: post

*/
get_header(); ?>
	
	<div class="single-look">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php if( get_field('link-youtube') ): ?>
					    <div class="youtube-look">
							<?php the_field('link-youtube') ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<h1 class="title-look-page"><?php the_title(); ?></h1>

					<div class="content-single"><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>