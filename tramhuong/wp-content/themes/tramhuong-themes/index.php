<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="container-fluid">
		<div class="container-intro">
			<?php $image = get_field('img-intro');

	        if( !empty( $image ) ): ?>

	            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	        <?php endif; ?>
	    </div>
	</div>

	<!-- -------------- -->

	<div class="container container-list-intro">
		<div class="row">
			<?php if( have_rows('list-intro') ): ?>
	            <?php while( have_rows('list-intro') ): the_row(); ?>

	                <div class="col-lg-4 col-12">

	                	<div class="list-intro">
		                	<span><?php echo get_sub_field('icon'); ?></span>

		                	<h2><?php echo get_sub_field('number'); ?></h2>

		                	<p><?php echo get_sub_field('text'); ?></p>
		                </div>

	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- về chúng tôi -->

	<div class="container mr-top">
		<div class="row">
			<div class="col-lg-6 col-12">
				<h1 class="title-home"><?php echo get_field('title-about-us'); ?></h1>

				<div class="content-home"><?php the_field('content-about-us'); ?></div>
			</div>

			<div class="col-lg-6 col-12">
				<?php $image = get_field('img-about-us');

		        if( !empty( $image ) ): ?>

		            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		        <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- LỢI ÍCH KHÁCH HÀNG NHẬN ĐƯỢC -->

	<div class="bg-benefits">
		<div class="container-fluid">
			<h2 class="title-home title-home2 text-center"><?php echo get_field('title-benefits'); ?></h2>

			<p class="text-home text-center"><?php echo get_field('description-benefits'); ?></p>

			<div class="row">
				<?php if( have_rows('list-benefits') ): ?>
		            <?php while( have_rows('list-benefits') ): the_row(); ?>

		                <div class="col-lg-6 col-md-6 col-12">

		                	<ul class="list-benefits">
			                	<li><?php echo get_sub_field('icon'); ?></li>

			                	<li>
				                	<h2><?php echo get_sub_field('title'); ?></h2>

				                	<p><?php the_sub_field('content'); ?></p>
				                </li>
			                </ul>

		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- sản phẩm -->

	<div class="container mr-top">
		<h2 class="title-home title-home3 text-center"><?php echo get_field('title-product'); ?></h2>

		<?php
			$orderby = 'ID';
			$order = 'asc';
			$hide_empty = false ;
			$cat_args = array(
			    'orderby'    => $orderby,
			    'order'      => $order,
			    'hide_empty' => $hide_empty,
			);
			 
			$product_categories = get_terms( 'product_cat', $cat_args );
			 
			if( !empty($product_categories) ){
			    echo '
			 
			<div class="row">';
			    foreach ($product_categories as $key => $category) {
			        echo '
			 
			<div class="col-lg-4 col-md-6 col-12">';
		        echo '<div class="home-product" >';
		        echo '<a href="'.get_term_link($category).'" >';
		        $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
		        // get the image URL for parent category
		        $image = wp_get_attachment_url($thumbnail_id);

		        echo "<img src='{$image}' alt='' />";
		        echo '<h3 class="title-product-home">' . $category->name . '</h3>';
		        echo '</div>';
		        echo '</a>';
		        echo '</div>';
			    }
			echo '</div>		  
			 
			';
			}
								
		?>

		<div class="link-detail-product">
			<a href="<?php echo get_field('link-detail-product'); ?>">
				<?php echo get_field('detail-product'); ?>
				
				<i class="fas fa-shopping-basket"></i>
			</a>
		</div>
	</div>

	<!-- quá trình sản xuất -->

	<div class="container mr-top mr-top2" style="display:none">
		<h1 class="title-home text-center"><?php echo get_field('title-process'); ?></h1>

		<div class="row">
			<?php if( have_rows('production-process') ): ?>
	            <?php while( have_rows('production-process') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-6 col-12">
	                	<div class="content-process">
		                	<div class="row">
		                		<div class="col-lg-4 col-md-4 col-12">
		                			 <img class="img-process" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                		</div>

		                		<div class="col-lg-8 col-md-8 col-12">
		                			<h3 class="title-process"><?php echo get_sub_field('title'); ?></h3>

		                			<p class="text-process"><?php the_sub_field('content'); ?></p>
		                		</div>
		                	</div>
		                </div>             	
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- Đối Tác Của Chúng Tôi -->

	<div class="bg-partner">
		<div class="container">
			<h2 class="title-home title-home3 text-center"><?php echo get_field('title-partner'); ?></h2>

			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-partner') ): ?>
		            <?php while( have_rows('list-partner') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<img class="img-partner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		            <?php endwhile; ?>
	    		<?php endif; ?>
			</div>
		</div>
	</div>
	
	<!--phản hồi khách hàng-->
	   
	 <div class="mr-top">
    	<div class="container">
    		<h2 class="title-home title-home3 text-center"><?php echo get_field('feedback'); ?></h2>
    
    		<div class="owl-carousel owl-theme carousel_3">
    			<?php if( have_rows('list-feedback') ): ?>
    	            <?php while( have_rows('list-feedback') ): the_row(); ?>
    
    	                <div class="item">
                            <div class="list-feedback">
                                <p><?php the_sub_field('content'); ?></p>
                                
                                <h3><?php echo get_sub_field('title'); ?></h3>
                            </div>
    	                </div>
    
    	            <?php endwhile; ?>
        		<?php endif; ?>
    		</div>
    	</div>
    </div>


<?php get_footer(); ?>