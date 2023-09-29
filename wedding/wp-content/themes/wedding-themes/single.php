<?php get_header(); ?>

	<!-- nội dung -->

	<div class="bg-single">

		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-12">

					<div class="title-single">
						<h1><?php the_title(); ?></h1>

						<p><?php echo get_the_date(); ?> </p>

						<?php the_post_thumbnail('full', ['class' => 'img-single']); ?>
					</div>

					<div class="content-single"><?php the_content(); ?></div>

				</div>


				<div class="col-lg-4 col-12">
					<?php get_sidebar(); ?>
				</div>
				
			</div>

		</div>

	</div>


<?php get_footer(); ?>