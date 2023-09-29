<?php get_header(); ?>

	<div class="container bg-category">
		<div class="row">
			<div class="col-lg-9 col-12">

				<h1 class="title-single"><?php the_title(); ?></h1>

				<ul class="date-post">
					<li>POSTED ON</li>

					<li class="date"><?php echo get_the_date(); ?></li>
				</ul>

				<div class="content-single"><?php the_content(); ?></div>

				<!-- list social -->

				<ul class="social-single">
					<?php if( have_rows('list-social', 'option') ): ?>
			            <?php while( have_rows('list-social', 'option') ): the_row(); 
			                $link = get_sub_field('link');
			                ?>

			                <li>
								<a href="<?php echo $link;?>" target="_blank">
									<?php echo get_sub_field('icon'); ?>
								</a>
							</li>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</ul>


				<!-- CÙNG CHUYÊN MỤC -->

				<h2 class="title-info title-single2">CÙNG CHUYÊN MỤC</h2>

		       	<?php
				/*
				 * Code hiển thị bài viết liên quan trong cùng 1 category
				 * Code by levantoan.com
				 */
				$categories = get_the_category(get_the_ID());
				if ($categories){
				    echo '<div class="row">';
				    $category_ids = array();
				    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				    $args=array(
				        'category__in' => $category_ids,
				        'post__not_in' => array(get_the_ID()),
				        'posts_per_page' => 3,
				        'order'        => 'date',        
				    );
				    $my_query = new wp_query($args);
				    if( $my_query->have_posts() ):
				       
				        while ($my_query->have_posts()):$my_query->the_post();
				            ?>

								<div class="col-lg-4 col-md-6 col-12">
									<a class="img-category" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>

									<p class="text-category"><?php single_cat_title(); ?></p>

									<h5 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

									<div class="text-category2"><?php the_excerpt(); ?></div>
								</div>


				            <?php
				        endwhile;
				        echo '</div>';
				    endif; wp_reset_query();
					}
					?>

				<iframe name="f17150ad8f65dd4" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v10.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df13b7f863116a18%26domain%3Dwww.garagemoitruongxanh.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.garagemoitruongxanh.com%252Ff28d9c1e2a510f%26relation%3Dparent.parent&amp;container_width=840&amp;height=100&amp;href=https%3A%2F%2Fwww.garagemoitruongxanh.com%2F2021%2F11%2Fchu-ky-bao-duong-xe-tai-inh-ky-theo-km.html&amp;locale=vi_VN&amp;sdk=joey&amp;version=v10.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 253px;" class=""></iframe>
			</div>



			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>