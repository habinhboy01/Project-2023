<?php
/*

Template Name: Contact page

*/

get_header(); ?>

	<!-- breadcrumb -->

	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<h1><?php the_title(); ?></h1>

				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- -------------- -->

	<div class="mr-top-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">

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
	

	<!-- map -->

	<div class="bg-map">
		<?php the_field('map'); ?>
	</div>


<?php get_footer(); ?>