<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<!-- img banner -->
	
	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-img') ): ?>
            <?php while( have_rows('slider-img') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- giới thiệu chúng tôi -->

	<div class="intro-home">
		<div class="intro-home__text">
			<h1><?php echo get_field('title-intro'); ?></h1>

			<p class="text-intro"><?php echo get_field('text-intro'); ?></p>

			<?php 
            $image = get_field('logo-intro');
            if( !empty( $image ) ): ?>

                <img class="logo-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

            <?php endif; ?>

            <p class="text-intro2"><?php the_field('description'); ?></p>

            <ul class="slogan-intro">
            	<li><img src="<?php bloginfo('template_directory') ?>/images/quote.png"></li>

            	<li><?php echo get_field('slogan-intro');?></li>

            	<li><img src="<?php bloginfo('template_directory') ?>/images/quote-end.png"></li>
            </ul>
		</div>

		<div class="intro-home__img">
			<?php 
            $image = get_field('img-intro');
            if( !empty( $image ) ): ?>

                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

            <?php endif; ?>
		</div>
	</div>

	<!-- khám phá các loại hộp bánh -->

	<div class="bg-discover">
		<div class="container">
			<h2><?php echo get_field('discover'); ?></h2>

			<p class="text-discover"><?php echo get_field('cake-boxes'); ?></p>

			<p class="text-discover2">
				<a href="<?php echo get_field('link-detail-discover'); ?>">
					<?php echo get_field('detail-discover'); ?>
				</a>
			</p>
		</div>
	</div>	


	<!-- list sản phẩm -->

	<div class="bg-prduct-home">
		<div class="container">
			<div class="row">

				<?php
					$product = get_field('list-product');

					$vnkings = new WP_Query(array(
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
					'order' => 'ASC',
					'posts_per_page'=> '8'));
				?>
				<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>

					<div class="col-lg-6 col-md-6 col-12">

						<div class="content-product-home">
							<a class="img-product-home" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

							<h3 class="title-product-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<p class="text-product-home"><?php echo get_field('baking_ingredient'); ?></p>

							<p class="text-price"><?php echo $product->get_price_html(); ?></p>  
						</div>

					</div>
				
				<?php endwhile ; wp_reset_query() ;?>

			</div>
		</div>
	</div>


	<!-- Các Loại Nhân Bánh -->

	<div class="bg-discover">
		<div class="container">
			<h2><?php echo get_field('learn-about'); ?></h2>

			<p class="text-discover"><?php echo get_field('types-of-cake'); ?></p>

			<div class="row">

				<?php
					$product2 = get_field('list-cake');

					$vnkings = new WP_Query(array(
					'post_type'=>'product',
					'post_status'=>'publish',
					'tax_query' => array(
					      array(
					          'taxonomy' => 'product_cat',
					          'field' => 'id',
					          'terms' => $product2,
					      )
					  ),
					'orderby' => 'ID',
					'order' => 'ASC',
					'posts_per_page'=> '8'));
				?>
				<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>

					<div class="col-lg-3 col-md-6 col-6">

						<div class="content-product-home">
							<a class="img-product-home2" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>		
							</a>

							<h3 class="title-product-home2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<p class="text-product-home2"><?php echo get_field('baking_ingredient'); ?></p>

						</div>

					</div>
				
				<?php endwhile ; wp_reset_query() ;?>

			</div>
		</div>
	</div>


	<!-- Khách Hàng Của Chúng Tôi -->

	<div class="bg-prduct-home">
		<div class="container">
			<p class="text-discover text-partner"><?php echo get_field('partner'); ?></p>

			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-partner') ): ?>
		            <?php while( have_rows('list-partner') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<img id="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>