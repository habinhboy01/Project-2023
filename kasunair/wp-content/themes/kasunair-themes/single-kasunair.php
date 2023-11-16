<?php
/*

	Template Name: Detail Kasunair
	* Template Post Type: product-kasunair

*/
get_header(); ?>

	<!-- breadcrumb -->

	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- -------------- -->

	
	<div class="mr-top-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php the_post_thumbnail('full',['class' => 'img-detail-product']); ?>

					<img id="modal-content">

					<!--slideshow gallery-->
        		
	        		<ul class="slideshow-gallery">
	    				<?php if( have_rows('slideshow_gallery') ): ?>
	    		            <?php while( have_rows('slideshow_gallery') ): the_row(); 
	    		                $image = get_sub_field('img');
	    		                ?>
	    
	    		                <li>
	    							<img class="img-slideshow" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
	    						</li>
	    
	    		       	    <?php endwhile; ?>
	    				<?php endif; ?>
	        		</ul>
				</div>

				<div class="col-lg-6 col-12">
					<div class="detail-product">
						<h1 class="title-detail"><?php the_title(); ?></h1>

						<div class="description-about-us"><?php the_content(); ?></div>
					</div>
				</div>
			</div>


			<!-- sản phẩm mới nhất -->

			<div class="row mr-top">
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
	                    'post_type' => 'product-kasunair',
	                    'posts_per_page' => 3,
	                    'paged' => $paged,                       
	                    'post_status' => 'publish',
	                    'orderby' => 'date' // modified | title | name | ID | rand
	                )
	            );
	            ?>  

		            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

	                	<div class="col-lg-4 col-md-6 col-12">
		            		<div class="content-product-new">
		                		<a class="img-product-kasunair" href="<?php the_permalink(); ?>">
		                			<?php the_post_thumbnail('full'); ?>
		                		</a>

		                		<div class="content-product-new-2">
			                		<h3 class="title-product">
			                			<a href="<?php the_permalink(); ?>">
			                				<?php the_title(); ?>
			                			</a>         				
			                		</h3>

			                		<div class="description-product"><?php the_excerpt();?></div>
			                	</div>
		                	</div>  
		            	</div>

		            <?php endwhile; ?>                 

	            	<?php wp_reset_postdata();
	                else : echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
	                endif; ?>
	  
			    <?php endwhile; ?>
			   <?php endif; ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>