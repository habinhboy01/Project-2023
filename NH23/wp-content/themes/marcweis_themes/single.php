<?php get_header(); ?>
	
	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<div class="bg-news">
		<div class="container">
			<div class="bg-single">
				<h1 class="title-single"><?php the_title(); ?></h1>

				<div class="content-single"><?php the_content(); ?></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>