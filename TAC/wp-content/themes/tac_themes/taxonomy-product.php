<?php
/*

Template Name: product page

*/

get_header(); ?>
    <div id="main">

        <?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-intro" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <!-- trần kín -->

        <div class="container alu-product">

            <h1 class="text-service"><?php echo get_field('title-product'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row">
                <?php if( have_rows('list-product') ): ?>
                    <?php while( have_rows('list-product') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail'];
                        $link = get_sub_field('link');
                        ?>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="content-product">
                                <a href="<?php echo $link['url'];?>" target="_blank">
                                   <img class="img-product" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                                   <div class="content-product2">

                                        <img src="<?php bloginfo('template_directory') ?>/images/img40.png">

                                        <h1><?php echo get_sub_field('title'); ?></h1>

                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>


        <!-- trần hở -->

        <div class="container alu-product">

            <h1 class="text-service"><?php echo get_field('title-product2'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row">
                <?php if( have_rows('list-product2') ): ?>
                    <?php while( have_rows('list-product2') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail'];
                        $link = get_sub_field('link');
                        ?>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="content-product">
                                <a href="<?php echo $link['url'];?>" target="_blank">
                                   <img class="img-product" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                                   <div class="content-product2">

                                        <img src="<?php bloginfo('template_directory') ?>/images/img40.png">

                                        <h1><?php echo get_sub_field('title'); ?></h1>

                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>


        <!-- LAM CHẮN NẮNG -->

        <div class="container alu-product">

            <h1 class="text-service"><?php echo get_field('title-product3'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row">
                <?php if( have_rows('list-product3') ): ?>
                    <?php while( have_rows('list-product3') ): the_row(); 
                        $image = get_sub_field('img');
                        $picture = $image['sizes']['thumbnail'];
                        $link = get_sub_field('link');
                        ?>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="content-product">
                                <a href="<?php echo $link['url'];?>" target="_blank">
                                   <img class="img-product" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                                   <div class="content-product2">

                                        <img src="<?php bloginfo('template_directory') ?>/images/img40.png">

                                        <h1><?php echo get_sub_field('title'); ?></h1>

                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>


        <!-- sản phẩm khác -->

        <div class="container content-product3">
            <h1 class="text-service"><?php echo get_field('title-other-products'); ?></h1>

            <img class="line-service" src="<?php bloginfo('template_directory') ?>/images/line.png">

            <div class="row">
                <?php if( have_rows('other-products') ): ?>
                    <?php while( have_rows('other-products') ): the_row(); 
                        $link = get_sub_field('link');
                        ?>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-project">
                                <h2><?php echo get_sub_field('title'); ?></h2>

                                <a href="<?php echo $link['url'];?>" target="_blank">
                                   <?php echo get_sub_field('learn-more'); ?>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>