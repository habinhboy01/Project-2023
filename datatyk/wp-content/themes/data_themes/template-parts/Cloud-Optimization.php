<?php
/*

	Template Name: Cloud Optimization

*/
get_header(); ?>

    <div id="main">
    	<div class="page-services">
    	    
    	    <?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>
    	    
        	<div class="content-page-services">
				<h2><?php the_title(); ?></h2>
				
				<p><?php the_field('description'); ?></p>
			</div>
    	    
    	</div>
    	
    	<div class="container-fluid bg-technology bg-footer3">
    		<div class="content-business">
				<?php the_content(); ?>
			</div>
    	</div>
    	 
    	<!-- OUR CLIENT -->
    
    	<div class="container-fluid bg-technology">
    		<h2 class="title-services text-technology"><?php echo get_field('our-client', 'option'); ?></h2>
    
    		<div class="owl-carousel owl-theme carousel_1">
    			<?php if( have_rows('list-our-client', 'option') ): ?>
    	            <?php while( have_rows('list-our-client', 'option') ): the_row(); 
    	                $image = get_sub_field('img');
    	                $picture = $image['sizes']['thumbnail'];
    	                ?>
    
    	                <div class="item">
    
    	                	<img id="logo-client" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    
    	                </div>
    
              		<?php endwhile; ?>
    			<?php endif; ?>
    		</div>
    	</div>
    	
    	<!-- CONTACT US -->
    
    	<div class="container-fluid bg-technology bg-footer3">
    		<h2 class="title-services text-technology"><?php echo get_field('contact', 'option'); ?></h2>
    
    		<p class="text-technology2"><?php echo get_field('text-contact', 'option'); ?></p>
    
    		<div class="row bg-technology">
    			<div class="col-lg-6 col-12">
    				<?php if( have_rows('list-contact', 'option') ): ?>
    		            <?php while( have_rows('list-contact', 'option') ): the_row(); 
    		                $image = get_sub_field('icon');
    		                $picture = $image['sizes']['thumbnail'];
    		                ?>
    
    		                <ul class="list-contact">
    
    		                	<li class="bg-contact"><img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"></li>
    
    		                	<li>
    		                		<h2><?php echo get_sub_field('title'); ?></h2>
    
    		                		<p><?php echo get_sub_field('text'); ?></p>
    		                	</li>
    
    		                </ul>
    
    	          		<?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    
    			<div class="col-lg-6 col-12">
    				<?php echo do_shortcode( '[contact-form-7 id="780" title="Contact form 1"]' ); ?>
    			</div>
    		</div>
    
    	</div>
    </div>

<?php get_footer(); ?>