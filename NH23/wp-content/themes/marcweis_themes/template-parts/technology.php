<?php
/*

Template Name: Công nghệ page

*/

get_header(); ?>

	<div class="bg-page-NH23-2">
		<div class="container">
			<?php if( have_rows('list-technology') ): ?>
	            <?php while( have_rows('list-technology') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="row list-technology">
	                	<div class="col-lg-6 col-12">
	                		<img class="img-technology" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                	</div>

	                	<div class="col-lg-6 col-12">
	                		<div class="content-check content-technology"><?php the_sub_field('description'); ?></div>
	                	</div>
	                </div>

	            <?php endwhile; ?>
    		<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>