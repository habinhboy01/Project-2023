<?php get_header(); ?>

	<div class="bg-prduct-home">
		<div class="container">
			<?php the_category(); ?>

			<h1 class="title-single"><?php the_title(); ?></h1>

			<div class="row bg-single">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="content-single"><?php the_content(); ?></div>
				</div>


				<div class="col-lg-4 col-md-4 col-12">
					<div class="bg-single2">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>