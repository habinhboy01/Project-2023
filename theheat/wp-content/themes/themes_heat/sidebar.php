	
<div class="bg-sidebar">
	<p>Danh mục</p>

	<?php wp_nav_menu (
	array('theme_location' => 'menu-3', 'menu_class' => 'menu-category'));?>
</div>


<div class="bg-sidebar">
	<p>Bài viết liên quan</p>

	<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category

		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '<div class="row">';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 2,
		        'order'        => 'ASC',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		       
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>

		            <div class="col-lg-4 col-md-4 col-4">
	            		<a class="img-sidebar" href="<?php the_permalink(); ?>">
	    					<?php the_post_thumbnail('full'); ?>             						
	    				</a>
			        </div>

			        <div class="col-lg-8 col-md-8 col-8">
			        	<h2 class="title-recently">
		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h2>
			        </div>

		            <?php
		        endwhile;
		        echo '</div>';
		    endif; wp_reset_query();
		    echo '</div>';
		}
	?>
</div>