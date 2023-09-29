<?php get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php the_category(); ?></h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">
				<h1 class="title-single"><?php the_title(); ?></h1>

				<div class="content-intro-page2">
					<?php the_content(); ?>
				</div>
				
				
				<!-- bình luận -->

				<!-- Your like button code -->
				
				<div class="bg-comments">
                    <div class="fb-like" 
                        data-href="https://demo.choulemakeup.vn/tieu-de-1/" 
                        data-width="" 
                        data-layout="button_count" 
                        data-action="like" 
                        data-size="small" 
                        data-share="true">
                    </div>

					<?php 
                    if ( comments_open() || get_comments_number() ) :
                    	comments_template();
                    endif;
                    ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>