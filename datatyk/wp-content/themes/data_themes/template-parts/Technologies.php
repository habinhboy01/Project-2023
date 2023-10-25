<?php
/*

	Template Name: Technologies

*/
get_header(); ?>

    <div id="main">
    	<div class="page-services">
    	    
    	    <?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>
    	    
        	<div class="content-page-services">
				<h2><?php the_title(); ?></h2>
			</div>
    	    
    	</div>
    	
    	<div class="container-fluid bg-technology bg-footer3">
    		<div class="content-business">
				<?php the_content(); ?>
			</div>
    	 </div>
    </div>

<?php get_footer(); ?>