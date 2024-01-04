<?php 

/* template name: Về chúng tôi */ 

get_header(); ?>
	
	<div class="bg-about">
		<div class="container">
			<div class="bg-book">
				<?php $image = get_field('img-book');

			    if( !empty( $image ) ): ?>

			        <img class="img-book" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			    <?php endif; ?>

			    <h1 class="title-book"><?php echo get_field('title-book'); ?></h1>

			    <div class="content-book"><?php the_field('content-book'); ?></div>
			</div>

			<!-- -------------------------- -->

			<div class="row">
				<?php if( have_rows('vision-mission') ): ?>
	            	<?php while( have_rows('vision-mission') ): the_row(); ?>

						<div class="col-lg-6 col-12">
							<div class="vision-mission">
								<h3 class="title-vision-mission"><?php echo get_sub_field('title'); ?></h3>

								<div class="vision-mission-2"><?php the_sub_field('content'); ?></div>
							</div>
						</div>

					<?php endwhile; ?>
            	<?php endif; ?>
			</div>

		</div>
	</div>

	<!-- Giá trị cốt lõi của NIDO -->

	<div class="bg-values">
		<div class="container">
			<h1 class="title-question"><?php echo get_field('title-values'); ?></h1>

            <?php if( have_rows('list-values') ): ?>
	            <?php while( have_rows('list-values') ): the_row(); 
			        $image = get_sub_field('icon');
			        $picture = $image['sizes']['thumbnail']; ?>

			        <div class="mr-top-2">
				        <div class="row">
				            <div class="col-lg-2 col-md-2 col-12">
								<img class="img-values" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				            </div>

				            <div class="col-lg-10 col-md-10 col-12">
				                <div class="content-values"><?php the_sub_field('content'); ?></div>
				            </div>
				        </div>
				    </div>

	            <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>

	<!-- Thay mặt đội ngũ trường NIDO -->

	<div class="bg-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-12">
					<div class="content-team">
						<svg xmlns="http://www.w3.org/2000/svg" width="69" height="54" viewBox="0 0 69 54" fill="none">
							<g clip-path="url(#clip0_599_3859)">
							<path d="M11.8293 3.85809C13.5036 1.57448 15.3524 0.312311 17.3821 0.0650824C19.4119 -0.17564 21.1767 0.214721 22.6699 1.23617C24.1632 2.25761 24.9971 3.79303 25.1781 5.83593C25.3591 7.88532 24.4864 10.0453 22.5794 12.3289C19.8321 15.5754 17.9769 18.8219 17.0266 22.0685C16.0699 25.315 15.5915 28.2036 15.5915 30.728L14.874 23.5128C19.6511 23.5128 23.5362 24.8986 26.5227 27.6636C29.5092 30.4287 31.0024 34.1566 31.0024 38.8475C31.0024 43.5383 29.6255 46.9345 26.8782 49.7581C24.1309 52.5817 20.3622 54 15.5851 54C10.8079 54 6.86472 52.3475 4.11739 49.0424C1.37006 45.7374 -0.00683594 41.1376 -0.00683594 35.2432C-0.00683594 32.1203 0.290522 28.8998 0.891703 25.5947C1.48642 22.2897 2.64999 18.861 4.38889 15.3152C6.12133 11.7694 8.60362 7.95038 11.8293 3.85809ZM49.8265 3.85809C51.5008 1.57448 53.3495 0.312311 55.3793 0.0715884C57.4091 -0.169134 59.1739 0.221227 60.6671 1.24267C62.1604 2.26412 62.9943 3.79954 63.1753 5.84243C63.3563 7.89183 62.4836 10.0518 60.5766 12.3354C57.8293 15.5819 55.9741 18.8285 55.0238 22.075C54.0671 25.3215 53.5887 28.2101 53.5887 30.7345L52.8712 23.5193C57.6483 23.5193 61.5334 24.9051 64.5199 27.6701C67.5064 30.4352 68.9996 34.1632 68.9996 38.854C68.9996 43.5448 67.6227 46.941 64.8754 49.7646C62.1281 52.5882 58.3594 54.0065 53.5823 54.0065C48.8051 54.0065 44.8619 52.354 42.1146 49.0489C39.3673 45.7439 37.9904 41.1441 37.9904 35.2497C37.9904 32.1268 38.2877 28.9063 38.8889 25.6012C39.4836 22.2962 40.6472 18.8675 42.3861 15.3217C44.1185 11.7759 46.6008 7.95689 49.8265 3.8646V3.85809Z" fill="#9BBA3C"/>
							</g>
							<defs>
							<clipPath id="clip0_599_3859">
							<rect width="69" height="54" fill="white"/>
							</clipPath>
							</defs>
						</svg>

						<div class="content-team-2">
							<p class="title-team"><?php echo get_field('title-team'); ?></p>

							<p class="intro-team"><?php the_field('intro-team'); ?></p>

							<p class="name-founder"><?php echo get_field('name-founder'); ?></p>

							<div class="intro-founder"><?php the_field('intro-founder'); ?></div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-12">
					<?php $image = get_field('img-intro');

				    if( !empty( $image ) ): ?>

				        <img class="img-founder" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>