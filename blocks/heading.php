<?php

/**
 * Heading Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'heading-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'heading';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-h2.png">
<?php
} else {
    ?>

    <div class="container <?php echo esc_attr($className); ?> mb-40-r"> 
        <div class="row">
            <div class="col-12">
                <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
    </div>

    <?php
}
?>