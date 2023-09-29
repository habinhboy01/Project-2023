<?php get_header(); ?>

	<div class="page-services">
		<?php 
        $image = get_field('img-intro', 'option');
        if( !empty( $image ) ): ?>
            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

		<div class="content-page-services">
			<h2>
				<?php
				$categories = get_the_category();

				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );	
				} ?>

				Detail
			</h2>

			<p>Home_

				<?php
				$categories = get_the_category();

				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );	
				} ?>

				_Detail
			</p>
		</div>
	</div>

	<div class="container-fluid bg-technology bg-footer3">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-lg-9 col-12">
				<div class="img-sidebar">
					<?php the_post_thumbnail('full'); ?>

					<ul class="list-author list-single">
						<li>
							<img src="<?php bloginfo('template_directory') ?>/images/user.png">

							<?php the_author_posts_link(); ?>
						</li>

						<li class="date-submitted">
							<img src="<?php bloginfo('template_directory') ?>/images/date.png">
							
							<?php echo get_the_date(); ?>
						</li>

						<li>
							<img src="<?php bloginfo('template_directory') ?>/images/chat.png">
							
							Comment (5)
						</li>
					</ul>


					<h1 class="text-single"><?php the_title(); ?></h1>

					<div class="content-single">
						<?php the_content(); ?>
					</div>

					<!-- Share : -->

					<div class="share">
						<p>Share :</p>
						
						<?php if( have_rows('list-social','option') ): ?>
				            <?php while( have_rows('list-social','option') ): the_row(); 
				                $image = get_sub_field('icon');
				                $picture = $image['sizes']['thumbnail'];
				                $link = get_sub_field('link');
				                ?>

								<a href="<?php echo $link;?>" target="_blank">
									<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
								</a>
								
				       	    <?php endwhile; ?>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>