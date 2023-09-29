<?php get_header(); ?>
	
	<div class="bg-prduct-home">
		<div class="container">
			<p class="text-search">Kết quả tìm kiếm:</p>

			<h1 class="text-search2"><?php the_search_query(); ?></h1>

			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12">

						<div class="content-category">
							<a class="img-category" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>


							<h3 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="text-category"><?php the_excerpt();?></div>

						</div>

					</div>

			       <?php endwhile; wp_reset_postdata(); ?>
			    <?php
				else :
					echo '<p>No search results found!</p>';

				endif; ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>