<?php

/**
 * IMMAGINE A TUTTO SCHERMO
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'immagine-full-width-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'immagine-full-width';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$img = get_field('immagine');
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="row mb-xl">
        <div class="col-12" style="background-image:url(<?php echo $img; ?>);"></div>
    </div> 
</section>