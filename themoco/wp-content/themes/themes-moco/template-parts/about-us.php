<?php
/*

Template Name: About page

*/

get_header(); ?>

	<div class="container">
		<div class="container-single">
			<h1 class="title-single"><?php the_title(); ?></h1>

			<div class="content-single"><?php the_content(); ?></div>
		</div>
	</div>

<?php get_footer(); ?>