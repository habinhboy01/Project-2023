<?php get_header(); ?>

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

	<div class="container bg-single">
		<div class="img-news">		
			<?php the_post_thumbnail('full'); ?>		
		</div>

		<h3 class="title-single"><?php the_title(); ?></h3>

		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="content-single"><?php the_content(); ?></div>
			</div>

			<div class="col-lg-4 col-12">
				<div class="bg-contact-sidebar">
					<h3 class="title-sidebar">CẦN TƯ VẤN HOẶC NHẬN BÁO GIÁ?</h3>

					<ul class="list-contact-sidebar">
						<?php if( have_rows('list-contact', 'option') ): ?>
				            <?php while( have_rows('list-contact', 'option') ): the_row(); ?>

				            	<li>
				            		<?php echo get_sub_field('icon'); ?>
				            		
				            		<?php echo get_sub_field('text'); ?>
				            	</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </ul>

				    <h3 class="title-sidebar">HOẶC DỂ LẠI THÔNG TIN</h3>

				    <p class="text-sidebar">Chúng tôi sẽ liên hệ lại bạn</p>

					<?php echo do_shortcode( '[contact-form-7 id="f23c984" title="Liên hệ"]' ); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>