<div class="bg-sidebar">	

	<?php echo do_shortcode('[wp_search_form]'); ?>

	<!-- Category -->

	<div class="menu-category">
		<h1 class="text-sidebar"><?php echo get_field('category', 'option'); ?></h1>

		<p class="line-sidebar"></p>

		<?php wp_nav_menu (
		array('theme_location' => 'menu-3', 'menu_class' => 'list-menu-category'));?>
	</div>

	<!-- Recent Post -->

	<div class="menu-category">
		<h1 class="text-sidebar"><?php echo get_field('recent_post', 'option'); ?></h1>

		<p class="line-sidebar"></p>

		<div class="row">
			<?php
	            $args = array(
	                'post_status' => 'publish',
	                'post_type' => 'post',
	                'orderby' => 'post_date',
	                'posts_per_page' => 3,
	                'order' => 'ASC',
	            ); 
	        ?>
	            <?php $getposts = new WP_query($args); ?>
	            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	            <?php if (have_posts()) : ?>
	            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            	<div class="col-lg-5 col-md-5 col-12 recent-post">
	            		<a class="img-sidebar" href="<?php the_permalink(); ?>">
	                    	<?php the_post_thumbnail('full'); ?>	
	                    </a>
	            	</div>

	            	<div class="col-lg-7 col-md-7 col-12 recent-post">
	            		<a class="text-sidebar2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

	            		<p class="text-sidebar3">
	            			<img src="<?php bloginfo('template_directory') ?>/images/icon5.png">

	            			<?php echo get_the_date(); ?>
	            		</p>
	            	</div>

	            <?php endwhile; wp_reset_postdata(); ?>
	        <?php endif; ?>
	    </div>
	</div>


	<!-- support -->

	<div class="contact-sidebar">
		<?php 
        $image = get_field('img-support', 'option');
        if( !empty( $image ) ): ?>
            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="contact-sidebar2">
        	<?php if( have_rows('contact-sidebar','option') ): ?>
	            <?php while( have_rows('contact-sidebar','option') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                <p class="text-sidebar4"><?php echo get_sub_field('text'); ?></p>

	                <p class="text-sidebar5"><?php echo get_sub_field('text2'); ?></p>

	                <p class="text-sidebar6"><?php echo get_sub_field('text3'); ?></p>

	         	<?php endwhile; ?>
			<?php endif; ?>
        </div>
	</div>


	<!-- tag -->

	<div class="menu-category">
		<h1 class="text-sidebar"><?php echo get_field('tag', 'option'); ?></h1>

		<p class="line-sidebar"></p>

		<?php wp_nav_menu (
		array('theme_location' => 'menu-4', 'menu_class' => 'list-tags'));?>

	</div>
</div>