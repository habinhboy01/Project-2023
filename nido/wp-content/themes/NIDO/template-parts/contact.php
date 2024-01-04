<?php 

/* template name: Liên hệ */ 

get_header(); ?>
	
	<div class="bg-contact">

		<?php $image = get_field('img-intro');

	    if( !empty( $image ) ): ?>

	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	    <?php endif; ?>
	    	
		<div class="container">
			<div class="bg-contact-2">
	    		<div class="row">
	    			<div class="col-lg-6 col-12">
	    				<h1 class="title-contact"><?php echo get_field('title-contact'); ?></h1>

	    				<div class="description-contact"><?php the_field('description'); ?></div>
	    			</div>

	    			<div class="col-lg-6 col-12">
	    				<div class="bg-form">
	    					<?php echo do_shortcode('[contact-form-7 id="c176318" title="Liên hệ"]'); ?>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
		</div>


    	<!-- Câu hỏi thường gặp -->

    	<div class="container-question">
    		<div class="img-question">
				<?php $image = get_field('img-question');

			    if( !empty( $image ) ): ?>

			        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			    <?php endif; ?>
    		</div>

    		<div class="container-question-2">
    			<h2 class="title-question"><?php echo get_field('title-question'); ?></h2>

    			<ul class="bg-question">
    				<?php if( have_rows('list-question') ): ?>
	            		<?php while( have_rows('list-question') ): the_row(); ?>

	            			<li class="title-list">
	            				<?php echo get_sub_field('title'); ?>

	            				<span class="accordion__arrow"><i class="fa-sharp fa-light fa-angle-up"></i></span>
	            			</li>

	            			<li class="description-contact content-list"><?php the_sub_field('content'); ?></li>

	            		<?php endwhile; ?>
            		<?php endif; ?>
    			</ul>

    			<div class="row">
    				<div class="col-lg-6 col-12">
    					<h3 class="title-map"><?php echo get_field('title-map'); ?></h3>
				
						<?php if( have_rows('list-contact') ): ?>
		            		<?php while( have_rows('list-contact') ): the_row(); ?>

		            			<ul class="list-contact">
			            			<li><?php echo get_sub_field('icon'); ?></li>

			            			<li><?php the_sub_field('text'); ?></li>
			            		</ul>

		            		<?php endwhile; ?>
	            		<?php endif; ?>

    				</div>

    				<div class="col-lg-6 col-12">
    					<div class="map"><?php echo get_field('map'); ?></div>
    				</div>
    			</div>
    		</div>

    		<div class="img-question">
				<?php $image = get_field('img-question-2');

			    if( !empty( $image ) ): ?>

			        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			    <?php endif; ?>
    		</div>
    	</div>
    </div>

<?php get_footer(); ?>



