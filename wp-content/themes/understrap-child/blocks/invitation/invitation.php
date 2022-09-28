<?php
/**
 * Invitation  Block Template.
 *
 */
$title = get_field('invitation_title');
$text = get_field('invitation_text');
$button = get_field('invitation_button');


?>

<section class="invitation py-100">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $title ?>
            </h2>
            <p><?php echo $text?></p>
            <div class="invitation_btn d-flex justify-content-center mt-3">
                <a href="<?php echo $button['url'] ?>" class="btn btn-secondary text-primary border rounded-pill border-0 mt-10 bg-secondary  d-flex  text-white">
                    <p class="mb-0"><?php echo $button['title'] ?></p>
                    <i class="fa fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</section>

