<?php
/*

Template Name: Contact page

*/

get_header(); ?>
	
	<div class="bg-breadcrumb">
		<div class="container">
			<div class="breadcrumb-intro">
				<?php

					if ( function_exists('yoast_breadcrumb') ) {

					 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

					}

				?>
			</div>
		</div>
	</div>

	<!-- --------------- -->

	<div class="bg-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-12">

					<?php if( have_rows('list-contact') ): ?>
			            <?php while( have_rows('list-contact') ): the_row(); ?>

			            	<ul class="list-contact">
			            		<li><?php echo get_sub_field('icon'); ?></li>

				                <li>
				                	<h4><?php echo get_sub_field('title'); ?></h4>

				                	<p><?php echo get_sub_field('text'); ?></p>
				                </li>
				            </ul>

			            <?php endwhile; ?>
		    		<?php endif; ?>

				</div>

				<div class="col-lg-7 col-12">
					<h2 class="title-home text-center"><?php echo get_field('get-advice'); ?></h2>

					<div class="form-advice form-contact">
						<?php echo do_shortcode( '[contact-form-7 id="584d3cd" title="Get Advice"]' ); ?>
					</div>

					<ul class="list-social-contact">
						<?php if( have_rows('list-social') ): ?>
			            	<?php while( have_rows('list-social') ): the_row(); ?>

			            		<li>
			            			<a href="<?php echo get_sub_field('link'); ?>">
			            				<?php echo get_sub_field('icon'); ?>
			            			</a>
			            		</li>

			            	<?php endwhile; ?>
		    			<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- map -->

	<div class="bg-map">
		<?php echo get_field('map'); ?>
	</div>

<?php get_footer(); ?>