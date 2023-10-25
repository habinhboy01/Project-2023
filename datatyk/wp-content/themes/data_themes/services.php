<?php
/*
	
	Template Name: Services

*/
get_header(); ?>
    <div id="main">
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
    
    	<div class="container-fluid bg-technology bg-footer3">
    		<div class="row">
    			<?php if( have_rows('list-services') ): ?>
    	            <?php while( have_rows('list-services') ): the_row(); 
    	                $image = get_sub_field('icon');
    	                $picture = $image['sizes']['thumbnail'];
    	                $link = get_sub_field('link');
    	                ?>
    
    	                <div class="col-lg-6 col-md-6 col-12">
    	                	<div class="list-services-page">
    		                	<div>	
    		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    		                	</div>
    
    		                	<h2><?php echo get_sub_field('title') ?></h2>
    
    		                	<p><?php echo get_sub_field('text') ?></p>
    
    							<a href="<?php echo $link['url'];?>">
    								<?php echo get_sub_field('demo') ?>
    							</a>
    						</div>
    					</div>
    	       	    <?php endwhile; ?>
    			<?php endif; ?>
    		</div>
    	</div>
    </div>

<?php get_footer(); ?>