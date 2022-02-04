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

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <h1 class="overtitle mb-8"><?php echo $overtitle; ?></h1>
                <p class="h1 mb-32"><?php echo $title; ?></p>
                <div class="wysiwyg mb-32"><?php echo $text; ?></div>
                <?php if( $button ): 
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>  
            </div>
            <div class="col-12 col-lg-4 offset-lg-1">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        </div>
    </div>
</section>