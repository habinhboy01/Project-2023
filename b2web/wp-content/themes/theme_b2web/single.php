<!DOCTYPE html>
<html>
<head>
    <title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

     <!-- carousel -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

    <!-- library animation -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

     <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/category.css">

    <?php wp_head() ?>
</head>
<body>

    <!-- menu pc -->

    <div class="bg-header-pc display-pc">
        <div class="container">
            <div class="main-pc">
                <a class="home-url" href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                </a>

                <?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
            </div>
        </div>
    </div>

    <!-- menu mobile -->

    <div class="display-mobile">
        <div class="bg-header-pc">
            <div class="container">
                <div class="main-pc">
                    <a class="home-url" href="<?php echo home_url(); ?>">
                        <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                    </a>

                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </div>
            </div>
        </div>

        <?php wp_nav_menu (
        array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
    </div>


    <!-- phần body -->
    
    <div class="bg-category">
        <div class="container bg-single">
            <div class="row">
                <h1 class="title-single"><?php the_title(); ?></h1>
    
            </div>
    
            <!-- nội dung -->
    
            <div class="content-single"><?php the_content(); ?></div>
        </div>
    </div>

<?php get_footer(); ?>