<?php /**template name: Lớp Bồ câu */ get_header(); ?>
<div class="progs-wrap">
    <div class="container progs">
        <div class="prog-text1"><?php echo get_field('heading-text1','option') ?></div>
        <div class="prog-text2"><?php echo get_field('heading-text2') ?></div>
        <div class="row group-cards">
            <?php if(have_rows('programs','option')): while(have_rows('programs','option')): the_row(); ?>
            <div class="col-lg-4 col-md-6 card-item">
                <div class="card-wrap">
                    <div class="single-card boCau">
                        <div class="front">
                            <img src="<?php echo get_sub_field('img') ?>" alt="">
                        </div>
                        <div class="back">
                            <div class="prog-name">
                                <?php echo get_sub_field('name') ?>
                            </div>
                            <div class="prog-des">
                                <?php echo get_sub_field('des') ?>
                            </div>
                            <div class="prog-meta">
                                <ul>
                                    <?php if(have_rows('info')): while(have_rows('info')): the_row(); ?>
                                    <li><?php echo get_sub_field('inf')?></li>
                                    <?php endwhile; endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>
<div class="chichBongWrap">
    <div class="container">
        <div class="chichbong-title"><?php the_title() ?></div>
        <div class="row">
            <div class="col-lg-3">
                <div class="menu-sidebar">
                    <?php if(have_rows('content')): while(have_rows('content')): the_row();

                        $textToConvert = get_sub_field('title');
                        $words = explode(' ', $textToConvert);

                        
                        $idArray = array();
                        foreach ($words as $word) {
                            $idArray[] = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $word));
                        }
                        
                        $combinedId = implode(' ', $idArray);
                        ?>
                    <div class="main-heading">
                        <a href="#<?php echo $combinedId ?>"><?php echo get_sub_field('title')?></a>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="bird">
                    <img src="<?php echo get_field('bird-img')?>" alt="" class="w-100">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <div class="gallery">
                        <?php if(have_rows('images')): while(have_rows('images')): the_row(); ?>
                        <div class="gallery-img">
                            <a href="<?php echo get_sub_field('img') ?>">
                                <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100">
                            </a>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="main-content">
                        <ol>
                            <?php if(have_rows('content')): while(have_rows('content')): the_row();
                        $textToConvert = get_sub_field('title');
                        $words = explode(' ', $textToConvert);

                        
                        $idArray = array();

                        foreach ($words as $word) {
                            $idArray[] = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $word));
                        }

                        $combinedId = implode(' ', $idArray);
                        ?>

                            <li id="<?php echo $combinedId; ?>">

                                <?php echo get_sub_field('title'); ?>

                                <div class="c-text">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php  get_footer(); ?>