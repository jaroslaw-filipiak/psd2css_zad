<?php 

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a slider block.
        acf_register_block_type(array(
            'name'              => 'Slider',
            'title'             => __('Slider'),
            'description'       => __('Slider block.'),
            'render_template'   => 'template-parts/blocks/slider/slider.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'slider' ),
        ));
    }
}