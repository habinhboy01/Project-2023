<div class="footer-wrap">
    <div class="container footer">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo logo-footer">
                    <a href="<?php echo home_url() ?>"><img src="<?php echo get_field('logo-footer', 'option')?>"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-4">

                <?php if(have_rows('address','option')): while(have_rows('address','option')): the_row(); ?>
                <div class="address">
                    <?php echo get_sub_field('text') ?>
                </div>
                <?php endwhile; endif; ?>

            </div>
            <div class="col-lg-3">
                <?php if(have_rows('email','option')): while(have_rows('email','option')): the_row(); ?>
                <div class="mail">
                    <?php echo get_sub_field('icon') ?>
                    <a href="mailto: <?php echo get_sub_field('text') ?>"><?php echo get_sub_field('text') ?></a>

                </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-lg-3">
                <?php if(have_rows('phone','option')): while(have_rows('phone','option')): the_row(); ?>
                <div class="phone">
                    <?php echo get_sub_field('icon') ?>
                    <a href="tel: <?php echo get_sub_field('text') ?>"><?php echo get_sub_field('text') ?></a>
                </div>
                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="copy-text">
            <?php echo get_field('copyright','option') ?>
        </div>
        <div class="socials">
            <?php if(have_rows('socials','option')): while(have_rows('socials','option')): the_row(); ?>
            <div class="socials">

                <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('icon') ?></a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="socials-chatting">
    <?php if(have_rows('socials-chatting','option')): while(have_rows('socials-chatting','option')): the_row(); ?>
    <div class="socials-chat">
        <a href="<?php echo get_sub_field('link') ?>"><img src="<?php echo get_sub_field('icon') ?>" alt=""></a>
    </div>
    <?php endwhile; endif; ?>
    <div class="backToTop"><a href="#"><i class="fa-solid fa-angles-up"></i></a></div>
</div>


<!-- Thư Viện jquery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="<?php bloginfo('template_directory')?>/js/app.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/style.js"></script>

<?php wp_footer() ?>

</body>

</html>