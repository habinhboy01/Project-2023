<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider') ): ?>
            <?php while( have_rows('slider') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- thông tin hỗ trợ -->

	<div class="container">
		<div class="sp-info">
			<h1 class="title-support"><?php echo get_field('support-information'); ?></h1>

			<ul class="list-support">
				<li class="tab-item active-item">
					<i class="fas fa-users"></i>

					<?php echo get_field('title-info'); ?>
				</li>

				<li class="tab-item">
					<i class="fas fa-wrench"></i>

					<?php echo get_field('title-info2'); ?>
				</li>

				<li class="tab-item">
					<i class="fas fa-star"></i>

					<?php echo get_field('title-info3'); ?>
				</li>

				<li class="tab-item">
					<i class="fas fa-wrench"></i>

					<?php echo get_field('title-info4'); ?>
				</li>
			</ul>


			<!-- nội dung -->

			<!-- content 1 -->

			<div class="content-support active-content">
				<div class="row">
					<?php if( have_rows('list-support') ): ?>
			            <?php while( have_rows('list-support') ): the_row(); ?>

			                <div class="col-lg-4 col-md-6 col-12">
			                	<div class="list-support-info">
			                		<h2><?php echo get_sub_field('title'); ?></h2>

			                		<h2><?php echo get_sub_field('text'); ?></h2>

			                		<p><?php echo get_sub_field('text2'); ?></p>
			                	</div>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>

			<!-- content 2 -->

			<div class="content-support">
				<div class="row">
					<?php if( have_rows('list-support2') ): ?>
			            <?php while( have_rows('list-support2') ): the_row(); ?>

			                <div class="col-lg-4 col-md-6 col-12">
			                	<div class="list-support-info">
			                		<h2><?php echo get_sub_field('title'); ?></h2>

			                		<h2><?php echo get_sub_field('text'); ?></h2>

			                		<p><?php echo get_sub_field('text2'); ?></p>
			                	</div>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>


			<!-- content 3 -->

			<div class="content-support">
				<div class="row">
					<?php if( have_rows('list-support3') ): ?>
			            <?php while( have_rows('list-support3') ): the_row(); ?>

			                <div class="col-lg-4 col-md-6 col-12">
			                	<div class="list-support-info">
			                		<h2><?php echo get_sub_field('title'); ?></h2>

			                		<h2><?php echo get_sub_field('text'); ?></h2>

			                		<p><?php echo get_sub_field('text2'); ?></p>
			                	</div>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>

			<!-- content 4 -->

			<div class="content-support">
				<div class="row">
					<?php if( have_rows('list-support4') ): ?>
			            <?php while( have_rows('list-support4') ): the_row(); ?>

			                <div class="col-lg-4 col-md-6 col-12">
			                	<div class="list-support-info">
			                		<h2><?php echo get_sub_field('title'); ?></h2>

			                		<h2><?php echo get_sub_field('text'); ?></h2>

			                		<p><?php echo get_sub_field('text2'); ?></p>
			                	</div>
			                </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>
		</div>
	</div>


	<!-- sản phẩm -->

	<div class="bg-product-home">
		<div class="container">
			<h1 class="title-support title-product"><?php echo get_field('title-product'); ?></h1>

			<!-- row 1 -->

			<div class="row">
				<?php if( have_rows('row-product') ): ?>
		            <?php while( have_rows('row-product') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail'];
		                $link = get_sub_field('link');
		                ?>

		                <div class="col-lg-6 col-md-6 col-12">
		                	<div class="content-product">
			                	<a href="<?php echo $link;?>">
			                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                		<p><?php echo get_sub_field('name-product'); ?></p>
			                	</a>
			                </div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>

			<!-- row 2 -->

			<div class="row">
				<?php if( have_rows('row-product2') ): ?>
		            <?php while( have_rows('row-product2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail'];
		                $link = get_sub_field('link');
		                ?>

		                <div class="col-lg-4 col-md-4 col-12">
		                	<div class="content-product">
			                	<a href="<?php echo $link;?>">
			                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                		<p><?php echo get_sub_field('name-product'); ?></p>
			                	</a>
			                </div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>


	<!-- sản phẩm mới -->

	<div class="container">
		<div class="sp-info">
			<h1 class="title-support title-product"><?php echo get_field('title-product2'); ?></h1>

			<div class="owl-carousel owl-theme carousel_2">
                <?php
                    $categories = get_terms( 'category-product' );
                     
                    foreach ( $categories as $category ):
                     
                        $services = new WP_Query(
                            array(
                            'post_type' => 'product-oripu',
                            'showposts' => -1,
                            'posts_per_page' => 10,
                            'orderby' => 'date',
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'category-product',
                                'terms' => array( $category->slug ),
                                'field' => 'slug'
                                )
                            )
                        )
                    );
                ?>
                <?php while( $services->have_posts() ) : $services->the_post(); ?>

            		<div class="item">
	                	<div class="content-product-new">
	                		<a href="<?php the_permalink(); ?>">
	                			<?php the_post_thumbnail('full'); ?>
	                		</a>

	                		<h3>
	                			<a href="<?php the_permalink(); ?>">
	                				<?php the_title() ?>
	                			</a>
	                		</h3>

							<div class="content-single-oripu text-product-new"><?php the_field('detail'); ?></div>
	                	</div>          		
	                </div>

                <?php endwhile; ?>
                <?php
                $services = null;
                wp_reset_postdata();
                endforeach;
                ?>
            </div>

		</div>
	</div>

<?php get_footer(); ?>