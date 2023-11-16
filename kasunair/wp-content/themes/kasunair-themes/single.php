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


	<!-- nội dung -->

	<div class="mr-top-2">
		<div class="container">
			<h1 class="title-page title-page2"><?php the_title(); ?></h1>

			<?php the_post_thumbnail('full', ['class' => 'img-single']); ?>

			<div class="content-single"><?php the_content(); ?></div>
		</div>
	</div>


<?php get_footer(); ?>