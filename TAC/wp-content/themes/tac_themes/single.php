<?php get_header(); ?>
	<div id="main">

		<div class="container bg-single">
			<h1 class="text-single"><?php the_title(); ?></h1>

	        <img class="line-single" src="<?php bloginfo('template_directory') ?>/images/line.png">

	        <div class="content-single">  
	            <?php the_content(); ?>
	        </div>
		</div>

		<!-- BẠN CÓ THỂ QUAN TÂM -->

		<div class="container bg-single2">
			<h1 class="text-service">BẠN CÓ THỂ QUAN TÂM</h1>

	        <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">


	        <?php
			/*
			 * Code hiển thị bài viết liên quan trong cùng 1 category
			 */
			$categories = get_the_category(get_the_ID());
			if ($categories){
			    echo '<div class="row bg-category">';
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

			            <?php
			        endwhile;
			        echo '</div>';
			    endif; wp_reset_query(); } ?>


		</div>

	</div>

<?php get_footer(); ?>