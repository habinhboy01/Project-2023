<?php get_header(); ?>
    <div id="main">
    	<div class="page-services">
    		<?php 
            $image = get_field('img-intro', 'option');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
    		<div class="content-page-services">
    			<h2><?php single_cat_title(); ?></h2>
    		</div>
    	</div>
    
    	<!-- ---------------- -->
    
    	<div class="container-fluid bg-technology bg-footer3">
    		<div class="row">
    			<div class="col-lg-3 col-12">
    				<?php get_sidebar(); ?>
    			</div>
    
    			<div class="col-lg-9 col-12">
    				<?php
    		            $args = array(
    		                'post_status' => 'publish',
    		                'post_type' => 'post',
    		                'posts_per_page' => 1,
    		                'orderby' => 'post_date',
    		                'order' => 'date',
    		            ); 
    		        ?>
    		            <?php $getposts = new WP_query($args); ?>
    		            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    		            <?php if (have_posts()) : ?>
    		            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    
    		            	<div class="content-category">
    		            		<a class="img-sidebar" href="<?php the_permalink(); ?>">
    		                    	<?php the_post_thumbnail('full'); ?>	
    		                    </a>
    
    		                    <div class="content-category2">
    			                    <a class="text-category" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    
    								<ul class="list-author">
    									<li>
    										<img src="<?php bloginfo('template_directory') ?>/images/user.png">
    
    										<?php the_author_posts_link(); ?>
    									</li>
    
    									<li class="date-submitted">
    										<img src="<?php bloginfo('template_directory') ?>/images/date.png">
    										
    										<?php echo get_the_date(); ?>
    									</li>
    
    								</ul>
    							</div>	                    
    		            	</div>
    
    	           		<?php endwhile; wp_reset_postdata(); ?>
            		<?php endif; ?>
    
            		<!-- ---------------------- -->
    
    
            		<div class="row bg-technology">
    					<?php if (have_posts()) : ?>
    						<?php while (have_posts()) : the_post(); ?>
    
    							<div class="col-lg-6 col-md-6 col-12">
    				            	<div class="content-category content-category3">
    				            		<a class="img-category" href="<?php the_permalink(); ?>">
    				                    	<?php the_post_thumbnail('full'); ?>	
    				                    </a>
    
    				                    <div class="content-category2 content-category4">
    					                    <a class="text-category" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    
    										<ul class="list-author">
    											<li>
    												<img src="<?php bloginfo('template_directory') ?>/images/user.png">
    
    												<?php the_author_posts_link(); ?>
    											</li>
    
    											<li class="date-submitted">
    												<img src="<?php bloginfo('template_directory') ?>/images/date.png">
    												
    												<?php echo get_the_date(); ?>
    											</li>
    										</ul>
    									</div>	                    
    				            	</div>
    				            </div>
    
    		           		<?php endwhile; wp_reset_postdata(); ?>
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