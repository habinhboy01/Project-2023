<?php 

/**template name: Lớp Anh Ngữ */ 

get_header(); ?>

<div class="progs-wrap anhNgu-wrap">
    <div class="container progs">
        <div class="prog-text1"><?php echo get_field('text1') ?></div>
        <div class="prog-text2"><?php echo the_field('text2') ?></div>

    </div>
</div>
<div class="chichBongWrap anhNgu">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
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

                    <div class="vision-mission-2">
                        <?php the_field('content'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php  get_footer(); ?>