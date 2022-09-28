<?php
/**
 * Hero  Block Template.
 *
 */
$hero_top_img = get_field('hero_top_img');
$link_img = get_field('link_img');
$btn_link = get_field('hero_button');
$title = get_field('hero_title');
$hero_above_title = get_field('hero_above_title');
$hero_bottom_img = get_field('hero_bottom_img');

?>
<section class="hero">
    <div class="container">
        <div class="row">
           <?php the_custom_logo(); ?>
            <a class="hero_top-image d-flex justify-content-center" href="<?php echo $link_img ?>">
                <img src="<?php echo $hero_top_img['url'] ?>" alt="">
            </a>
            <h1 class="text-white text-center mt-5"><?php echo $title ?></h1>
            <div class="hero_btn d-flex justify-content-center mt-3">
                <a href="<?php echo $btn_link['url'] ?>" class="btn btn-secondary text-primary border rounded-pill border-0 mt-10 bg-secondary    text-white">
                    <?php echo $btn_link['title'] ?>
                    <i class="fa fa-paper-plane"></i>
                </a>
            </div>
            <img src="<?php echo $hero_bottom_img['url'] ?>" class="mt-100" alt="">

        </div>
    </div>
</section>
