<?php
/*

Template Name: NH23 page

*/

get_header(); ?>

	<div class="bg-page-NH23">
		<?php 
        $image = get_field('img-intro');
        if( !empty( $image ) ): ?>

            <img class="img-intro img-intro-Nh23" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <h1><?php echo get_field('title-intro'); ?></h1>
	</div>

	<!-- --------- -->

	<div class="bg-page-NH23-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php 
			        $image = get_field('img-product');
			        if( !empty( $image ) ): ?>

			            <img class="img-intro2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<div class="description-product-NH23"><?php echo get_field('description-product'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- HIGH-TECH REPAIR-EFFECT -->

	<div class="bg-page-NH23-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<h2 class="title-product"><?php echo get_field('title-product'); ?></h2>

					<div class="description-product-NH23 description-NH23"><?php echo get_field('description-product2'); ?></div>
				</div>

				<div class="col-lg-6 col-12">
					<div class="description-product-NH23"><?php echo get_field('description-product3'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- sản phẩm NH 23 -->

	<div class="bg-page-NH23-2">
		<div class="container">
			<?php
				$cat = 'nh-23';
				$args = array( 
					'post_type' => 'product',
					'posts_per_page' => 4,
					'order' => 'date',
					'product_cat' => $cat
				); 
				global $product;
			?>
			<?php $getposts = new WP_query( $args);?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<div class="row bg-product-nh23">
					<div class="col-lg-6 col-12">

						<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'img-intro2') ); ?>
						
					</div>

					<div class="col-lg-6 col-12">
						<div class="bg-product-nh23-3">
							<div class="description-product-woo">
								<div class="short-description-product-woo">
									<?php
										$short_description = $product->get_short_description();
										$short_description = nl2br(preg_replace("/\n+/", "\n", $short_description));
										echo $short_description;
										?>
								</div>
								<?php
									if ($product->is_type('variable')) {

										woocommerce_variable_add_to_cart();
									}
								else { ?>
									<form class="cart" method="post" enctype='multipart/form-data'>
										<?php
										do_action('woocommerce_before_add_to_cart_button');
										woocommerce_quantity_input(); 
										?>
										<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button> 
										<?php
										do_action('woocommerce_after_add_to_cart_button');
										?>
									</form>
								<?php }?> 
							</div>
						</div>
					</div>
				</div>
				
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</div>

	<!-- -------------------- -->

	<div class="bg-page-NH23-2">
		<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-12">
					<div class="accordion">
						<?php if( have_rows('list-ingredient') ): ?>
							<?php while( have_rows('list-ingredient') ): the_row(); ?>
								
							<div class="accordion__item">
								<div class="accordion__title">
									<div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
									<span class="accordion__title-text"><?php echo get_sub_field('title'); ?></span>
								</div>
								<div class="accordion__content">
									<?php the_sub_field('content'); ?>
								</div>
							</div>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>		
    			</div>

    			<div class="col-lg-6 col-12">
    				<?php 
				    $image = get_field('img-intro2');
				    if( !empty( $image ) ): ?>

				        <img class="img-intro2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				    <?php endif; ?>
    			</div>
    		</div>
    	</div>
	</div>


<?php get_footer(); ?>