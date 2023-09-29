<?php
/*

	Template Name: Gia Công Tấm Nhôm Nhựa
    Template Post Type: tac

*/
get_header(); ?>
	<div id="main">

    	<?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="container bg-history">
        	<div class="row">
        		<div class="col-lg-8 col-12">
        			<?php 
    			        $image = get_field('img-chart');
    			        if( !empty( $image ) ): ?>
    			            <img class="img-intro img-alu-composite" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    			    <?php endif; ?>
        		</div>

        		<div class="col-lg-4 col-12 bg-alu-composite">

        			<!-- content 1 -->

        			<div class="alu-composite">
        				<p><?php echo get_field('text-chart'); ?></p>

        				<div class="alu-composite2">
        					<?php if( have_rows('list-img-chart') ): ?>
    		                    <?php while( have_rows('list-img-chart') ): the_row(); 
    		                        $image = get_sub_field('img');
    		                        $picture = $image['sizes']['thumbnail']; 
    		                        ?>

    		                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

    		                    <?php endwhile; ?>
                			<?php endif; ?>
                		</div>

                		<p><?php echo get_field('text-chart2'); ?></p>
        			</div>

        			<!-- content 2 -->

        			<div class="alu-composite3">
        				<p><?php echo get_field('text-chart3'); ?></p>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="bg-alu-composite2">

        	<img class="img-composite" src="<?php bloginfo('template_directory') ?>/images/img25.png">

        	<div class="container">

        		<!-- LƯU Ý TRONG THI CÔNG -->

        		<h2 class="text-alu-composite2">
        			<img src="<?php bloginfo('template_directory') ?>/images/img26.png">

        			<?php echo get_field('note'); ?>
        		</h2>

        		<ul class="list-note">
        			<?php if( have_rows('list-note') ): ?>
                        <?php while( have_rows('list-note') ): the_row(); ?>

                        	<li>
                        		<img src="<?php bloginfo('template_directory') ?>/images/icon.png">

                        		 <?php echo get_sub_field('text'); ?>
                        	</li>

                        <?php endwhile; ?>
                	<?php endif; ?>
        		</ul>

        		<!-- LƯU Ý TRONG BẢO DƯỠNG -->

        		<div class="bg-alu-composite3">

    	    		<h2 class="text-alu-composite2">
    	    			<img src="<?php bloginfo('template_directory') ?>/images/img26.png">

    	    			<?php echo get_field('note2'); ?>
    	    		</h2>

    	    		<p class="text-alu-composite3"><?php echo get_field('text'); ?></p>

    	    		<table class="tb-composite">
    	    			<thead class="tb-head">
    	    				<tr>
    	    					<th></th>

    	    					<th>
    	    						<?php echo get_field('low_principle'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon2.png">	
    	    					</th>

    	    					<th>
    	    						<?php echo get_field('the_average_rainfall'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon3.png">
    	    					</th>

    	    					<th>
    	    						<?php echo get_field('high_rain'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon4.png">
    	    					</th>
    	    				</tr>
    	    			</thead>

    	    			<tbody>
    	    				<!-- row 1 -->

    	    				<tr class="tb-row">
    	    					<td class="bg-title">
    	    						<?php echo get_field('high_dust'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon5.png">
    	    					</td>

    	    					<?php if( have_rows('list_high_dust') ): ?>
                        			<?php while( have_rows('list_high_dust') ): the_row(); ?>

                        				<td class="text-tb"><?php echo get_sub_field('text'); ?></td>

                        	        <?php endwhile; ?>
                				<?php endif; ?>
    	    				</tr>

    	    				<!-- row 2  -->

    	    				<tr class="tb-row">
    	    					<td class="bg-title2">
    	    						<?php echo get_field('average_dust'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon6.png">
    	    					</td>

    	    					<?php if( have_rows('list_average_dust') ): ?>
                        			<?php while( have_rows('list_average_dust') ): the_row(); ?>

                        				<td class="text-tb"><?php echo get_sub_field('text'); ?></td>

                        	        <?php endwhile; ?>
                				<?php endif; ?>
    	    				</tr>

    	    				<!-- row 3  -->

    	    				<tr class="tb-row">
    	    					<td class="bg-title3">
    	    						<?php echo get_field('low_dust'); ?>

    	    						<img src="<?php bloginfo('template_directory') ?>/images/icon7.png">
    	    					</td>

    	    					<?php if( have_rows('list_low_dust') ): ?>
                        			<?php while( have_rows('list_low_dust') ): the_row(); ?>

                        				<td class="text-tb"><?php echo get_sub_field('text'); ?></td>

                        	        <?php endwhile; ?>
                				<?php endif; ?>
    	    				</tr>
    	    			</tbody>
    	    		</table>

    		    	<ul class="list-note">
    	    			<?php if( have_rows('list-note2') ): ?>
    	                    <?php while( have_rows('list-note2') ): the_row(); ?>

    	                    	<li>
    	                    		<img src="<?php bloginfo('template_directory') ?>/images/icon.png">

    	                    		 <?php echo get_sub_field('text'); ?>
    	                    	</li>

    	                    <?php endwhile; ?>
    	            	<?php endif; ?>
    	    		</ul>

    	    	</div>
        	</div>

        	<img class="img-composite2" src="<?php bloginfo('template_directory') ?>/images/img27.png">

        </div>

        <!-- hình ảnh  -->

        <div class="container bg-intro3">
            <div class="row">
                <?php if( have_rows('list-img') ): ?>
                    <?php while( have_rows('list-img') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

                        <div class="col-lg-2 col-md-3 col-4">
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>