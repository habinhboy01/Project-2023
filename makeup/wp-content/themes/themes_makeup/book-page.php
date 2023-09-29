<?php

/*
	Template Name: book page
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
	    
	    <div class="text-book-page">
	        <?php the_field('content'); ?>
	    </div>
	    

    	<!-- xem thêm -->

    	<ul class="learn-more-book">
    		<?php if( have_rows('learn-more') ): ?>
	            <?php while( have_rows('learn-more') ): the_row(); 
	                $link = get_sub_field('link');
	                ?>

	                <li>
	                	<a href="<?php echo $link['url'];?>">
		                	<?php echo get_sub_field('text'); ?>
	                	</a>
	                </li>

	            <?php endwhile; ?>
	    	<?php endif; ?>
    	</ul>

		<div class="book-makeup book-page">
	    	<h2>ĐẶT LỊCH MAKEUP</h2>

	    	<p>Giữ chỗ trước, thanh toán sau, không cần cọc</p>

	    	<?php echo do_shortcode( '[contact-form-7 id="95" title="Book Makeup"]' ); ?>
	    </div>

	    <ul class="list-advise">
	    	<li>
		    	<?php if( have_rows('messenger') ): ?>
		            <?php while( have_rows('messenger') ): the_row();
		            	$image = get_sub_field('icon');
		                $picture = $image['sizes']['thumbnail'];
		                $link = get_sub_field('link');
		                ?>

	                	<a href="<?php echo $link;?>">
	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                	<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </li>

		    <li>
		    	<?php if( have_rows('phone') ): ?>
		            <?php while( have_rows('phone') ): the_row(); 
		            	$image = get_sub_field('icon');
		                $picture = $image['sizes']['thumbnail'];
		            	?>

	                	<a href="tel:+0397 779 868">
	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                	<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
		    </li>
	    </ul>
	</div>

<?php get_footer();?>