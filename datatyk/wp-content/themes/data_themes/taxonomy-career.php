<?php
/*

	Template Name: Career

*/
get_header(); ?>

	<div class="page-services">
		<?php if( have_rows('title-intro') ): ?>
            <?php while( have_rows('title-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

				<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				<div class="content-page-services">
					<h2><?php echo get_sub_field('title'); ?></h2>

					<p><?php the_sub_field('text'); ?></p>
				</div>

       	    <?php endwhile; ?>
		<?php endif; ?>
	</div>

	<!-- Vị trí tuyển dụng -->

	<div class="container-fluid bg-company">
		<h2 class="title-about text-career"><?php echo get_field('title'); ?></h2>

		<p class="text-solution text-career2"><?php the_field('description'); ?></p>

		<?php echo do_shortcode('[csw_search_form]'); ?>	

		<div class="row bg-career">
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
                    'posts_per_page' => get_option('posts_per_page'),
                    'paged' => $paged,                       
                    'post_status' => 'publish',
                    'orderby' => 'dsc',
                    'orderby' => 'date' // modified | title | name | ID | rand
                )
            );
            ?>  

	            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<div class="content-career">
		                	<ul class="list-career">
		                		<li>
		                			<h2><?php the_title(); ?></h2>

		                			<p><?php career_cate();?></p>

		                			<p><?php location_cate();?></p>
		                		</li>

		                		<li class="full-time">Full Time</li>
		                	</ul>   

	                        <a class="view" href="<?php the_permalink(); ?>">View & Apply</a>
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

<?php get_footer(); ?>