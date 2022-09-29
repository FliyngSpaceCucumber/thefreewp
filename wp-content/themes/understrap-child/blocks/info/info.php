<?php
/**
 * Info  Block Template.
 *
 */
$title = get_field('info_title');
$text = get_field('info_text');
$info_img = get_field('info_img');
?>

<section class="info my-200 text-center text-md-start">
        <div class="row">
            <div class=" col-0 col-md-2"></div>
            <div class="col-12 col-md-5 px-6 px-md-0">
                <h2><?php echo $title ?></h2>
                <div  class="fw-lora"> <?php echo $text ?> </div>
            </div>
            <div class="info_img d-none d-md-block col-0 col-md-5">
                <img src="<?php echo $info_img['url'] ?>" alt="">
            </div>
        </div>
</section>
