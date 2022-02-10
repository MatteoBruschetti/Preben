<?php

/**
 * IMMAGINE A TUTTO SCHERMO
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'img-full-width-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'img-full-width';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$image = get_field('image');
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $position ?> mb-240-r-max">
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</section>