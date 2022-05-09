<?php

/**
 * Secondary Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'secondary-hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'secondary-hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$image = get_field('image');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-subhero.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-180-r">
        <div class="container"> 
            <div class="row">
                <div class="col-12 col-lg-7">
                    <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                    <h1 class="subhero-h1"><?php echo $title; ?></h1>
                </div>
                <div class="col-12 col-lg-4 offset-lg-1 order-lg-3 subhero-img-col">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <div class="col-12 col-lg-7">
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