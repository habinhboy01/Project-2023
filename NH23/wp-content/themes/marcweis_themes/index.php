<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-intro') ): ?>
            <?php while( have_rows('slider-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<h1 class="title-intro"><?php echo get_sub_field('title'); ?></h1>

                	<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- nh 23 -->

	<div class="bg-nh23">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<?php 
		            $image = get_field('img-nh23');
		            if( !empty( $image ) ): ?>

		                <img class="img-intro2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		            <?php endif; ?>
				</div>

				<div class="col-lg-5 col-md-5 col-12">
					<div class="content-nh23">
						<h1 data-aos="fade-up" data-aos-duration="1000">
							<a href="<?php echo get_field('link-nh23'); ?>">
								<?php echo get_field('title-nh23'); ?>
							</a>
						</h1>

						<?php 
			            $image = get_field('img-clock');
			            if( !empty( $image ) ): ?>

			                <img class="img-intro3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			            <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- list product -->

	<div class="list-product-home">
		<?php if( have_rows('list-product') ): ?>
	        <?php while( have_rows('list-product') ): the_row(); 
	            $image = get_sub_field('img');
	            $picture = $image['sizes']['thumbnail'];
	            $link = get_sub_field('link');
	            ?>

	            <div class="content-product-home" data-aos="fade-down" data-aos-duration="1000">
	            	<a href="<?php echo $link;?>">
	            		<img class="img-book" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	            	</a>
	            </div>

	      	<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<!-- slide img -->
		<div class = "slide-title">
			<?php echo get_field('slide_title') ?>
		</div>
	<div class="owl-carousel owl-theme carousel_2">
		
		<?php if( have_rows('slide-img') ): ?>
            <?php while( have_rows('slide-img') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<div class="slide-img">
                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                	</div>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- Check code chính hãng -->

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<?php 
	            $image = get_field('img-check');
	            if( !empty( $image ) ): ?>

	                <img class="img-intro2" data-aos="zoom-in" data-aos-duration="1000" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	            <?php endif; ?>
			</div>

			<div class="col-lg-6 col-12">
				<div class="content-check" data-aos="zoom-in-up" data-aos-duration="1000"><?php the_field('content-check'); ?></div>
			</div>
		</div>
	</div>

	<!-- About us -->

	<div class="bg-story">
		<?php 
        $image = get_field('img-eiffel');
        if( !empty( $image ) ): ?>

            <img class="img-intro2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <div class="bg-story2" data-aos="fade-up" data-aos-duration="1000">
        	<h2><?php echo get_field('title-story'); ?></h2>

        	<p>
        		<a href="<?php echo get_field('link-about-us'); ?>">
        			<?php echo get_field('about-us'); ?>
        		</a>
        	</p>
        </div>
	</div>

	<!-- banner quảng cáo -->

	<div class="popup-banner">
		<div class="banner-img">
			<a href="<?php echo get_field('link-banner', 'option'); ?>">
				<?php 
	            $image = get_field('banner', 'option');
	            if( !empty( $image ) ): ?>

	                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	            <?php endif; ?>
	        </a>
		</div>
	</div>

<?php get_footer(); ?>