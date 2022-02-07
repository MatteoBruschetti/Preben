<?php

/**
 * Bootstrap Container Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'acf-bootstrap-container-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'acf-bootstrap-container';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$template = array(

  );

?>

    <div class="container <?php echo esc_attr($className); ?>"> 
        <div class="row">
            <div class="col-12">
                <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>
            </div>
        </div>
    </div>