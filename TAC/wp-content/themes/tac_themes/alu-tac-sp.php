<?php
/*

	Template Name: Dòng tấm sp
    Template Post Type: tac
*/
get_header(); ?>
	<div id="main">

    	<?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <!-- HIỆU QUẢ TỐI ƯU VỀ CHI PHÍ -->

        <div class="container alu-product">

        	<h1 class="text-service"><?php echo get_field('title-effective'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="bg-alu-product">
            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-12 bg-alu-product3">
            			<?php 
    				        $image = get_field('img-effective');
    				        if( !empty( $image ) ): ?>
    				            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    				    <?php endif; ?>
            		</div>

            		<div class="col-lg-6 col-md-6 col-12">
            			<div class="bg-alu-product2">
    	        			<h2 class="text-alu-product"><?php echo get_field('title-thickness'); ?></h2>

    	        			<p class="text-alu-product2"><?php echo get_field('text-thickness'); ?></p>

    	        			<p class="text-alu-product2"><?php echo get_field('text-thickness2'); ?></p>
    	        		</div>
            		</div>
            	</div>

            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-12">
            			<div class="bg-alu-product2">
            				<h2 class="text-alu-product"><?php echo get_field('cost'); ?></h2>
            			</div>
            		</div>

            		<div class="col-lg-6 col-md-6 col-12 bg-alu-product4">
            			<?php 
    				        $image = get_field('img-effective2');
    				        if( !empty( $image ) ): ?>
    				            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    				    <?php endif; ?>
            		</div>
            	</div>
            </div>
        </div>

        <!-- AN TÂM VỀ ĐỘ BỀN MÀU -->

        <div class="container alu-product">

        	<h1 class="text-service"><?php echo get_field('title-effective2'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="color_durability">
            	<div class="content_color_durability">
            		<?php 
    			        $image = get_field('img_color_durability');
    			        if( !empty( $image ) ): ?>
    			            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    			    <?php endif; ?>
            	</div>

            	<div class="content_color_durability2">
            		<?php if( have_rows('list_color_durability') ): ?>
                    	<?php while( have_rows('list_color_durability') ): the_row(); ?>

                    		<div class="content_color_durability3">
                    			<h2><?php echo get_sub_field('title'); ?></h2>

                    			<p><?php echo get_sub_field('text'); ?></p>
                    		</div>

                    	<?php endwhile; ?>
                	<?php endif; ?>
            	</div>	
            </div>

        </div>

        <!-- THỎA SỨC SÁNG TẠO -->

        <div class="container alu-product">

        	<h1 class="text-service"><?php echo get_field('title-creation'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

        </div>

        <div class="bg-creation">
        	<?php 
    	        $image = get_field('img-creation');
    	        if( !empty( $image ) ): ?>
    	            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    	    <?php endif; ?>

    	    <div class="bg-creation2">
    	    	<p>
    	    		<i class="fas fa-quote-left"></i>
    	    		
    	    		<?php echo the_field('content-creation'); ?>

    	    		<i class="fas fa-quote-right"></i>
    	    	</p>

    	    	<p class="text-creation"><?php echo get_field('text-creation'); ?></p>
    	    </div>
        </div>

        <!-- BẢNG MÀU -->

        <div class="container alu-product">

        	<h1 class="text-service"><?php echo get_field('color-board'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

    		<?php if( have_rows('download') ): ?>
                <?php while( have_rows('download') ): the_row(); 
                    $link = get_sub_field('link');
                    $social_icon = get_sub_field('text');
                    ?>
                  	
                  	<div class="download-color">
    	                <a href="<?php echo $link;?>" target="_blank">
    					   <?php echo $social_icon ?>
    					</a>
    				</div>			

           	    <?php endwhile; ?>
    		<?php endif; ?>

        </div>

        <img class="img-intro color-board" src="<?php bloginfo('template_directory') ?>/images/line3.png">

    </div>

<?php get_footer(); ?>