<?php

/*
	Template Name: contact page
*/
get_header(); ?>

	<div class="bg-intro">
		<?php 
	    $image = get_field('img-intro');
	    if( !empty( $image ) ): ?>
	        <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>

		<div class="content-intro-page">
			<h1><?php echo get_field('title-page'); ?></h1>

			<p><?php echo get_field('description'); ?></p>
		</div>
	</div>

	<div class="container-fluid bg-intro-page">
		<h2 class="title-contact"><?php echo get_field('title'); ?></h2>

	    <?php if( have_rows('address') ): ?>
            <?php while( have_rows('address') ): the_row(); 
                $link = get_sub_field('link');
                ?>

            	<a class="contact-address" href="<?php echo $link;?>">
            		<?php echo get_sub_field('icon'); ?>

                	<?php echo get_sub_field('text'); ?>
            	</a>

            <?php endwhile; ?>
    	<?php endif; ?>

    	<ul class="list-contact-page">
    		<li>
		    	<?php if( have_rows('phone') ): ?>
		            <?php while( have_rows('phone') ): the_row(); ?>

	                	<a href="tel:+0397 779 868">
	                		<?php echo get_sub_field('icon'); ?>

		                	<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </li>

    		<li>
		    	<?php if( have_rows('mail') ): ?>
		            <?php while( have_rows('mail') ): the_row();
		                $link = get_sub_field('link');
		                ?>

	                	<a href="mailto:choulemakeup@gmail.com">
	                		<?php echo get_sub_field('icon'); ?>

		                	<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </li>

		    <li>
		    	<?php if( have_rows('facebook') ): ?>
		            <?php while( have_rows('facebook') ): the_row();
		                $link = get_sub_field('link');
		                ?>

	                	<a href="<?php echo $link;?>">
	                		<?php echo get_sub_field('icon'); ?>

		                	<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </li>
    	</ul>


    	<h2 class="title-contact"><?php echo get_field('from-contact'); ?></h2>

    	<div class="row">
    		<div class="col-lg-6 col-12">
    		    
    		    <!-- danh sách chi nhánh -->

		    	<ul class="branch-list">
		    		<li><?php echo get_field('title-branch'); ?></li>

		    		<li class="btn-branch">

		    			<?php 
				            $image = get_field('img-branch-1');
				            if( !empty( $image ) ): ?>
				                <img class="img-customer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				            <?php endif; ?>
                        
                        <div>
                            <?php echo get_field('branch-1'); ?>
    		    			
    		    			<p class="btn-address active-branch">Xem vị trí</p>
                        </div>

		    		</li>

		    		<li class="btn-branch">

						<?php 
			            $image = get_field('img-branch-2');
			            if( !empty( $image ) ): ?>
			                <img class="img-customer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>

		    			<div>
                            <?php echo get_field('branch-2'); ?>
    		    			
    		    			<p class="btn-address">Xem vị trí</p>
                        </div>
		    				
		    		</li>
		    		
		    		<li class="btn-branch">

						<?php 
			            $image = get_field('img-branch-3');
			            if( !empty( $image ) ): ?>
			                <img class="img-customer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>

		    			<div>
                            <?php echo get_field('branch-3'); ?>
    		    			
    		    			<p class="btn-address">Xem vị trí</p>
                        </div>
		    				
		    		</li>
		    	</ul>
    		   
    		</div>


    		<div class="col-lg-6 col-12">
    			<div class="map-contact active-map">
    				<?php echo get_field('map'); ?>
    			</div>

    			<div class="map-contact">
    				<?php echo get_field('map-2'); ?>
    			</div>
    			
    			<div class="map-contact">
    				<?php echo get_field('map-3'); ?>
    			</div>
    		</div>
    	</div>

        <div class="row">
    		<div class="col-lg-6 col-12">
    		    <div class="from-contact">
					<?php echo do_shortcode( '[contact-form-7 id="359" title="Contact"]' ); ?>
    			</div>
    		</div>
    		
        	<div class="col-lg-6 col-12"></div>
        </div>
	</div>


<?php get_footer(); ?>
