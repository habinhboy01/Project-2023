	<h3 class="title-sidebar"><?php echo get_field('title-category', 'option'); ?></h3>

	<ul class="list-category">
		<?php
		$args = array(
		    'child_of'  => 0,
		    '<strong>orderby</strong>'    => 'id',
		);
		$categories = get_categories( $args );
		foreach ( $categories as $category ) { ?>
		<li>
		   <a href="<?php echo get_term_link($category->slug, 'category');?>">
		      <?php echo $category->name ; ?>
		      <span>(<?php echo $category->count; ?>)</span>
		   </a>
		</li>
		<?php } ?>
	</ul>

	<h3 class="title-sidebar"><?php echo get_field('learn-more', 'option'); ?></h3>

	<div class="learn-more">
		<?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'post_date',
                'order' => 'date',
            ); 
        ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php if (have_posts()) : ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

        	<div class="row boder-more">
	        	<div class="col-lg-3 col-md-3 col-3">
	    			<a class="img-sidebar" href="<?php the_permalink(); ?>">
	    				<?php the_post_thumbnail('full'); ?>              			
	    			</a>
	        	</div>

	        	<div class="col-lg-9 col-md-9 col-9">
	        		<a class="text-sidebar" href="<?php the_permalink() ?>">
	                	<?php the_title() ?>
	               	</a>
	        	</div>
	        </div>

       	<?php endwhile; wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<?php if( have_rows('banner', 'option') ): ?>
        <?php while( have_rows('banner', 'option') ): the_row(); 
            $link = get_sub_field('link');
            $image = get_sub_field('img');
            ?>

			<a class="banner" href="<?php echo $link['url'];?>">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>">
			</a>

   	    <?php endwhile; ?>
	<?php endif; ?>