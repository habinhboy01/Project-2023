<?php
/*

Template Name: intro page

*/

get_header(); ?>

	<div class="bg-intro">
		<div class="content-intro">

			<h1><?php echo get_field('about-us'); ?></h1>

			<p><?php the_field('content-about-us'); ?></p>
		</div>

		<div class="img-intro-page">
			<?php 
                $image = get_field('img-company');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
		</div>
	</div>


	<!-- Về chúng tôi CÔNG TY TNHH ORIPU -->

	<div class="container">
		<div class="row bg-company">
			<div class="col-lg-6 col-md-6 col-12">
				<?php 
	                $image = get_field('img-company2');
	                if( !empty( $image ) ): ?>
	                    <img class="img-company" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            <?php endif; ?>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<div class="about-us">
					<p class="text-about"><?php echo get_field('about-us'); ?></p>

					<h2><?php echo get_field('name-company'); ?></h2>

					<p><?php the_field('content-about-us'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Sundray X-LINK -->

	<div class="bg-sundray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="content-sundray">
						<div class="line-sundray"></div>

						<h1><?php echo get_field('title-sundray'); ?></h1>

						<p class="text-sundray"><?php the_field('text-sundray'); ?></p>

						<p class="text-sundray2"><?php the_field('content-sundray'); ?></p>

						<?php if( have_rows('learn-more') ): ?>
				            <?php while( have_rows('learn-more') ): the_row(); 
				                $link = get_sub_field('link');
				                ?>

			                	<a class="learn-more-sundray" href="<?php echo $link;?>">
			                		<?php echo get_sub_field('text'); ?>
			                	</a>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </div>
				</div>


				<div class="col-lg-6 col-12">
					<?php 
		                $image = get_field('img-sundray');
		                if( !empty( $image ) ): ?>
		                    <img class="img-company img-sundray" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- slider partner -->

	<div class="container">
		<div class="owl-carousel owl-theme carousel_3">
			<?php if( have_rows('slider-partner') ): ?>
	            <?php while( have_rows('slider-partner') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="item">
	                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
	    </div>
	</div>

<?php get_footer(); ?>