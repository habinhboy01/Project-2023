<?php
/*

Template Name: introduce page

*/

get_header(); ?>
    <div id="main">

        <?php 
            $image = get_field('img-intro');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <!-- giới thiệu chung -->

        <div class="container bg-intro">

            <ul class="bg-intro2">
                <li>
                    <h1 class="text-service"><?php echo get_field('title-intro'); ?></h1>

                    <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">
                </li>

                <li>
                    <?php 
                        $image = get_field('img-intro2');
                        if( !empty( $image ) ): ?>
                            <img class="img-intro4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </li>
            </ul>


            <div class="row bg-intro">
                <?php if( have_rows('list-intro') ): ?>
                    <?php while( have_rows('list-intro') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail']; 
                        ?>

                        <div class="col-lg-6 col-12">

                            <ul class="list-intro">

                                <li>
                                    <img class="img-intro2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </li>

                                <li class="text-intro">
                                    <h2><?php echo get_sub_field('title'); ?></h2>

                                    <?php if( have_rows('content') ): ?>
                                        <?php while( have_rows('content') ): the_row(); ?>

                                            <p><?php echo get_sub_field('text'); ?></p>

                                        <?php endwhile; ?>
                                    <?php endif; ?> 
                                </li>
                            </ul>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </div>


        <!-- LỊCH SỬ HÌNH THÀNH -->

        <div class="container bg-intro">
            <h1 class="text-service"><?php echo get_field('history'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <?php 
                $image = get_field('img-history');
                if( !empty( $image ) ): ?>
                    <img class="img-history" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        </div>


        <!-- TẦM NHÌN & SỨ MỆNH -->

        <div class="container bg-intro">
            <h1 class="text-service"><?php echo get_field('vision-mission'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row">
                <div class="col-lg-4 col-12 bg-vision">
                    <?php 
                        $image = get_field('img-vision');
                        if( !empty( $image ) ): ?>
                            <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="col-lg-4 col-md-6 col-12 bg-vision">
                    <h1 class="text-vision"><?php echo get_field('mission'); ?></h1>

                    <div class="text-vision2">
                        <?php the_field('text-mission'); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 bg-vision">
                    <h1 class="text-vision"><?php echo get_field('vision'); ?></h1>

                    <p class="text-vision3">
                        <?php the_field('text-vision'); ?>
                    </p>
                </div>
            </div>
        </div>


        <!-- đối tác của chúng tôi -->

        <div class="container partners-info">
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