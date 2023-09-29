<div class="bg-sidebar">
	<h2 class="title-sidebar">RELATED POSTS</h2>

	<div class="row">
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

						<div class="col-12">

			                <div class="images-container content-sidebar">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<h1 class="title-details">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

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
</div>