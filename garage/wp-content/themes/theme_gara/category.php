<?php get_header(); ?>

	<div class="container bg-category">
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="row">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

							<div class="col-lg-4 col-md-6 col-12">
								<a class="img-category" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<p class="text-category"><?php single_cat_title(); ?></p>

								<h5 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

								<div class="text-category2"><?php the_excerpt(); ?></div>
							</div>

						<?php endwhile;?>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>