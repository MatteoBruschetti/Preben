<?php

/**
 * FOTO GALLERY
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'photo-gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'photo-gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$images = get_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)


//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-gallery.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $position ?> mb-240-r-max">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="masonry">
                        <?php if( $images ): ?>
                            <?php foreach( $images as $image_id ): ?>
                                <div class="item">
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php
}
?>