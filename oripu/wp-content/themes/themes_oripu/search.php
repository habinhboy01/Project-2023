<?php get_header(); ?>

	<div class="container bg-category">
		<p class="text-search">Kết quả tìm kiếm:</p>

		<h1 class="title-single-oripu title-sidebar3"><?php the_search_query(); ?></h1>

		<div class="row bg-category">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="content-category">
							<a class="img-category" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
						</div>
					</div>


					<div class="col-lg-8 col-md-8 col-12">
						<div class="content-category">
							<h2 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<p class="text-category"><i class="far fa-clock"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

						</div>
					</div>

		       <?php endwhile; wp_reset_postdata(); ?>
		    <?php
			else :
				echo '<p>No search results found!</p>';

			endif; ?>
		</div>
	</div>


<?php get_footer(); ?>