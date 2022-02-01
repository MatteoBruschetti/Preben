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
$titolo = get_field('titoloh1') ?: 'Titolo👈';
$testo = get_field('testo') ?: 'Testo👈';
$img = get_field('img');
$btn = get_field('btn');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div class="container-fluid pl-310"> 
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="mr-120">
            <h1><?php echo $titolo; ?></h1>
            <p><?php echo $testo; ?></p>

            <?php if( $btn ): 
                $link_url = $btn['url'];
                $link_title = $btn['title'];
                ?>
                    <a class="btn mt-80" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>  
            </div>      
        </div>
        <div class="col-md-6 col-sm-12 hero-img" style="background-image:url(<?php echo $img; ?>);"></div>
    </div>
</div>
</div>