<?php
/**
 * Counter  Block Template.
 *
 */
$first_one = get_field('first_one');
$text_one = get_field('text_one');
$second_number = get_field('second_number');
$second_text = get_field('second_text');
$third_number = get_field('third_number');
$third_text = get_field('third_text');
?>

<section class="counter">
<div class="container">
    <div class="row">
        <div class="col-4 counter_number">
            <p class="counter_number"><?php echo $first_one ?></p>
        </div>
        <div class="col-4">
            <p class="counter_number">$ <?php echo $second_number ?></p>
            <p></p>
        </div>
        <div class="col-4 counter_number">$ <?php echo $third_number ?>
        </div>
    </div>
</div>
</section>
