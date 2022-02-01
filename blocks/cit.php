<?php
    /**
     * CITAZIONE / TESTO IN EVIDENZA
     *
     * @param   array $block The block settings and attributes.
     * @param   string $content The block inner HTML (empty).
     * @param   bool $is_preview True during AJAX preview.
     * @param   (int|string) $post_id The post ID this block is saved to.
     */

    $id = 'citazione-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $className = 'citazione';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }

    // Load values and assign defaults.
    $svg = get_field('grafica');
    $txt = get_field('testo') ?: 'Testo';

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="row mb-xl">
        <div class="col-12 text-align-center"><?php echo file_get_contents( $svg ); ?>  </div>
        <div class="col-12 text-align-center"><p><?php echo $txt; ?></p></div>
    </div>
</section>