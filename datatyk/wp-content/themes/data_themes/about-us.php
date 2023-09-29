<?php
/*

	Template Name: About Us

*/
get_header(); ?>

	<div class="page-services">
		<?php if( have_rows('title-intro') ): ?>
            <?php while( have_rows('title-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

				<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				<div class="content-page-services">
					<h2><?php echo get_sub_field('title'); ?></h2>

					<p><?php the_sub_field('text'); ?></p>
				</div>

       	    <?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="container about-company">
		<div class="row">

		    <?php if( have_rows('list-about-company') ): ?>
	            <?php while( have_rows('list-about-company') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

					<div class="col-lg-6 col-12">
						<div class="content-about3">
							<p class="text-about"><?php echo get_field('about-company'); ?></p>

							<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

							<div class="text-about2"><?php the_sub_field('content'); ?></div>
						</div>
					</div>


					<div class="col-lg-6 col-12">

						<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- ------------------------ -->

	<div class="bg-about-us">
		<div class="container">
			<div class="row">

			    <?php if( have_rows('list-about-company2') ): ?>
		            <?php while( have_rows('list-about-company2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

						<div class="col-lg-5 col-12">
							<div class="content-about3">
								<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

								<div class="text-about2"><?php the_sub_field('content'); ?></div>

								<h2 class="title-about content-about4"><?php echo get_sub_field('title2'); ?></h2>

								<div class="text-about2"><?php the_sub_field('content2'); ?></div>
							</div>
						</div>

						<div class="col-lg-7 col-12">

							<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

						</div>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


	<!-- OUR CORE VALUES -->

	<div class="container">
		<div class="bg-about-us2">
			<?php 
	        $image = get_field('core-value');
	        if( !empty( $image ) ): ?>
	            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>
	    </div>
	</div>


	<!-- COMMITMENT -->

	<div class="bg-commitment">
		<div class="container-fluid">
		 	<h2 class="title-services"><?php echo get_field('commitment'); ?></h2>

			<p class="text-technology2 text-why-datatyk"><?php echo get_field('text-commitment'); ?></p>

			<div class="row bg-technology">

                <div class="col-lg-6 col-md-6 col-12">
                	<?php if( have_rows('column-commitment') ): ?>
			            <?php while( have_rows('column-commitment') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

                			<img class="img-commitment" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                		<?php endwhile; ?>
					<?php endif; ?>

                </div>


                <div class="col-lg-6 col-md-6 col-12">
                	<?php if( have_rows('column-commitment2') ): ?>
			            <?php while( have_rows('column-commitment2') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

                			<img class="img-commitment" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                		<?php endwhile; ?>
					<?php endif; ?>

                </div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>