<?php
add_action('acf/init', 'fintext_acf_init_block_types');

function fintext_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('A custom Hero block.'),
            'render_template' => 'blocks/hero/hero.php',
            'enqueue_assets' => function(){
                wp_enqueue_style('hero-css');

            },
        ));

        acf_register_block_type(array(
            'name' => 'invitation',
            'title' => __('Invitation'),
            'description' => __('A custom Invitation block.'),
            'render_template' => 'blocks/invitation/invitation.php',
            'enqueue_assets' => function(){
                wp_enqueue_style('invitation-css');

            },
        ));

        acf_register_block_type(array(
            'name' => 'sponsors',
            'title' => __('Sponsors'),
            'description' => __('A custom Sponsors block.'),
            'render_template' => 'blocks/sponsors/sponsors.php',
            'enqueue_assets' => function(){
                wp_enqueue_style('sponsors-css');

            },
        ));

        acf_register_block_type(array(
            'name' => 'info',
            'title' => __('Info'),
            'description' => __('A custom Info block.'),
            'render_template' => 'blocks/info/info.php',
            'enqueue_assets' => function(){
                wp_enqueue_style('info-css');

            },
        ));

        acf_register_block_type(array(
            'name' => 'counter',
            'title' => __('Counter'),
            'description' => __('A custom Counter block.'),
            'render_template' => 'blocks/counter/counter.php',
            'enqueue_assets' => function(){
                wp_enqueue_style('counter-css');

            },
        ));
    }
}
