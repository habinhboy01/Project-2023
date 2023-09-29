<?php
/*

Template Name: contact page

*/

get_header(); ?>
	
	<div class="bg-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<ul class="list-contact-page">
						<?php if( have_rows('list-contact') ): ?>
				            <?php while( have_rows('list-contact') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>

				                <li>
				                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                	<div>
					                	<h3><?php echo get_sub_field('title'); ?></h3>

					                	<p><?php echo get_sub_field('text'); ?></p>
					                </div>

				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </ul>
				</div>

				<div class="col-lg-6 col-md-6 col-12">
					<div class="map-contact">
						<?php echo get_field('map'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>