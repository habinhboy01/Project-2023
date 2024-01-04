<!DOCTYPE html>
<html lang="en">

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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory')?>/images/logo.ico"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/vendor/FontAwesome6.4Pro/css/all.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/custom-2.css">

    <?php wp_head() ?>
</head>

<body>

    <div class="menu-wrap container-fluid ">
        <div class="menu-border">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="89" viewBox="0 0 1374 89" fill="none">
                <script xmlns="" />
                <script xmlns="" />
                <mask id="path-1-outside-1_801_323" maskUnits="userSpaceOnUse" x="0" y="0" width="1374" height="89"
                    fill="black">
                    <rect fill="white" width="1374" height="89" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 2C5.58172 2 2 5.58172 2 10V66C2 70.4183 5.58171 74 9.99999 74H568.031C575.717 74 582.047 80.5566 588.58 84.6076C591.025 86.1243 593.91 87 597 87H777C780.09 87 782.975 86.1243 785.42 84.6076C791.953 80.5566 798.283 74 805.969 74H1364C1368.42 74 1372 70.4183 1372 66V10C1372 5.58172 1368.42 2 1364 2H777H597H10Z" />
                </mask>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 2C5.58172 2 2 5.58172 2 10V66C2 70.4183 5.58171 74 9.99999 74H568.031C575.717 74 582.047 80.5566 588.58 84.6076C591.025 86.1243 593.91 87 597 87H777C780.09 87 782.975 86.1243 785.42 84.6076C791.953 80.5566 798.283 74 805.969 74H1364C1368.42 74 1372 70.4183 1372 66V10C1372 5.58172 1368.42 2 1364 2H777H597H10Z"
                    fill="white" />
                <path
                    d="M785.42 84.6076L784.366 82.9079L785.42 84.6076ZM588.58 84.6076L589.634 82.9079L588.58 84.6076ZM4 10C4 6.68629 6.68629 4 10 4V0C4.47715 0 0 4.47715 0 10H4ZM4 66V10H0V66H4ZM9.99999 72C6.68628 72 4 69.3137 4 66H0C0 71.5229 4.47714 76 9.99999 76V72ZM568.031 72H9.99999V76H568.031V72ZM597 85C594.294 85 591.772 84.234 589.634 82.9079L587.526 86.3073C590.279 88.0146 593.527 89 597 89V85ZM777 85H597V89H777V85ZM784.366 82.9079C782.228 84.234 779.706 85 777 85V89C780.473 89 783.721 88.0146 786.474 86.3073L784.366 82.9079ZM1364 72H805.969V76H1364V72ZM1370 66C1370 69.3137 1367.31 72 1364 72V76C1369.52 76 1374 71.5228 1374 66H1370ZM1370 10V66H1374V10H1370ZM1364 4C1367.31 4 1370 6.68628 1370 10H1374C1374 4.47716 1369.52 0 1364 0V4ZM777 4H1364V0H777V4ZM597 4H777V0H597V4ZM10 4H597V0H10V4ZM786.474 86.3073C788.179 85.2504 789.856 84.0389 791.481 82.8599C793.126 81.6661 794.719 80.5047 796.339 79.4703C799.591 77.3934 802.7 76 805.969 76V72C801.552 72 797.653 73.8849 794.186 76.0991C792.446 77.2102 790.751 78.4475 789.132 79.6224C787.492 80.8121 785.928 81.9393 784.366 82.9079L786.474 86.3073ZM568.031 76C571.3 76 574.409 77.3934 577.661 79.4703C579.281 80.5047 580.874 81.6661 582.519 82.8599C584.144 84.0389 585.821 85.2504 587.526 86.3073L589.634 82.9079C588.072 81.9393 586.508 80.8121 584.868 79.6224C583.249 78.4475 581.554 77.2102 579.814 76.0991C576.347 73.8849 572.448 72 568.031 72V76Z"
                    fill="#63635E" mask="url(#path-1-outside-1_801_323)" />
            </svg>
        </div>

        <div class="container menu">
            <?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc menu-left'));?>

            <div class="logo">
                <a href="<?php echo home_url() ?>"><img src="<?php echo get_field('logo', 'option')?>" alt=""></a>
            </div>
            
            <?php wp_nav_menu (
                array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc menu-right'));?>
        </div>


    </div>

    <div class="container-fluid mobile">
        <img src="<?php echo get_field('mobile-border', 'option') ?>" alt="">

        <div class="logo">
            <a href="<?php echo home_url() ?>"><img src="<?php echo get_field('logo', 'option')?>" alt=""></a>
        </div>

        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="menu-mobile">
        <div class="overlay"></div>

        <?php wp_nav_menu (
                array('theme_location' => 'menu-3', 'menu_class' => 'm-mobile'));?>
    </div>