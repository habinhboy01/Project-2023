<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1">
		<?php if( have_rows('slider-intro') ): ?>
            <?php while( have_rows('slider-intro') ): the_row(); 
                $image = get_sub_field('img-intro');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<!-- Our Services -->

	<div class="container mr-top">
		<p class="category-page text-center"><?php echo get_field('category-services'); ?></p>

		<h1 class="title-page text-center"><?php echo get_field('title-services'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-services') ): ?>
	            <?php while( have_rows('list-services') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<div class="list-services">
	                		<div class="list-services2">
		                		<h3><?php echo get_sub_field('title'); ?></h3>

		                		<p><?php the_sub_field('description'); ?></p>

		                		<a href="<?php echo get_sub_field('link'); ?>">
		                			<?php echo get_sub_field('learn-more'); ?>
		                		</a>
		                	</div>

	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                	</div>
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- PRODUCTS -->

	<div class="bg-product-home">
		<div class="container">
			<p class="category-page category-page2 text-center"><?php echo get_field('category-product'); ?></p>

			<h1 class="title-page category-page2 text-center"><?php echo get_field('title-product'); ?></h1>

			<div class="row">
				<?php if( have_rows('list-product') ): ?>
		            <?php while( have_rows('list-product') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="col-lg-4 col-md-6 col-12">
		                	<a href="<?php echo get_sub_field('link'); ?>">     		
		                		<div class="list-product-home">
		                			<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                		<h3><?php echo get_sub_field('title'); ?></h3>

			                		<p><?php the_sub_field('description'); ?></p>
			                	</div>
		                	</a>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- AbOUT US -->

	<div class="bg-about-us">
		<div class="container">
			<p class="category-page"><?php echo get_field('about-us'); ?></p>

			<h1 class="title-page title-page2"><?php echo get_field('title-about-us'); ?></h1>

			<div class="row bg-about-us-2">
				<div class="col-lg-6 col-12">
					<div class="description-about-us"><?php the_field('description-about-us'); ?></div>
				</div>

				<div class="col-lg-6 col-12 bg-about-us-3">
					<?php $image = get_field('img-about-us');

			        if( !empty( $image ) ): ?>

			            <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>
			</div>

			<!-- ---------------- -->

			<div class="row">
				<div class="col-lg-6 col-12 bg-about-us-3">
					<?php $image = get_field('img-about-us2');

			        if( !empty( $image ) ): ?>

			            <img class="img-about-us" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<div class="description-about-us"><?php the_field('description-about-us-2'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Projects -->

	<div class="container mr-top">
		<p class="category-page"><?php echo get_field('our-projects'); ?></p>

		<h1 class="title-page title-page2"><?php echo get_field('title-projects'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-projects') ): ?>
	            <?php while( have_rows('list-projects') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-3 col-md-6 col-12">
	                	     		
                		<div class="list-projects-home">
                			<a href="<?php echo get_sub_field('link'); ?>">
                				<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                			</a>

                			<a href="<?php echo get_sub_field('link'); ?>">
	                			<h3><?php echo get_sub_field('title'); ?></h3>
	                		</a>

	                		<p><?php the_sub_field('description'); ?></p>
	                	</div>

	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- Major Client -->

	<div class="bg-about-us">
		<div class="container">
			<h1 class="title-page text-center"><?php echo get_field('title-client'); ?></h1>

			<div class="owl-carousel owl-theme carousel_2">
				<?php if( have_rows('list-client') ): ?>
		            <?php while( have_rows('list-client') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="item">
		                	<div class="img-client">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Contact Us -->

	<div class="mr-top-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<p class="category-page"><?php echo get_field('contact-us'); ?></p>

					<h1 class="title-page title-page3"><?php echo get_field('title-contact'); ?></h1>

					<p class="description-contact"><?php the_field('description-contact'); ?></p>
					
					<div class="contact-home">
						<?php if( have_rows('list-contact') ): ?>
				            <?php while( have_rows('list-contact') ): the_row(); ?>

				            	<ul class="list-contact-home">
					                <li><?php echo get_sub_field('icon'); ?></li>

					                <li>
					                	<h3><?php echo get_sub_field('title'); ?></h3>

					                	<p class="description-contact"><?php echo get_sub_field('text'); ?></p>
					                </li>
					            </ul>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </div>
				</div>

				<div class="col-lg-6 col-12">
					<div class="form-contact-home">
						<?php echo do_shortcode( '[contact-form-7 id="6dbf51b" title="contact home"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>