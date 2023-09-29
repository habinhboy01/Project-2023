<?php
/*

	Template Name: Food & Beverage

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


	<div class="food-beverage">
		<div class="container-fluid">
			<div class="row content-food">
				<?php if( have_rows('food') ): ?>
		            <?php while( have_rows('food') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="col-lg-7 col-12">
		                	<div class="text-about2 content-food2">
		                		<?php the_sub_field('content'); ?>
		                	</div>
		                </div>

		                <div class="col-lg-5 col-12">
		                	<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </div>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Use cases -->

	<div class="container-fluid food-beverage2">
		<div class="row">
			<div class="col-lg-4 col-12">
				<h2 class="text-food"><?php echo get_field('use-cases'); ?></h2>
			</div>

			<div class="col-lg-8 col-12">
				<div class="food-case">
					<?php if( have_rows('list-cases') ): ?>
			            <?php while( have_rows('list-cases') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                ?>

			                <h2 class="text-food2"><?php echo get_sub_field('title');?> <i class="fas fa-chevron-down"></i></h2>

			                <div class="row panel-food">
				                <div class="col-lg-7 col-12">
				                	<div class="text-about2 content-food2">
				                		<?php the_sub_field('content'); ?>
				                	</div>
				                </div>

				                <div class="col-lg-5 col-12">
				                	<img class="img-intro" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                </div>
			                </div>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>


	<!-- CONTACT US -->

	<div class="food-beverage">
		<div class="container-fluid">
			<h2 class="title-services text-technology"><?php echo get_field('contact'); ?></h2>

			<p class="text-technology2"><?php echo get_field('text-contact'); ?></p>

			<div class="row bg-technology">
				<div class="col-lg-6 col-12">
					<?php if( have_rows('list-contact') ): ?>
			            <?php while( have_rows('list-contact') ): the_row(); 
			                $image = get_sub_field('icon');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

			                <ul class="list-contact">

			                	<li class="bg-contact"><img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"></li>

			                	<li>
			                		<h2><?php echo get_sub_field('title'); ?></h2>

			                		<p><?php echo get_sub_field('text'); ?></p>
			                	</li>

			                </ul>

		          		<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="col-lg-6 col-12">
					<?php echo do_shortcode( '[contact-form-7 id="233" title="Contact form 1"]' ); ?>
				</div>
			</div>

		</div>
	</div>


<?php get_footer(); ?>