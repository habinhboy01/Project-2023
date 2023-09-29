<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div id="bg-intro">
		<?php if( have_rows('content-intro') ): ?>
            <?php while( have_rows('content-intro') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail'];
                $link = get_sub_field('link-explore');
                ?>

                <div class="slides-intro fade-slide">
					<img class="img-intro2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					<div class="content-intro">
		                <h1><?php echo get_sub_field('title'); ?></h1>

		                <p><?php echo the_sub_field('text'); ?></p>

		                <a href="<?php echo $link;?>" target="_blank">
						   <?php echo get_sub_field('explore'); ?>
						</a>
					</div>
				</div>

       	    <?php endwhile; ?>
		<?php endif; ?>

		<div class="arrow-intro">
			<a class="prev-intro" onclick="plusSlides(-1)">❮</a>
			<a class="next-intro" onclick="plusSlides(1)">❯</a>
		</div>
	</div>


	<!-- About Company -->

	<div class="container about-company">
		<div class="row">

		    <?php if( have_rows('list-about-company') ): ?>
	            <?php while( have_rows('list-about-company') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

					<div class="col-lg-6 col-12">

						<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					</div>

					<div class="col-lg-6 col-12">
						<div class="content-about2">
							<p class="text-about"><?php echo get_field('about-company'); ?></p>

							<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

							<div class="text-about2"><?php the_sub_field('content'); ?></div>
						</div>
					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- ----------------------- -->

	<div class="container about-company">
		<div class="row about-company2">

		    <?php if( have_rows('list-about-company2') ): ?>
	            <?php while( have_rows('list-about-company2') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

					<div class="col-lg-6 col-12">
						<div class="content-about3">
							<h2 class="title-about"><?php echo get_sub_field('title'); ?></h2>

							<div class="text-about2"><?php the_sub_field('content'); ?></div>

							<h2 class="title-about content-about4"><?php echo get_sub_field('title2'); ?></h2>

							<div class="text-about2"><?php the_sub_field('content2'); ?></div>
						</div>
					</div>

					<div class="col-lg-6 col-12">

						<img class="content-about" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

					</div>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>


	<!-- SERVICES & SOLUTION -->

	<div class="bg-services">
		<div class="container-fluid">
			<div class="row">

				<!-- SERVICES -->

				<div class="col-lg-4 col-12">
					<h2 class="title-services"><?php echo get_field('services'); ?></h2>
				</div>

				<!-- solution -->

				<div class="col-lg-8 col-12">
					<div class="content-solution5">
						<div class="content-solution2 content-solution4">
							<?php if( have_rows('list-solution') ): ?>
					            <?php while( have_rows('list-solution') ): the_row(); 
					                $link = get_sub_field('link');
					                ?>

						                <div class="content-solution">
						                	<h2><?php echo get_sub_field('text'); ?></h2>

						                	<p><?php the_sub_field('text2'); ?></p>

						                	<div>
								                <a href="<?php echo $link;?>" target="_blank">
												   <?php the_sub_field('learn-more'); ?>
												</a>
											</div>
										</div>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>


						<div class="content-solution2 content-solution3">
							<?php if( have_rows('list-solution2') ): ?>
					            <?php while( have_rows('list-solution2') ): the_row(); 
					                $link = get_sub_field('link');
					                ?>

						                <div class="content-solution">
						                	<h2><?php echo get_sub_field('text'); ?></h2>

						                	<p><?php the_sub_field('text2'); ?></p>

						                	<div>
								                <a href="<?php echo $link;?>" target="_blank">
												   <?php the_sub_field('learn-more'); ?>
												</a>
											</div>
										</div>

					       	    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
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
			<div class="col-lg-4 col-4 logo-technology active-slide">
				<?php 
                $image = get_field('logo-technology');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>

			<div class="col-lg-4 col-4 logo-technology">
				<?php 
                $image = get_field('logo-technology2');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>

			<div class="col-lg-4 col-4 logo-technology">
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

	       	<div class="mySlides">
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

	        <div class="mySlides">
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


	<!-- DOMAIN EXPERT -->

	<div class="domain-expert">
		<div class="container-fluid">
			<h2 class="title-services text-technology"><?php echo get_field('domain-expert'); ?></h2>

			<p class="text-technology2"><?php echo get_field('text-domain-expert'); ?></p>


			<div class="row bg-technology">
				<?php if( have_rows('list-domain-expert') ): ?>
		            <?php while( have_rows('list-domain-expert') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail'];
		                ?>

		                <div class="col-lg-6 col-12">
		                	<div class="list-domain-expert">
		                		<h2><?php echo get_sub_field('title'); ?></h2>

		                		<p class="text-technology2"><?php the_sub_field('content'); ?></p>

		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</div>
		                </div>

	          		<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>



	<!-- WHY DATAYK ? -->

	<div class="why-datatyk">
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


	<!-- COMMITMENT -->

	<div class="bg-commitment">
		<div class="container-fluid">
		 	<h2 class="title-services"><?php echo get_field('commitment'); ?></h2>

			<p class="text-technology2 text-why-datatyk"><?php echo get_field('text-commitment'); ?></p>

			<div class="row bg-technology">

                <div class="col-lg-6 col-md-6 col-12">
                	<?php if( have_rows('column-commitment') ): ?>
			            <?php while( have_rows('column-commitment') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

                			<img class="img-commitment" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                		<?php endwhile; ?>
					<?php endif; ?>

                </div>


                <div class="col-lg-6 col-md-6 col-12">
                	<?php if( have_rows('column-commitment2') ): ?>
			            <?php while( have_rows('column-commitment2') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail'];
			                ?>

                			<img class="img-commitment" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                		<?php endwhile; ?>
					<?php endif; ?>

                </div>
			</div>
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