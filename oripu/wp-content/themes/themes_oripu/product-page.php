<?php
/*

	Template Name: Oripu

*/
get_header(); ?>
	
	<div class="container bg-category">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php echo get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">
				    
				<h1 class="title-sidebar title-sidebar2">Sản phầm</h1>


				<div class="row">
		            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		            <?php
		            if (get_query_var('paged')) {
		                $paged = get_query_var('paged');
		            } elseif (get_query_var('page')) { // 'page' is used instead of 'paged' on Static Front Page
		                $paged = get_query_var('page');
		            } else {
		                $paged = 1;
		            }
		            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		            $loop = new WP_Query(
		                array(
		                    'post_type' => 'product-oripu',
		                    'posts_per_page' => 8,
		                    'paged' => $paged,                       
		                    'post_status' => 'publish',
		                    'orderby' => 'date' // modified | title | name | ID | rand
		                )
		            );
		            ?>  

			            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

	                    	<div class="col-lg-3 col-md-6 col-12">
			            		<div class="content-product-new product-oripu">
			                		<a class="img-product-oripu" href="<?php the_permalink(); ?>">
			                			<?php the_post_thumbnail('full'); ?>
			                		</a>

			                		<h3><?php the_title(); ?></h3>

			                	</div>  
			            	</div> 

			            <?php endwhile; ?>               
		   
		             

		                <?php if ($loop->max_num_pages > 1) : // custom pagination  ?>
			                <div class="pagination">
			                    <?php
			                        $orig_query = $wp_query; // fix for pagination to work
			                        $wp_query = $loop;
			                        $big = 999999999;
			                        echo paginate_links(array(
			                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
			                            'format' => '?paged=%#%',
			                            'prev_text'    => __('<i class="fas fa-angle-left"></i>'),
			                            'next_text'    => __('<i class="fas fa-angle-right"></i>'),
			                            'current' => max(1, get_query_var('paged')),
			                            'total' => $wp_query->max_num_pages
			                        ));
			                    $wp_query = $orig_query; // fix for pagination to work ?>
			                </div>
		            	<?php endif; ?>
		            	<?php wp_reset_postdata();
		                else : echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
		                endif; ?>
		  
				    <?php endwhile; ?>
				    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>



<?php get_footer() ;?>