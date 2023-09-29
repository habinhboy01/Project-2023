<?php get_header(); ?>

	<div class="container bg-page-search">
		<p class="text-search">Kết quả tìm kiếm:</p>

		<h1 class="text-search2"><?php the_search_query(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

				<div class="row border-perspective">
					<ul class="title-category title-perspective2">
						<li><?php single_cat_title(); ?></li>

						<li><?php echo get_the_date(); ?></li>
					</ul>

					<div class="col-lg-5 col-md-5 col-5">
						<a class="img-page-category" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>

					<div class="col-lg-7 col-md-7 col-7">
						<h1 class="text-market title-perspective3">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>

						<p class="text-market2 title-perspective2"><?php the_author(); ?></p>

						<div class="title-market4 text-page-category"><?php the_excerpt(); ?></div>
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