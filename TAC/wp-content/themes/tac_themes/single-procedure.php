<?php
/*

	Template Name: Themes Procedure
	* Template Post Type: tac
*/
get_header(); ?>
	<div id="main">

		<div class="container plate-solid2">
			<h1 class="text-single"><?php echo get_field('title'); ?></h1>

	        <img class="line-single" src="<?php bloginfo('template_directory') ?>/images/line.png">

	        <div class="plate-solid2">
	        	<?php if( have_rows('description') ): ?>
	                <?php while( have_rows('description') ): the_row(); ?>

	                	<p class="text-plate-solid"><?php the_sub_field('text'); ?></p>

	                	<div class="row">
	                		<?php if( have_rows('list-img') ): ?>
				                <?php while( have_rows('list-img') ): the_row(); 
				                    $image = get_sub_field('img');
				                    $picture = $image['sizes']['thumbnail']; 
				                    ?>

					                <div class="col-lg-6 col-md-6 col-12">
					                    <img class="img-plate-solid" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					                </div>
					                
				                <?php endwhile; ?>
				            <?php endif; ?>
	                	</div>

	                	<p class="text-plate-solid2"><?php the_sub_field('caption'); ?></p>
		                
	                <?php endwhile; ?>
	            <?php endif; ?>
	        </div>

	        <div class="plate-solid">  
	            <?php the_field('content'); ?>
	        </div>
		</div>

	</div>

<?php get_footer(); ?>