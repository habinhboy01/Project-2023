<?php get_header(); ?>

	<div class="bg-category">
		<div class="container">
        	<div class="title-category">
        		<?php single_cat_title(); ?>
        		
        		<img src="<?php bloginfo('template_directory')?>/images/line.png">
        	</div>

			<div class="row">
				<?php if (have_posts()) : ?>
		        	<?php while (have_posts()) : the_post(); ?>

			            <div class="col-md-6">
			                <div class="related-post">
			                    <div class="post-img">
			                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
			                    </div>
			                    <div class="p-detail">
			                        <?php

			                    $post_id = get_the_ID();

			                    $categories = get_the_category($post_id);

			                    if ($categories) {
			                        
			                            echo "<a class='cate' href='" . esc_url(get_category_link($categories[0]->term_id)) . "'>" . esc_html($categories[0]->name) . "</a>";
			                    }
			                    ?>
			                        <div class="post-name">
			                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			                        </div>
			                        <div class="post-time time2">
			                            <?php echo get_the_date('M d')?>, 10 mins read
			                        </div>
			                    </div>
			                </div>
			            </div>

		        	<?php endwhile;?>
		        <?php endif; ?>
			</div>

			<!-- phân trang -->

			<?php if(paginate_links()!='') {?>
				<div class="pagination">
					<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
						'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
						) );
				    ?>
				</div>
			<?php } ?>
       </div> 
	</div>


<?php get_footer(); ?>