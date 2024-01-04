<?php
/*

Template Name: Recruitment page

*/
get_header(); ?>

	<div class="intro-service">
		<?php $image = get_field('img-intro');

        if( !empty( $image ) ): ?>

            <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <h1 class="title-service title-career"><?php the_title(); ?></h1>
	</div>

	<!-- Breadcrumbs -->

	<div class="container">
		<div class="breadcrumb-intro">
			<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

			?>
		</div>
	</div>

	<!-- nội dung -->

	<div class="container mr-bottom">
		<h2 class="title-career-2"><?php the_title(); ?></h2>

		<div class="row">
			<div class="col-lg-4 col-12">
				<?php echo do_shortcode('[csw_search_form]'); ?>
			</div>
			

			<div class="col-lg-8 col-12">
				<table class="tab-recruitment">
					<tr class="title-tab">
						<th><?php echo get_field('title'); ?></th>
						<th><?php echo get_field('title-2'); ?></th>
						<th><?php echo get_field('title-3'); ?></th>
						<th><?php echo get_field('title-4'); ?></th>
						<th>&nbsp;</th>
					</tr>

					<?php if( have_rows('recruitment') ): ?>
			            <?php while( have_rows('recruitment') ): the_row(); ?>

			            	<tr class="list-recruitment">
			            		<td><?php echo get_sub_field('career'); ?></td>
			            		<td><?php echo get_sub_field('area'); ?></td>
			            		<td><?php echo get_sub_field('quantity'); ?></td>
			            		<td><?php echo get_sub_field('salary'); ?></td>
			            		<td class="apply-career">
			            			<a href="<?php echo get_sub_field('link'); ?>">
			            				ỨNG TUYỂN NGAY
			            			</a>
			            		</td>
			            	</tr>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</table>

				<div class="tab-recruitment-2">
					<?php if( have_rows('recruitment') ): ?>
			            <?php while( have_rows('recruitment') ): the_row(); ?>

			            	<div class="tab-recruitment-3">
				            	<p><b><?php echo get_field('title'); ?>:</b> <?php echo get_sub_field('career'); ?></p>

				            	<p><b><?php echo get_field('title-2'); ?>:</b> <?php echo get_sub_field('area'); ?></p>

				            	<p><b><?php echo get_field('title-3'); ?>:</b> <?php echo get_sub_field('quantity'); ?></p>

				            	<p><b><?php echo get_field('title-4'); ?>:</b> <?php echo get_sub_field('salary'); ?></p>

				            	<p class="apply-career">
			            			<a href="<?php echo get_sub_field('link'); ?>">
			            				ỨNG TUYỂN NGAY
			            			</a>
				            	</p>
				            </div>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>