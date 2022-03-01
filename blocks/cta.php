<?php

/**
 * CTA Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$button = get_field('button');
$link = get_field('link');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-cta.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240-r">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <p class="overtitle mb-8"><?php echo $overtitle; ?></p>
                    <h2 class="mb-32"><?php echo $title; ?></h2>
                    <div class="wysiwyg mb-32"><?php echo $text; ?></div>
                    <?php if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        ?>
                        <a class="button mb-24" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>  
                    <br>
                    <?php if( $link ): 
                        $link_url_2 = $link['url'];
                        $link_title_2 = $link['title'];
                        ?>
                        <a class="link" href="<?php echo esc_url( $link_url_2 ); ?>"><?php echo esc_html( $link_title_2 ); ?></a>
                    <?php endif; ?>  
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>