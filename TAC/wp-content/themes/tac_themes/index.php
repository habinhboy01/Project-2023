<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
    <div id="main">
    	<!-- slider intro -->

    	<div class="intro">
            <div class="owl-carousel owl-theme carousel_1">

                <?php if( have_rows('img-intro') ): ?>
                    <?php while( have_rows('img-intro') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

    	                <div class="item">
    	                    <img id="slider-home" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
    	                </div>
    	                
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="container content-intro">
            	<h2><?php echo get_field('title-intro'); ?></h2>

            	<?php if( have_rows('btn-intro') ): ?>
                    <?php while( have_rows('btn-intro') ): the_row(); ?>

                    	<a href="<?php echo get_sub_field('link');?>">
                    		<?php echo get_sub_field('text'); ?>
                    	</a>
    	                
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="symbol">
            <?php 
                $image = get_field('logo-intro');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>


        <!-- CÙNG BẠN VỀ ĐÍCH  KHI SẢN XUẤT CŨNG LÀ DỊCH VỤ -->

        <div class="bg-service">
            <div class="container">
                <h1 class="text-service"><?php echo get_field('title-service'); ?></h1>

                <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

                <div class="row">
                    <?php if( have_rows('option-service') ): ?>
                        <?php while( have_rows('option-service') ): the_row(); 
                            $image = get_sub_field('img-icon');
                            $picture = $image['sizes']['thumbnail']; 
                            ?>

                            <div class="col-lg-6 col-12">
                                <div class="content-service">
                                    <img class="img-icon" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                                    <h2 class="text-service2"><?php echo get_sub_field('title'); ?></h2>

                                    <p class="text-service3"><?php echo the_sub_field('content'); ?></p>

                                    <a class="learn-more" href="<?php echo get_sub_field('link');?>">
                                        <?php echo get_sub_field('learn-more'); ?>
                                    </a>
                                </div>
                            </div>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="bg-service2">

                    <!-- option service 1 -->

                    <div class="row bg-option">
                        <div class="col-lg-6 col-12">
                            <div class="box-option">
                                <h2><?php echo get_field('option-1'); ?></h2>

                                <p><?php echo the_field('content-option1'); ?></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <?php 
                                $image = get_field('img-option');
                                if( !empty( $image ) ): ?>
                                    <img class="img-option" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- option service 2 -->

                    <div class="row bg-option">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $image = get_field('img-option2');
                                if( !empty( $image ) ): ?>
                                    <img class="img-option" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="box-option2">
                                <h2><?php echo get_field('option-2'); ?></h2>

                                <p><?php echo the_field('content-option2'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- option service 3 -->

                    <div class="row bg-option">
                        <div class="col-lg-6 col-12">
                            <div class="box-option">
                                <h2><?php echo get_field('option-3'); ?></h2>

                                <p><?php echo the_field('content-option3'); ?></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <?php 
                                $image = get_field('img-option3');
                                if( !empty( $image ) ): ?>
                                    <img class="img-option" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- KHÁCH HÀNG NÓI VỀ CHÚNG TÔI -->

        <div class="container bg-comment">
            <h1 class="text-service text-comment"><?php echo get_field('comment'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row content-comment">
                <?php if( have_rows('list-comment') ): ?>
                    <?php while( have_rows('list-comment') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

                        <div class="col-lg-3 col-md-6 col-12 content-comment2">

                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                            <p class="text-comment2"><?php echo the_sub_field('content'); ?></p>

                            <p class="text-comment3"><?php echo get_sub_field('name'); ?></p>

                            <p class="text-comment4"><?php echo get_sub_field('text'); ?></p>

                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- đối tác của chúng tôi -->

        <div class="container bg-partners">
            <h1 class="text-service text-comment"><?php echo get_field('partners'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="owl-carousel owl-theme carousel_2">

                <?php if( have_rows('list-partners') ): ?>
                    <?php while( have_rows('list-partners') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

                        <div class="item">

                            <a href="<?php echo get_sub_field('link');?>">
                                <img id="img-partners" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                            </a>

                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <!-- đăng ký -->
        <div class="tomorrow">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7 col-12">
                        <h1 class="text-sign"><?php echo the_field('sign-up'); ?></h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <h2 class="text-sign2"><?php echo get_field('title-sign-up'); ?></h2>

                        <ul class="list-sign">
                            <?php if( have_rows('content-sign-up') ): ?>
                                <?php while( have_rows('content-sign-up') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link');?>">
                                            <?php echo get_sub_field('text'); ?>
                                        </a>
                                    </li>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- tin tức mới -->

        <div class="container">
            <h1 class="text-service"><?php echo get_field('title-news'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row bg-news">
                <?php
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'orderby' => 'post_date',
                        'order' => 'date',
                    ); 
                ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php if (have_posts()) : ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                        <div class="col-lg-6 col-12">
                            <a class="img-news" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>                        
                            </a>
                        </div>

                        <div class="col-lg-6 col-12">
                            <?php the_category(); ?>

                            <h1 class="title-news">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h1>

                            <div class="text-news"><?php the_excerpt(); ?></div>

                            <div class="date-author">
                                <div class="avatar-author">
                                    <!-- lấy avatar user -->

                                    <?php
                                    $user = wp_get_current_user();
                                     
                                    if ( $user ) :
                                        ?>
                                        <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                                    <?php endif; ?>

                                    <ul>
                                        <li class="text-news2"><?php the_author_posts_link(); ?></li>
                                        <li class="text-news3"><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>

                                <?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                            </div>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="row bg-news">
                <?php
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'orderby' => 'post_date',
                        'order' => 'ASC',
                    ); 
                ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php if (have_posts()) : ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                        <div class="col-lg-3 col-md-6 col-12 bg-new4">
                            <a class="img-news2" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>                        
                            </a>

                            <?php the_category(); ?>

                            <h1 class="title-news2">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h1>

                            <div class="date-author">
                                <div class="avatar-author">
                                    <!-- lấy avatar user -->

                                    <?php
                                    $user = wp_get_current_user();
                                     
                                    if ( $user ) :
                                        ?>
                                        <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                                    <?php endif; ?>

                                    <ul>
                                        <li class="text-news2"><?php the_author_posts_link(); ?></li>
                                        <li class="text-news3"><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>

                                <?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                                
                            </div>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

        </div>

        <!-- slider images -->

        <div class="container">
            <div class="owl-carousel owl-theme carousel_3">                
                            
                <?php if( have_rows('slide-img') ): ?>
                    <?php while( have_rows('slide-img') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

                        <div class="item">
                            <img class="img-slider-home" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        </div>
     
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>

<?php get_footer(); ?>