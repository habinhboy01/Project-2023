<?php
/*

	Template Name: Contact us

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
    
    	<!-- Hãy để Datatyk liên hệ bạn -->
    
    	<div class="container-fluid bg-technology">
    		<h1 class="title-contact"><?php echo get_field('title-contact'); ?></h1>
    
    		<div class="text-contact"><?php echo the_field('text-contact'); ?></div>
    
    		<?php echo do_shortcode( '[contact-form-7 id="781" title="contact us"]' ); ?>
    	</div>
    
    
    	<!-- Trở thành đối tác của Datatyk -->
    
    	<div class="partner-datatyk">
    		<?php 
            $image = get_field('img');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="partner-datatyk2">
    			<h2><?php echo get_field('become-partner'); ?></h2>
    
    			<p><?php echo get_field('text-partner'); ?></p>
            </div>
    	</div>
    
    
    	<!-- Liên hệ ngay với chúng tôi -->
    
    	<div class="container-fluid bg-technology">
    		<h2 class="title-contact"><?php echo get_field('text-contact2'); ?></h2>
    
    		<div class="row">
    			<div class="col-lg-4 col-md-6 col-12">
    				<?php if( have_rows('list-contact') ): ?>
    		            <?php while( have_rows('list-contact') ): the_row(); 
    		                $image = get_sub_field('icon');
    		                $picture = $image['sizes']['thumbnail']; 
    		                ?>
    
    		                <div class="contact-data">
    			                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    
    			                <h2><?php echo get_sub_field('title'); ?></h2>
    
    			                <a href="tel:(+84) 906 885 828"><?php the_sub_field('text'); ?></a>
    			            </div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    
    
    			<div class="col-lg-4 col-md-6 col-12">
    				<?php if( have_rows('list-contact2') ): ?>
    		            <?php while( have_rows('list-contact2') ): the_row(); 
    		                $image = get_sub_field('icon');
    		                $picture = $image['sizes']['thumbnail'];
    		                $link = get_sub_field('link');
    		                ?>
    
    		                <div class="contact-data">
    			                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    
    			                <h2><?php echo get_sub_field('title'); ?></h2>
    
    			                <a href="<?php echo $link;?>" target="_blank"><?php the_sub_field('text'); ?></a>
    			            </div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    
    
    			<div class="col-lg-4 col-md-6 col-12">
    				<?php if( have_rows('list-contact3') ): ?>
    		            <?php while( have_rows('list-contact3') ): the_row(); 
    		                $image = get_sub_field('icon');
    		                $picture = $image['sizes']['thumbnail']; 
    		                ?>
    
    		                <div class="contact-data">
    			                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    
    			                <h2><?php echo get_sub_field('title'); ?></h2>
    
    			                <a href="mailto:contact@datayk.com"><?php the_sub_field('text'); ?></a>
    			            </div>
    
    		       	    <?php endwhile; ?>
    				<?php endif; ?>
    			</div>
    		</div>
    	</div>
    
    	<!-- bản đồ -->
    
    	<div class="map-datatyk">
    		<?php echo get_field('map'); ?>
    	</div>
    </div>

<?php get_footer(); ?>