<?php 

/**template name: Home */

get_header(); ?>

<div class="heading-sec" style="background-image: url('<?php echo get_field('grid-img','option') ?>');">
    <div class="heading-title">
        <?php echo get_field('heading-title') ?>
    </div>

    <div class="heading-text">
        <?php echo get_field('heading-text') ?>
    </div>

    <div class="heading-img">
        <img src="<?php echo get_field('heading-img') ?>" alt="" class="w-100">
    </div>
</div>

<div class="nido-stories">
    <div class="container">
        <div class="row nido-row">
            <div class="col-lg-6">
                <div class="nido-img" data-text="<?php echo get_field('nido-story-text') ?>">
                    <img src="<?php echo get_field('nido-img')?>" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="nido-text">
                    <?php echo get_field('nido-text')?><br>
                    <button class="more"><a href="<?php echo get_field('link-to-nido')?>">Xem chi tiết</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="upcomingEvents">
    <div class="container">
        <div class="upcomingEventTitle">
            <?php echo get_field("upcoming-event-title")?>
        </div>
        <div class="row">

            <?php

            $category_slug = 'su-kien';

            $args = array(
                'category_name' => $category_slug,
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
            <div class="col-12">
                <div class="event">
                    <div class="event-img">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="event-info">
                        <div class="event-name">
                            <?php

                            $post_id = get_the_ID();

                            $categories = get_the_category($post_id);

                            if ($categories) {
                                
                                    echo "<a class='cate' href='" . esc_url(get_category_link($categories[0]->term_id)) . "'>" . esc_html($categories[0]->name) . "</a>";
                            }
                            ?>
                            <br>

                            <div class="event-title-group">
                                <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                                <div class="post-time">
                                    <i class="fa-regular fa-clock-three"></i>
                                    <?php echo get_the_date('d M, Y')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                }
            } else {
                echo 'Không có bài viết.';
            }

            wp_reset_postdata();
            ?>


        </div>
    </div>
</div>

<div class="montessori">
    <div class="container">
        <div class="why-titlee"><?php echo get_field('why-title') ?></div>
        <div class="row">
            <?php if(have_rows('whys')): while(have_rows('whys')): the_row(); ?>
            <div class="col-md-4">
                <div class="why">
                    <div class="why-img">
                        <img src="<?php echo get_sub_field('img')?>" alt="">
                    </div>
                    <div class="why-title">
                        <?php echo get_sub_field('title')?>
                    </div>
                    <div class="why-des"><?php echo get_sub_field('des')?></div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="video-sec position-relative">
    <div class="brush"><img src="<?php echo get_field('video-brush') ?>" alt=""></div>
    <div class="video-text col-lg-6">
        <div class="quote">“</div>
        <?php echo get_field('video-text') ?>
        <div class="author">
            <?php echo get_field('video-text-author') ?>
        </div>
    </div>
    <video autoplay muted loop class="col-lg-6">

        <source src="<?php echo get_field('video'); ?>" type="video/mp4">

        Your browser does not support the video tag.

    </video>
</div>

<div class="reading container">
    <div class="reading-text position-relative">
        <?php echo get_field('reading-text')?>
        <div class="brushh">
            <img src="<?php bloginfo('template_directory')?>/images/line2.png">
        </div>
    </div>
</div>

<div class="swiper-container container">
    <div class="swiper readingSlider">
        <div class="swiper-wrapper">
            <?php

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'order' => 'date',
                );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
            <div class="swiper-slide">
                <div class="reading-item  align-items-center">
                    <div class="col-lg-6 px-0">
                        <div class="reading-img">
                            <?php the_post_thumbnail() ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="reading-content">
                            <?php

                $post_id = get_the_ID();

                $categories = get_the_category($post_id);

                if ($categories) {
                    
                        echo "<a class='cate' href='" . esc_url(get_category_link($categories[0]->term_id)) . "'>" . esc_html($categories[0]->name) . "</a>";
                }
                ?>

                            <div class="reading-title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></div>
                            <div class="reading-des"><?php the_excerpt() ?></div>
                            <div class="reading-date"><?php echo get_the_date('M d') ?>, 10 mins read</div>
                        </div>
                    </div>

                </div>
            </div>

            <?php
                }
            } else {
                echo 'Không có bài viết.';
            }

            wp_reset_postdata();
            ?>
        </div>


    </div>
    <div id="next" class="swiper-button-next">
        <img src="<?php echo get_field('right-btn')?>" alt="">
    </div>
    <div id="prev" class="swiper-button-prev">
        <img src="<?php echo get_field('left-btn')?>" alt="">
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="container programs">
    <div class="row align-items-center">
        <div class="col-lg-3">
            <div class="program-text1"><?php echo get_field('program-text1') ?></div>
            <div class="program-text2"><?php echo get_field('program-text2') ?></div>
        </div>
        <div class="col-lg-9">
            <div class="row align-items-center">
                <?php if(have_rows('classes')): while(have_rows('classes')): the_row(); ?>
                <div class="col-lg-4 col-md-6 class-wrap">
                    <div class="class">
                        <div class="class-name"><?php echo get_sub_field('name') ?></div>
                        <div class="class-img">
                            <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100">
                        </div>
                        <div class="class-des">
                            <?php the_sub_field('des') ?>
                        </div>
                        <div class="class-detail">
                            <a href="<?php echo get_sub_field('link') ?>">More Details ></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="reviews container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <img src="<?php echo get_field('img-background') ?>" alt="" class="w100 img-fluid">
        </div>
        <div class="col-lg-8">
            <div class="swiper reviewSlider">
                <div class="swiper-wrapper">
                    <?php if(have_rows('reviews')): while(have_rows('reviews')): the_row(); ?>
                    <div class="swiper-slide">
                        <div class="review">
                            <div class="chat-img">
                                <img src="<?php echo get_field('chat-img') ?>" alt="" class="img-fluid w-100">
                            </div>

                            <div class="review-text"><?php the_sub_field('text') ?></div>

                            <div class="rev-wrap">
                                <div class="review-img"><img src="<?php echo get_sub_field('img') ?>" alt=""></div>

                                <div class="rev-group">
                                    <div class="review-name"><?php echo get_sub_field('name') ?></div>

                                    <div class="review-class"><?php echo get_sub_field('class') ?></div>
                                </div>

                            </div>

                            <div class="star">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21.9844 10.7229L17.7563 14.4129L19.0229 19.9067C19.0899 20.1939 19.0708 20.4945 18.9679 20.7709C18.865 21.0472 18.6829 21.2872 18.4445 21.4606C18.206 21.6341 17.9216 21.7334 17.627 21.7462C17.3323 21.7589 17.0405 21.6845 16.7879 21.5323L11.9963 18.6261L7.21507 21.5323C6.96248 21.6845 6.67062 21.7589 6.37598 21.7462C6.08134 21.7334 5.797 21.6341 5.5585 21.4606C5.32 21.2872 5.13793 21.0472 5.03505 20.7709C4.93217 20.4945 4.91305 20.1939 4.98007 19.9067L6.24476 14.4186L2.01569 10.7229C1.79202 10.53 1.63027 10.2754 1.55075 9.99089C1.47122 9.70642 1.47746 9.4048 1.56867 9.12385C1.65988 8.84291 1.83201 8.59515 2.06347 8.41164C2.29493 8.22813 2.57542 8.11705 2.86976 8.09231L8.44413 7.6095L10.6201 2.4195C10.7337 2.14717 10.9254 1.91455 11.1709 1.75093C11.4165 1.58731 11.705 1.5 12.0001 1.5C12.2952 1.5 12.5836 1.58731 12.8292 1.75093C13.0748 1.91455 13.2664 2.14717 13.3801 2.4195L15.5626 7.6095L21.1351 8.09231C21.4294 8.11705 21.7099 8.22813 21.9414 8.41164C22.1728 8.59515 22.3449 8.84291 22.4362 9.12385C22.5274 9.4048 22.5336 9.70642 22.4541 9.99089C22.3746 10.2754 22.2128 10.53 21.9891 10.7229H21.9844Z"
                                        fill="#9BBA3C" />
                                </svg>

                                <span class="point"><?php echo get_sub_field('point') ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- liên hệ -->

<div class="bg-contact-home">
    <div class="container">
        <div class="bg-contact-2 bg-contact-home-2">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1 class="title-contact"><?php echo get_field('title-contact'); ?></h1>

                    <div class="description-contact"><?php the_field('description'); ?></div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="bg-form">
                        <?php echo do_shortcode('[contact-form-7 id="c176318" title="Liên hệ"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="img-before-footer">
        <img src="<?php echo get_field('img-before-footer')?>" alt="" class="img-fluid w-100">
    </div>

</div>



<?php get_footer(); ?>