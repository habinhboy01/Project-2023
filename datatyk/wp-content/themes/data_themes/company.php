<?php
/*

	Template Name: Company

*/
get_header(); ?>

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


	<div class="container about-company">
		<div class="row">

		    <?php if( have_rows('list-about-company') ): ?>
	            <?php while( have_rows('list-about-company') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

					<div class="col-lg-6 col-12">
						<div class="content-about3">
							<p class="text-about"><?php echo get_field('about-company'); ?></p>

							<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

							<div class="text-about2"><?php the_sub_field('content'); ?></div>
						</div>
					</div>


					<div class="col-lg-6 col-12">

						<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- ------------------------ -->

	<div class="bg-about-us">
		<div class="container">
			<div class="row">

			    <?php if( have_rows('list-about-company2') ): ?>
		            <?php while( have_rows('list-about-company2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

						<div class="col-lg-5 col-12">
							<div class="content-about3">
								<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

								<div class="text-about2"><?php the_sub_field('content'); ?></div>

								<h2 class="title-about content-about4"><?php echo get_sub_field('title2'); ?></h2>

								<div class="text-about2"><?php the_sub_field('content2'); ?></div>
							</div>
						</div>

						<div class="col-lg-7 col-12">

							<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

						</div>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- OUR APPROACH -->

	<div class="container">
		<div class="bg-about-us2">
			<h2 class="title-about"><?php echo get_field('our_approach'); ?></h2>

			<?php 
	        $image = get_field('img_our_approach');
	        if( !empty( $image ) ): ?>
	            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>
	    </div>
	</div>


	<!-- TECHNOLOGY -->

	<div class="container-fluid bg-technology">
		<h2 class="title-services text-technology"><?php echo get_field('technology'); ?></h2>

		<p class="text-technology2"><?php echo get_field('text-technology'); ?></p>
	</div>

	<!-- list technology -->

	<div class="container-fluid bg-technology">
		
		<div class="row">
			<div class="col-lg-4 col-4 logo-technology" onclick="currentSlide(1)">
				<?php 
                $image = get_field('logo-technology');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>

			<div class="col-lg-4 col-4 logo-technology" onclick="currentSlide(2)">
				<?php 
                $image = get_field('logo-technology2');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>

			<div class="col-lg-4 col-4 logo-technology" onclick="currentSlide(3)">
				<?php 
                $image = get_field('logo-technology3');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>
		</div>

		<!-- ---------------------------- -->
	        
		<div class="content-technology-slide">
	        <!-- detail 1   -->

	        <div class="mySlides fade-slide">
		        <div class="owl-carousel owl-theme carousel_2">
		    		<?php if( have_rows('detail-technology') ): ?>
			            <?php while( have_rows('detail-technology') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                $link = get_sub_field('link');
			                ?>
			                
				                <div class="item">
				                	<div class="content-technology">
				                		<img id="img-technology" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                		<h2><?php echo get_sub_field('title'); ?></h2>

				                		<p><?php the_sub_field('text'); ?></p>

						                <a href="<?php echo $link;?>" target="_blank">
										   Learn more
										</a>
				                	</div>
				                </div>   

			            <?php endwhile; ?>
					<?php endif; ?>
		        </div>
		    </div>

	       	<!-- detail 2   -->

	       	<div class="mySlides fade-slide">
		        <div class="owl-carousel owl-theme carousel_2">
		    		<?php if( have_rows('detail-technology2') ): ?>
			            <?php while( have_rows('detail-technology2') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                $link = get_sub_field('link');
			                ?>
			                
				                <div class="item">
				                	<div class="content-technology">
				                		<img id="img-technology" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                		<h2><?php echo get_sub_field('title'); ?></h2>

				                		<p><?php the_sub_field('text'); ?></p>

						                <a href="<?php echo $link;?>" target="_blank">
										   Learn more
										</a>
				                	</div>
				                </div>   

			            <?php endwhile; ?>
					<?php endif; ?>
		        </div>
		    </div>

	        <!-- detail 3   -->

	        <div class="mySlides fade-slide">
		        <div class="owl-carousel owl-theme carousel_2">
		    		<?php if( have_rows('detail-technology3') ): ?>
			            <?php while( have_rows('detail-technology3') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                $link = get_sub_field('link');
			                ?>
			                
				                <div class="item">
				                	<div class="content-technology">
				                		<img id="img-technology" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                		<h2><?php echo get_sub_field('title'); ?></h2>

				                		<p><?php the_sub_field('text'); ?></p>

						                <a href="<?php echo $link;?>" target="_blank">
										   Learn more
										</a>
				                	</div>
				                </div>   

			            <?php endwhile; ?>
					<?php endif; ?>
		        </div>
		    </div>

	    </div>
	</div>


	<!-- WHY DATAYK ? -->

	<div class="why-datatyk bg-company">
		 <div class="container-fluid">
		 	<h2 class="title-services"><?php echo get_field('why-datatyk'); ?></h2>

			<p class="text-technology2 text-why-datatyk"><?php echo get_field('text-why-datatyk'); ?></p>

			<div class="datayk-framework">
				<?php 
	            $image = get_field('datayk-framework');
	            if( !empty( $image ) ): ?>
	                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            <?php endif; ?>
	        </div>

	        <div class="text-why-datatyk2">
	        	<img src="<?php bloginfo('template_directory') ?>/images/icon4.png">

	        	<p><?php the_field('text-why-datatyk2'); ?></p>

	        	<div class="icon3">
	        		<img src="<?php bloginfo('template_directory') ?>/images/icon3.png">
	        	</div>
	        </div>
		 </div>
	</div>


	<!-- OUR CLIENT -->

	<div class="container-fluid bg-technology">
		<h2 class="title-services text-technology"><?php echo get_field('our-client'); ?></h2>

		<div class="owl-carousel owl-theme carousel_1">
			<?php if( have_rows('list-our-client') ): ?>
	            <?php while( have_rows('list-our-client') ): the_row(); 
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
		<h2 class="title-services text-technology"><?php echo get_field('contact'); ?></h2>

		<p class="text-technology2"><?php echo get_field('text-contact'); ?></p>

		<div class="row bg-technology">
			<div class="col-lg-6 col-12">
				<?php if( have_rows('list-contact') ): ?>
		            <?php while( have_rows('list-contact') ): the_row(); 
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
				<?php echo do_shortcode( '[contact-form-7 id="233" title="Contact form 1"]' ); ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>   