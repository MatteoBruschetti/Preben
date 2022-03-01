<?php

/**
 * TESTO IMMAGINE
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'txt-img-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'txt-img';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$image = get_field('image');
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$button = get_field('button');
$position = get_field('position');


//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-txtimg.png">
<?php
} else { 
    ?>


    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $position ?> mb-240-r-max">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-img">
                    <figure class="img-wrapper i-v">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                    <h2 class="mb-32-r"><?php echo $title; ?></h2>
                    <div class="wysiwyg mb-32-r"><?php echo $text; ?></div> 
                    <?php if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>  
                </div>
            </div> 
        </div>
    </section>

    <?php
}
?>