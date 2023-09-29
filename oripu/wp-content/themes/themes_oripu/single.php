<?php get_header(); ?>

	<div class="bg-breadcrumb">
		<div class="container">
			<?php

			if ( function_exists('yoast_breadcrumb') ) {

			 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

			}

			?>
		</div>
	</div>

	<div class="container bg-category">
		<h1 class="title-single"><?php the_title(); ?></h1>

		<p class="text-category"><i class="far fa-clock"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

		<div class="content-single"><?php the_content(); ?></div>
	</div>


<?php get_footer(); ?>