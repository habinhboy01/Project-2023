<?php
/*

Template Name: Contact page

*/

get_header(); ?>

	<div class="bg-page-NH23-2">
		<div class="container">
			<div class="bg-contact">
				<h1 class="title-contact"><?php the_title(); ?></h1>

				<?php echo do_shortcode( '[contact-form-7 id="238" title="Liên Hệ"]' ); ?>
			</div>

			<div class="bg-contact bg-contact2">
				<h2 class="title-contact title-contact2"><?php echo get_field('title-branch');?></h2>

				<div class="row">
					<div class="col-lg-5 col-12">

						<div class="input-container">
						  	<input type="text" name="search-map" id="search-map" class="search-address" placeholder="Tìm kiếm...">

							<span class="icon-map"> 
							    <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
							</span>
						</div>

						<div class="box-list-branch">
							<?php if( have_rows('list-branch') ): ?>
					            <?php while( have_rows('list-branch') ): the_row(); ?>

					                <ul class="list-branch-contact">
					                	<li>
					                		<h3 class="title-contact3"><?php echo get_sub_field('name-branch'); ?></h3>
					                	</li>

					                	<li class="description-contact"><?php the_sub_field('description'); ?></li>
					                </ul>

					            <?php endwhile; ?>
					    	<?php endif; ?>
					    </div>
					</div>

					<div class="col-lg-7 col-12">
						<?php if( have_rows('list-branch') ): ?>
					    	<?php while( have_rows('list-branch') ): the_row(); ?>

								<div class="content-contact">
									<?php echo get_sub_field('address'); ?>
								</div>

							<?php endwhile; ?>
					    <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>