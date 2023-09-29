<?php
/*

Template Name: Product page

*/

get_header(); ?>

	<!-- img banner -->
	
	<?php 
    $image = get_field('img-banner');
    if( !empty( $image ) ): ?>

        <img class="img-banner-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>


	<!-- list sản phẩm -->

	<div class="bg-prduct-home">
		<div class="container">

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

	            $product = get_field('list-product');

	            $loop = new WP_Query(
	                array(

		                'post_type'=>'product',
						'post_status'=>'publish',
						'tax_query' => array(
					      array(
					          'taxonomy' => 'product_cat',
					          'field' => 'id',
					          'terms' => $product,
					      )
						),
						'orderby' => 'ID',
						'order' => 'date',
						'paged' => $paged,
						'posts_per_page' => get_option('posts_per_page'),
	                )
	            );
	            ?>  

		            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

		            	<div class="col-lg-5 col-md-5 col-12">
	            			<a class="img-product-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>
		            	</div>


		            	<div class="col-lg-7 col-md-7 col-12">
		            		<div class="content-product-page">
			            		<h3 class="title-product-page"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			            		<p class="text-price-page"><?php echo $product->get_price_html(); ?></p>

			            		<div class="description-product"><?php the_excerpt(); ?></div>

			            		<p class="buy-product"><a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Đặt Hàng</a></p>
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
		                            'prev_text'    => __('Trước'),
		                            'next_text'    => __('Tiếp Theo'),
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