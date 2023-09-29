
<div class="bg-sidebar">
	<h3 class="title-sidebar">Tìm kiếm</h3>

	<?php echo do_shortcode('[wp_search_form]'); ?>
</div>

<!-- bài viết mới -->

<div class="bg-sidebar">

	<h3 class="title-sidebar">Bài viết mới</h3>

	<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category

		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 4,
		        'order'        => 'date',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		       
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>

		            <div class="row content-sidebar">
			            <div class="col-lg-4 col-md-4 col-4">
		            		<a class="img-sidebar" href="<?php the_permalink(); ?>">
		    					<?php the_post_thumbnail('full'); ?>             						
		    				</a>
				        </div>

				        <div class="col-lg-8 col-md-8 col-8">
				        	<h2 class="title-sidebar2">
			            		<a href="<?php the_permalink() ?>">
				                    <?php the_title() ?>
				                </a>
				            </h2>
				        </div>
				    </div>

		            <?php
		        endwhile;
		        echo '';
		    endif; wp_reset_query();
		    echo '';
		}
	?>
</div>