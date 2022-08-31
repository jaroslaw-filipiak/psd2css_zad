<?php

/**
 * Slider Block Template.
 */

$id = $block['id'];
$arrows = get_field('show_arrows');

?>


<section class="splide splide-<?php echo $id ?>" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
        <ul class="splide__list">

            <?php if( have_rows('slider_repeater') ): ?>
            <?php while( have_rows('slider_repeater') ): the_row(); 

                $heading = get_sub_field('slider_heading');
                $content = get_sub_field('slider_content');
                $img = get_sub_field('slider_img');
                ?>

            <li class="splide__slide slider--item">
                <div class="slider--title"><?php echo $heading ?></div>
                <div class="slider--subtitle"><?php echo $content ?></div>

                <?php if( $img ): ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_url($img['alt']); ?>">
                <?php endif; ?>
            </li>

            <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </div>
</section>


<script>
window.addEventListener('DOMContentLoaded', function() {
    new Splide('.splide-<?php echo $id ?>', {
        type: 'loop',
        perPage: 3,
        width: '1046px',
        fixedWidth: '332px',
        gap: '20px',
        arrows: <?php echo $arrows == 1 ? 'true' : 'false' ?>,
        pagination: false,
        updateOnMove: true,
        breakpoints: {
            576: {
                perPage: 1,
                width: '80%',
                fixedWidth: '100%',
            },
            768: {
                perPage: 2,
                width: '80%',
                fixedWidth: 'calc(50% - 19px)',
            },
            1200: {
                perPage: 2,
                width: '80%',
                fixedWidth: 'calc(50% - 19px)',
            },

        }
    }).mount();
})
</script>