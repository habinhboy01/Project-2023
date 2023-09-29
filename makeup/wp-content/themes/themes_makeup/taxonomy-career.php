<?php
/*

	Template Name: Career

*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php echo get_field('title-page'); ?></h1>

			<p><?php echo get_field('description'); ?></p>
		</div>
	</div>

	<!-- Vị trí tuyển dụng -->

	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12">
				<h2 class="title-intro">Đào tạo và tuyển dụng</h2>

				<?php wp_nav_menu (
	            array('theme_location' => 'menu-4', 'menu_class' => 'list-sidebar'));?>
			</div>

			<div class="col-lg-9 col-md-9 col-12">
				<?php echo do_shortcode('[csw_search_form]'); ?>

				<div class="bg-career">
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
		                    'post_type' => 'recruitment',
		                    'posts_per_page' => 6,
		                    'paged' => $paged,                       
		                    'post_status' => 'publish',
		                    'orderby' => 'date' // modified | title | name | ID | rand
		                )
		            );
		            ?>  

			            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

		                	<div class="content-career">

                				<h2 class="title-career3">
                					<a href="<?php the_permalink(); ?>">
                						<?php the_title(); ?>
                					</a>
                						
                				</h2>

	                			<p>
	                				<i class="fas fa-map-marker-alt"></i>

	                				Khu vực: <?php location_cate();?>
	                			</p>

			                	<ul class="list-career">

			                		<li><i class="fas fa-dollar-sign"></i> Lương: mức lương cạnh tranh</li>

			                		<li><a class="apply" href="<?php the_permalink(); ?>">Ứng tuyển</a></li>

			                	</ul>   
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





<?php get_footer(); ?>