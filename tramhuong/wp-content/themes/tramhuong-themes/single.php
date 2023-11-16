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

	<div class="container bg-single">
		<div class="row">
			<div class="col-lg-9 col-12">

				<div class="img-news">		
					<?php the_post_thumbnail('full'); ?>		
				</div>

				<h3 class="title-single"><?php the_title(); ?></h3>

				<div class="content-single"><?php the_content(); ?></div>

			</div>

			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>