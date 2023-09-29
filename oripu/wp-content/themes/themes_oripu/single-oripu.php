<?php
/*

	Template Name: Detail oripu
	* Template Post Type: oripu

*/
get_header(); ?>

	<div class="bg-breadcrumb">
		<div class="container">
			<?php

			if ( function_exists('yoast_breadcrumb') ) {

			 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

			}

			?>
		</div>
	</div>


	<div class="container bg-category">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
		
        		<?php the_post_thumbnail('full',['class' => 'img-product-oripu3']); ?>
        		
        		<!--modal images-->
        		
        		<div id="modalImg" class="modal-img">
        		    <span id="close-modal-img">&times;</span>
        		    
        		    <img id="modal-content">
        		</div>
        		
        		<!--slideshow gallery-->
        		
        		<ul class="slideshow-gallery">
    				<?php if( have_rows('slideshow-gallery') ): ?>
    		            <?php while( have_rows('slideshow-gallery') ): the_row(); 
    		                $image = get_sub_field('img');
    		                ?>
    
    		                <li>
    							<img class="img-slideshow" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
    						</li>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
        		</ul>
			</div>


			<div class="col-lg-7 col-md-7 col-12">
				<div class="detail-product">
					<h1 class="title-single-oripu"><?php the_title(); ?></h1>

					<div class="content-single-oripu"><?php the_field('detail'); ?></div>
				</div>
			</div>
		</div>

		<!-- mô tả -->

		<h1 class="title-single-oripu title-sidebar3">Mô tả</h1>

		<div class="content-single-oripu content-single-oripu2"><?php the_field('describe'); ?></div>


		<!-- sản phẩm mới nhất -->

		<h1 class="title-single-oripu title-sidebar3">Sản phẩm mới nhất</h1>

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
                    'post_type' => 'oripu',
                    'posts_per_page' => 4,
                    'paged' => $paged,                       
                    'post_status' => 'publish',
                    'orderby' => 'date' // modified | title | name | ID | rand
                )
            );
            ?>  

	            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

                	<div class="col-lg-3 col-md-6 col-12">
	            		<div class="content-product-new">
	                		<a class="img-product-oripu" href="<?php the_permalink(); ?>">
	                			<?php the_post_thumbnail('full'); ?>
	                		</a>

	                		<h3><?php the_title(); ?></h3>

	                		<a class="text-product-new" href="<?php the_permalink(); ?>">
	                			<?php echo get_sub_field('description'); ?>
	                		</a>
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


<?php get_footer(); ?>
