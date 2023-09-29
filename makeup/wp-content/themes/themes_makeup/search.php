<?php get_header(); ?>

	<div class="container-fluid bg-intro-page">
		<p class="text-search">Kết quả tìm kiếm:</p>

		<h1 class="title-search"><?php the_search_query(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

	            	<div class="col-lg-3 col-md-6 col-12">
	            		<div class="content-news">
							<a class="img-news-page" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>	
							</a>

							<h1 class="title-news-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="text-news-home"><?php the_excerpt(); ?></div>	
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