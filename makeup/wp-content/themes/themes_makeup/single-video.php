<?php
/*

 *Template Name: Detail Video
 * Template Post Type: post

*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro', 'option');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1>Video</h1>

			<p><?php echo get_field('description', 'option'); ?></p>
		</div>
	</div>


	<div class="container-fluid bg-intro-page">
    	<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>
    
			<div class="col-lg-9 col-12">
			    <div class="bg-video">
	        		<?php if( get_field('link-youtube') ): ?>
					    <div class="embed-container">
							<?php the_field('link-youtube') ?>
						</div>
					<?php endif; ?>


					<div class="content-video">
					    <h1 class="detail-video"><?php echo get_field('title-video');?></h1>

					    <div class="text-news-home"><?php the_field('content');?></div>
					</div>
			    </div>
			    
			    <!-- bình luận -->

				<!-- Your like button code -->
				
				<div class="bg-comments">
					<div class="fb-like" 
					       data-href="https://demo.choulemakeup.vn/video-4/" 
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