<?php
/*

	Template Name: Application development

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

	<div class="container-fluid bg-technology">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="content-business"><?php the_field('content-application'); ?></div>
			</div>

			<div class="col-lg-6 col-12">
				<?php 
		        $image = get_field('img');
		        if( !empty( $image ) ): ?>
		            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
			</div>
		</div>


		<!-- ------------------------ -->

		<div class="row bg-technology">
			<?php if( have_rows('content-application2') ): ?>
	            <?php while( have_rows('content-application2') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-6 col-md-6 col-12">
	                	<div class="content-business"><?php the_sub_field('content'); ?></div>

						<img class="img-application" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- -------------------- -->

	<div class="bg-business">
		<div class="container-fluid">
			<h2 class="text-business"><?php echo get_field('contact'); ?></h2>

			<?php echo do_shortcode( '[contact-form-7 id="309" title="contact business"]' ); ?>

		</div>
	</div>

<?php get_footer(); ?>