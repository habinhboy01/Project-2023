<?php get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php single_cat_title(); ?></h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">

				<form role="search" method="get" class="" action="<?php echo get_home_url() ?>">
					<input type="hidden" class="input-career" placeholder="Từ khoá" value="" name="s">

					lọc

					<select class="input-career2 selectFilter" name="location">
						<option value="">Bài viết</option>

						<option value="0">Gần nhất</option>
						<option value="1">Phổ biến</option>
					</select>
				</form>


				<div class="row">
                    <?php
                        // code php
                     	if (  $_GET['filter'] == 0  ) {
	                        $args = array(  
	                            'post_status' => 'publish',
	                            'post_type' => 'post',
	                            'cat' => '1',
	                            'posts_per_page' => 6,
	                            'order' => 'DESC',
	                            
	                        );
	                    }

                        if (  $_GET['filter'] == 1  ) {
                            $args = array(  
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                                'cat' => '1',
                                'order' => 'ASC',
                                
                            );
                        }
                        
                    ?>
					<?php $getposts = new WP_query($args); ?>

					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                    	<div class="col-lg-4 col-md-6 col-12">
                    		<div class="content-news">
								<a class="img-news-page" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>	
								</a>

								<h1 class="title-news-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

								<div class="text-news-home"><?php the_excerpt(); ?></div>	
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>         
		  

					<!-- ph창n trang -->

					<?php if(paginate_links()!='') {?>
						<div class="pagination">
							<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('<'),
								'next_text'    => __('>'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
								) );
						    ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>