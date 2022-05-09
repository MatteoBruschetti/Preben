<?php

/**
 * Title and Text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'title_txt-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'title_txt';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-titletxt.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-80">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                    <h2 class="mb-32-r"><?php echo $title; ?></h2>
                    <div class="wysiwyg"><?php echo $text; ?></div> 
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>