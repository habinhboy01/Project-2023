<?php
/*

	Template Name: Tin tức
*/
get_header(); ?>
    <div id="main">

    	<?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="container alu-product">

        	<h1 class="text-service"><?php echo get_field('title-news'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row bg-category">
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
                            'post_type' => 'post',
                            'posts_per_page' => get_option('posts_per_page'),
                            'paged' => $paged,
                            'cat' =>  11,                     
                            'post_status' => 'publish',
                            'orderby' => 'dsc',
                            'orderby' => 'date' // modified | title | name | ID | rand
                        )
                    );
                    ?>  
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="col-lg-6 col-12">

                        	<div class="content-category">
    	                        <a class="img-category" href="<?php the_permalink(); ?>">
    	                        	<?php the_post_thumbnail('full'); ?>
    	                        </a>

    	                        <div class="title-category">

    	                            <h2 class="text-category">
    	                            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	                            </h2>

    	                            <img src="<?php bloginfo('template_directory') ?>/images/img35.png">

    	                        </div>
    	                    </div>

                        </div>

                    <?php endwhile; ?>               
    		   	             
                    <!-- phân trang -->

    	            <?php if ($loop->max_num_pages > 1) : // custom pagination  ?>
    	                <div class="pagination">
    	                    <?php
    	                        $orig_query = $wp_query; // fix for pagination to work
    	                        $wp_query = $loop;
    	                        $big = 999999999;
    	                        echo paginate_links(array(
    	                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    	                            'format' => '?paged=%#%',
    	                            'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
    	                            'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
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

        <img class="img-intro color-board" src="<?php bloginfo('template_directory') ?>/images/line4.png">

    </div>

<?php get_footer(); ?>