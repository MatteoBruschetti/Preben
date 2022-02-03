<?php

/**
 * Counters Block Template based on PAGE OPTIONS
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'counters-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'counters';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}


//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <h1>Counters</h1>
<?php
} else {
    ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240">
        <div class="container">
            <div class="row">
                <?php
                    // Check rows exists.
                    if( have_rows('counters', 'option') ):
                        while( have_rows('counters', 'option') ) : the_row();
                            $number = get_sub_field('number');
                            $text = get_sub_field('text');
                            ?>
                                <div class="col-4">
                                    <p class="counter-number"><?php echo $number ?></p>
                                    <p class="counter-text"><?php echo $text ?></p>
                                </div>
                            <?php
                        endwhile;
                    else:
                    endif;
                ?>
            </div>
        </div>
    </div>

<?php
}
?>