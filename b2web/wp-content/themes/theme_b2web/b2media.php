<?php
/*

Template Name: b2media page

*/

get_header(); ?>

	<div class="bg-b2media">
		<?php 
        $image = get_field('img-intro');
        if( !empty( $image ) ): ?>
            <img class="img-intro-b2media" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="content-b2media">
        	<h1><?php echo get_field('title-intro'); ?></h1>

        	<p><?php echo get_field('description-intro'); ?></p>
        </div>

<!--         <ul class="dot-page-b2">
        	<li id="b2-media" class="dot-b2"></li>
        	<li id="b2-media2" class="dot-b2"></li>
        	<li id="b2-media3" class="dot-b2"></li>
        	<li id="b2-media4" class="dot-b2"></li>
        </ul> -->
	</div>

	<!-- list-service -->

	<div class="bg-b2media bg-b2media2">
		<div class="container">
			<div class="row service-b2media">
				<?php if( have_rows('list-service') ): ?>
		            <?php while( have_rows('list-service') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-6 col-md-6 col-12">
			                <img class="img-intro-b2media2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 

			                <h2 class="title-b2media"><?php echo get_sub_field('title'); ?></h2>
			            </div>

		            <?php endwhile; ?>
	        	<?php endif; ?>
			</div>


			<div class="row service-b2media2">
				<?php if( have_rows('list-service2') ): ?>
		            <?php while( have_rows('list-service2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-6 col-md-6 col-12">
			                <img class="img-intro-b2media2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 

			                <h2 class="title-b2media"><?php echo get_sub_field('title'); ?></h2>
			            </div>

		            <?php endwhile; ?>
	        	<?php endif; ?>
			</div>
		</div>

<!--         <ul class="dot-page-b2">
        	<li id="b2-media" class="dot-b2"></li>
        	<li id="b2-media2" class="dot-b2"></li>
        	<li id="b2-media3" class="dot-b2"></li>
        	<li id="b2-media4" class="dot-b2"></li>
        </ul> -->
	</div>

	<!-- DỰ ÁN NỔI BẬT -->

	<div class="bg-b2media bg-project">
		<div class="container">
			<h1 class="title-project"><?php echo get_field('project'); ?></h1>

			<div class="bg-project2">
				<h4 class="title-project2"><?php echo get_field('name-project'); ?></h4>

				<p><?php echo get_field('name-customer'); ?></p>
			</div>

			<!-- row 1 -->

			<div class="row">
				<div class="col-lg-4 col-12">
					<?php 
			        $image = get_field('logo-project');
			        if( !empty( $image ) ): ?>
			            <img class="logo-project" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>

				<div class="col-lg-3 col-md-6 col-12 img-project">
					<?php 
			        $image = get_field('img-project');
			        if( !empty( $image ) ): ?>
			            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>

				<div class="col-lg-5 col-md-6 col-12">
					<?php 
			        $image = get_field('img-project2');
			        if( !empty( $image ) ): ?>
			            <img class="img-project2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>
			</div>

			<!-- row 2 -->

			<div class="row content-project">
				<div class="col-lg-5 col-md-6 col-12">
					<?php 
			        $image = get_field('img-project3');
			        if( !empty( $image ) ): ?>
			            <img class="img-project2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>


				<div class="col-lg-7 col-md-6 col-12">
					<?php 
			        $image = get_field('img-project4');
			        if( !empty( $image ) ): ?>
			            <img class="img-project2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>
			</div>
		</div>

<!--         <ul class="dot-page-b2">
        	<li id="b2-media" class="dot-b2"></li>
        	<li id="b2-media2" class="dot-b2"></li>
        	<li id="b2-media3" class="dot-b2"></li>
        	<li id="b2-media4" class="dot-b2"></li>
        </ul> -->
	</div>

	<!-- join us now -->

    <div class="bg-join-us">
	    <?php if( have_rows('joiin-us') ): ?>
            <?php while( have_rows('joiin-us') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                $link = get_sub_field('link');
                ?>

                <img class="img-questions3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                <div class="title-questions4">
                	<div class="container">
	                	<h3><?php the_sub_field('content'); ?></h3>

	                	<a href="<?php echo $link['url'];?>">
	                		<?php echo get_sub_field('text'); ?>	
	                	</a>
	                </div>
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>

<!--         <ul class="dot-page-b2">
        	<li id="b2-media" class="dot-b2"></li>
        	<li id="b2-media2" class="dot-b2"></li>
        	<li id="b2-media3" class="dot-b2"></li>
        	<li id="b2-media4" class="dot-b2"></li>
        </ul> -->
    </div>

<?php get_footer(); ?>