<?php
/*
	Template Name: support page
*/
get_header(); ?>
	
	<div id="main">

		<div class="bg-support">
			<img class="img-contact3" src="<?php bloginfo('template_directory') ?>/images/img17.png">

			<div class="container bg-support3">
				<div class="bg-support2">
					<div class="row">
						<div class="col-lg-5 col-12">
							<h1 class="text-support"><?php echo get_field('title'); ?></h1>

							<?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
						</div>

						<div class="col-lg-7 col-12">
							<div class="bg-contact">
								<h1><?php echo get_field('name-company'); ?></h1>

								<ul class="list-contact">
									<!-- adress -->

									<?php if( have_rows('address1') ): ?>
							            <?php while( have_rows('address1') ): the_row(); 
							                $link = get_sub_field('link');  ?>

							                <li>
							                	<a href="<?php echo $link;?>" target="_blank">

							                		<?php echo get_sub_field('icon'); ?>

							                		<?php echo get_sub_field('text'); ?>
							                			
							                	</a>
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

	        						<!-- phone -->

	        						<?php if( have_rows('phone1') ): ?>
							            <?php while( have_rows('phone1') ): the_row(); ?>

							                <li>
							                	<a href="tel:(+84) 0274 355 6310-11-12">

							                		<?php echo get_sub_field('icon'); ?>

							                		<?php echo get_sub_field('text'); ?>
							                			
							                	</a>
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

	        						<!-- fax -->

	        						<?php if( have_rows('fax1') ): ?>
							            <?php while( have_rows('fax1') ): the_row(); ?>

							                <li>

							                	<?php echo get_sub_field('icon'); ?>

							                	<?php echo get_sub_field('text'); ?>
							                			
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

								</ul>

								<ul class="list-contact">
									<!-- adress -->

									<?php if( have_rows('address2') ): ?>
							            <?php while( have_rows('address2') ): the_row(); 
							                $link = get_sub_field('link');  ?>

							                <li>
							                	<a href="<?php echo $link;?>" target="_blank">

							                		<?php echo get_sub_field('icon'); ?>

							                		<?php echo get_sub_field('text'); ?>
							                			
							                	</a>
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

	        						<!-- phone -->

	        						<?php if( have_rows('phone2') ): ?>
							            <?php while( have_rows('phone2') ): the_row(); ?>

							                <li>
							                	<a href="tel:(+84) 0274 355 6310-11-12">

							                		<?php echo get_sub_field('icon'); ?>

							                		<?php echo get_sub_field('text'); ?>
							                			
							                	</a>
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

	        						<!-- fax -->

	        						<?php if( have_rows('hotline') ): ?>
							            <?php while( have_rows('hotline') ): the_row(); ?>

							                <li>

							                	<?php echo get_sub_field('icon'); ?>

							                	<?php echo get_sub_field('text'); ?>
							                			
							                </li>

							            <?php endwhile; ?>
	        						<?php endif; ?>

								</ul>

								<?php 
						            $image = get_field('img1');
						            if( !empty( $image ) ): ?>
						                <img class="img-contact" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						        <?php endif; ?>
							</div>


							<?php 
					            $image = get_field('img2');
					            if( !empty( $image ) ): ?>
					                <img class="img-contact2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					        <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>