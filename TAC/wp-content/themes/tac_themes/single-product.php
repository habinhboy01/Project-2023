<?php
	
/*
*Template Name: Trần nhôm - Lam chắn nắng
* Template Post Type: tac
*/

get_header() ?>
	<div id="main">

		<div class="container">
			<div class="detail-product">

				<div class="row">
					<div class="col-lg-7 col-12">
						<?php 
				            $image = get_field('img-product');
				            if( !empty( $image ) ): ?>
				                <img class="img-detail" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				        <?php endif; ?>
					</div>

					<div class="col-lg-5 col-12">
						<div class="content-detail">
							<h1><?php echo get_field('title-product'); ?></h1>

							<?php if( have_rows('short-description') ): ?>
				                <?php while( have_rows('short-description') ): the_row(); ?>

				                	<p><?php echo get_sub_field('text'); ?></p>
					                
				                <?php endwhile; ?>
				            <?php endif; ?>
				        </div>
					</div>
				</div>
			</div>


			<!-- mô tả -->

			<div class="detail-product">
				<?php if( have_rows('description-product') ): ?>
		            <?php while( have_rows('description-product') ): the_row(); ?>

		            	<h2 class="text-detail"><?php echo get_sub_field('title'); ?></h2>

		            	<p class="text-detail2"><?php the_sub_field('content'); ?></p>
		                
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>


			<!-- Cấu tạo sản phẩm -->

			<div class="detail-product">
				<h2 class="text-detail"><?php echo get_field('structure'); ?></h2>

				<?php 
		            $image = get_field('img-structure');
		            if( !empty( $image ) ): ?>
		                <img class="img-detail" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
			</div>


			<!-- màu sắc -->

			<div class="detail-product">

				<div class="row">
					<?php if( have_rows('color') ): ?>
		                <?php while( have_rows('color') ): the_row(); 
		                    $image = get_sub_field('img');
		                    $picture = $image['sizes']['thumbnail']; 
		                    ?>
		 							
	 						<h2 class="text-detail"><?php echo get_sub_field('title'); ?></h2>

	 						<p class="text-detail2"><?php the_sub_field('content'); ?></p>

		                    <img class="img-detail" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
			                
		                <?php endwhile; ?>
		            <?php endif; ?>
		        </div>
			</div>


			<!-- Thư viện ảnh -->

			<div class="detail-product">
				<h2 class="text-detail"><?php echo get_field('library'); ?></h2>

				<div class="row">
					<?php if( have_rows('library-img') ): ?>
		                <?php while( have_rows('library-img') ): the_row(); 
		                    $image = get_sub_field('img');
		                    $picture = $image['sizes']['thumbnail']; 
		                    ?>
		 							
	 						<div class="col-lg-2 col-md-4 col-4">
		                    	<img class="img-detail2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                    </div>
			                
		                <?php endwhile; ?>
		            <?php endif; ?>
		        </div>
			</div>

			<!-- Download -->

			<div class="detail-product">
				<h2 class="text-detail"><?php echo get_field('download'); ?></h2>

				<?php if( have_rows('list-download') ): ?>
	                <?php while( have_rows('list-download') ): the_row(); 
	                    $link = get_sub_field('link');
	                    ?>
	 					
	 					<div class="link-download">	
		                    <a href="<?php echo $link['url'];?>" target="_blank">
								<i class="fas fa-file-alt"></i>

								<?php echo get_sub_field('text'); ?>
		                    </a>
		                </div>
		                
	                <?php endwhile; ?>
	            <?php endif; ?>
			</div>

		</div>

		<!-- xem phẩm khác -->

		<div class="container content-product3">

	    	<h1 class="text-service"><?php echo get_field('other-products'); ?></h1>

	        <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

	        <div class="row">
	            <?php if( have_rows('list-other-products') ): ?>
	                <?php while( have_rows('list-other-products') ): the_row(); 
	                    $image = get_sub_field('img');
	                    $picture = $image['sizes']['thumbnail'];
	                    $link = get_sub_field('link');
	                    ?>

	                    <div class="col-lg-6 col-md-6 col-12">
	                        <div class="content-product">
	                            <a href="<?php echo $link['url'];?>" target="_blank">
	                               <img class="img-product" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                               <div class="content-product2">

	                                    <img src="<?php bloginfo('template_directory') ?>/images/img40.png">

	                                    <h1><?php echo get_sub_field('title'); ?></h1>

	                                </div>
	                            </a>
	                        </div>
	                    </div>

	                <?php endwhile; ?>
	            <?php endif; ?>
	        </div>
	    </div>

	</div>

<?php get_footer(); ?>