<?php get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php single_cat_title(); ?></h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
                        
                        <div class="row content-news2">
                        	<div class="col-lg-3 col-md-3 col-12">
                        		
    							<a class="img-news-page2" href="<?php the_permalink(); ?>">
    								<?php the_post_thumbnail('full'); ?>	
    							</a>
    
    						</div>
    
    
    						<div class="col-lg-9 col-md-9 col-12">
    							<h1 class="title-news-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    
    							<div class="text-news-home"><?php the_excerpt(); ?></div>	
    						</div>
    					</div>

					<?php endwhile;?>
				<?php endif; ?>           
	  

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
	

<?php get_footer(); ?>