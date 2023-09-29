<?php get_header(); ?>

	<div class="bg-single">
		<?php $color = get_field('background_color', $term); ?>
		<?php $color2 = get_field('color_title', $term); ?>
		<?php $color3 = get_field('border_color', $term); ?>
		
		<div class="content-single2" style="background-color: <?php echo $color; ?>">		
			<h1 class="title-single" style="color: <?php echo $color2; ?>; -webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_title(); ?></h1>

			<div class="text-single" style="color: <?php echo $color2; ?>;-webkit-text-stroke: 0.02em <?php echo $color3; ?>"><?php the_excerpt(); ?></div>
		</div>

		<div class="content-single3">
			<?php the_post_thumbnail('full',['class'=>'img-single']); ?>
		</div>
	</div>
	
	<div class="container">
		<div class="container-single">

			<!-- nội dung -->

			<div class="content-single"><?php the_content(); ?></div>
		</div>
	</div>


<?php get_footer(); ?>