<?php
/**
 * Sponsors Template.
 *
 */

?>

<section class="sponsors bg-white">
        <div class="custom-container container-lg">
            <?php if( have_rows('sponsors_slider') ): ?>
            <div class="sponsors_slider d-flex align-items-center ">
                <?php while( have_rows('sponsors_slider') ): the_row();
                $image = get_sub_field('sponsors_slider_img');
                ?>
                    <div class="sponsors_slider_sponsor d-flex justify-content-center"><img src="<?php echo $image['url'] ?>" alt=""></div>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>
        </div>
</section>
