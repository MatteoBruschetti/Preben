<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$button = get_field('button');
$media = get_field('media');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-txt">
                <h1 class="overtitle mb-8-r"><?php echo $overtitle; ?></h1>
                <p class="h1 h1-hero mb-24" role="heading"><?php echo $title; ?></p>
                <div class="wysiwyg mb-32-r"><?php echo $text; ?></div>
                <?php if( $button ): 
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>  
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 col-img">
                <img src="<?php echo esc_url($media['url']); ?>" alt="<?php echo esc_attr($media['alt']); ?>" />
            </div>
        </div>
    </div>
</section>