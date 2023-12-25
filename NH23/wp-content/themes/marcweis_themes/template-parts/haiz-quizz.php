<?php
/*

Template Name: Haiz Quizz page

*/

get_header(); ?>
	<div class="bg-page-NH23-2">
		<div class="container">
			<div class="bg-contact">
				<h1 class="title-contact"><?php the_title(); ?></h1>
                <div class="faq">Câu hỏi thường gặp</div>
				<div class="wrapper">
					<?php if( have_rows('question') ): ?>
					    <?php while( have_rows('question') ): the_row(); ?>

					    	<div class="question-item">
					    		<div class="accordion-header">
					    			<h3><?php echo get_sub_field('title'); ?></h3>

					    			<i class="icon-arrow far fa-angle-down"></i>
					    		</div>

					    		<div class="accordion-body"><?php the_sub_field('content'); ?></div>
					    	</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				
				
			</div>
		</div>
		
		
		</div>
		
        </div>
	</div>


<?php get_footer(); ?>