<?php get_header(); ?>

	<div class="bg-news-home bg-service2">
		<div class="container">
			<p class="text-result">Kết quả tìm kiếm:</p>

			<h1 class="title-result"><?php the_search_query(); ?></h1>

			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="col-lg-4 col-md-6 col-12">

							<div class="content-news-home knowledge-page">
								<a class="img-knowledge2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>		
								</a>

								<div class="content-news-home2">
									<ul class="date-author">	        
			        					<li><?php echo get_the_date(); ?></li>

			        					<li><?php the_author(); ?></li>
			        				</ul>

									<h3 class="title-news-home title-knowledge-page"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

									<div class="text-news-home"><?php the_excerpt();?></div>

									<p class="read-more"><a href="<?php the_permalink(); ?>">READ MORE <i class='fal fa-long-arrow-right'></i></a></p>
								</div>
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