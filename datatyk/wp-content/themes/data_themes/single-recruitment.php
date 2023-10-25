<?php
/*

	Template Name: Detail Career
	* Template Post Type: recruitment

*/
get_header(); ?>
    <div id="main">
        
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
    
    	<!-- content -->
    
    	<div class="container-fluid bg-company">
    		<h2 class="title-career"><?php echo get_field('title'); ?></h2>
    
    		<div class="row">
    			<!-- THÔNG TIN VIỆC LÀM -->
    
    			<div class="col-lg-4 col-12">
    				<h2 class="text-career3"><?php echo get_field('work-information');?></h2>
    				
    				<?php if( have_rows('list-work-information') ): ?>
    		            <?php while( have_rows('list-work-information') ): the_row(); ?>
    		            	<div class="content-career2">
    							<h2 class="text-career4">
    								<i class="fas fa-circle"></i>
    								<?php echo get_sub_field('title'); ?>
    							</h2>
    
    							<p class="text-career5"><?php echo get_sub_field('text'); ?></p>
    						</div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    
    			<!-- mô tả công việc -->
    
    			<div class="col-lg-4 col-12">
    				<h2 class="text-career3"><?php echo get_field('description-work');?></h2>
    				
    				<?php if( have_rows('list-description-work') ): ?>
    		            <?php while( have_rows('list-description-work') ): the_row(); ?>
    		            	<div class="content-career2 content-career3">
    							
    							<i class="fas fa-circle"></i>
    
    							<p class="text-career6">
    								<?php the_sub_field('text'); ?>							
    							</p>
    						</div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    
    
    			<!-- yêu cầu công việc -->
    
    			<div class="col-lg-4 col-12">
    				<h2 class="text-career3"><?php echo get_field('job-requirements');?></h2>
    				
    				<?php if( have_rows('list-job-requirements') ): ?>
    		            <?php while( have_rows('list-job-requirements') ): the_row(); ?>
    		            	<div class="content-career2 content-career3">
    							
    							<i class="fas fa-circle"></i>
    
    							<p class="text-career6">
    								<?php the_sub_field('text'); ?>							
    							</p>
    						</div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    		</div>
    	</div>
    
    
    	<!-- ứng tuyển -->
    
    	<div class="container-fluid bg-recruitment">
    		<div class="row">
    			<div class="col-lg-4 col-12">
    				<ul class="job-tags">
    					<li class="text-job">Job tags:</li>
    
    					<li class="text-job2">
    						<?php
    				            $args = array(
    				                'post_status' => 'publish',
    				                'post_type' => 'recruitment',
    				                'taxonomy' => 'career',
    				                'posts_per_page' => 3,
    				                'orderby' => 'post_date',
    				                'order' => 'date',
    				            ); 
    				        ?>
    				            <?php $getposts = new WP_query($args); ?>
    				            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    				            <?php if (have_posts()) : ?>
    				            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    
    					            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    
    			           		<?php endwhile; wp_reset_postdata(); ?>
    		        		<?php endif; ?>
    		        	</li>
    	        	</ul>
    			</div>
    
    			<div class="col-lg-4 col-12">
    				<div class="recruitment">
    					Apply
    				</div>
    			</div>
    
    			<div class="col-lg-4 col-12">
    				<div class="bg-recruitment2">
    					<?php echo do_shortcode('[contact-form-7 id="732" title="ứng tuyển"]'); ?>
    				</div>
    			</div>
    		</div>
    	</div>
    
    	<!-- việc làm tương tự -->
    
    	<div class="container-fluid bg-company">
    		<h2 class="title-career">Related Work</h2>
    
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
    		                			<h2>
    		                			    <a href="<?php the_permalink(); ?>">
    		                			        <?php the_title(); ?>
    		                			    </a>
    		                			</h2>
    
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

    </div>

<?php get_footer(); ?>


