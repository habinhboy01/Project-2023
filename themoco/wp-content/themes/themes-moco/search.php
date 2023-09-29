<?php get_header(); ?>


	<div class="container-fluid bg-search">
		<p class="text-result">Kết quả tìm kiếm:</p>

		<h1 class="title-result"><?php the_search_query(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

		            <div class="col-lg-6 col-12">
                		<div class="row bg-read2">
                			<div class="col-lg-4 col-md-4 col-12">
								<a class="img-read2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
                			</div>

                			<div class="col-lg-8 col-md-8 col-12">
                				<div class="description-news">
                					<a href="<?php the_permalink(); ?>">
                						<h3 class="title-read2"><?php the_title(); ?></h3>

                						<div class="text-read2"><?php the_excerpt(); ?></div>
                					</a>
                				</div>
                			</div>
                		</div>
                	</div>

		       <?php endwhile; wp_reset_postdata(); ?>
		    <?php
			else :
				echo '<p class="text-result">No search results found!</p>';

			endif; ?>
		</div>
	</div>



<?php get_footer(); ?>