<?php

    /**
     * TESTO IMMAGINE
     *
     * @param   array $block The block settings and attributes.
     * @param   string $content The block inner HTML (empty).
     * @param   bool $is_preview True during AJAX preview.
     * @param   (int|string) $post_id The post ID this block is saved to.
     */

    $id = 'testo-immagine-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $className = 'testo-immagine';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }

    // Load values and assign defaults.
    $img = get_field('immagine');
    $titolo = get_field('titolo') ?: 'Titolo';
    $testo = get_field('testo') ?: 'Testo';
    $btn = get_field('pulsante');
    $orientamento = get_field('orientamento')
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $orientamento ?> mb-xxl">

    <div class="row">

        <div class="col-12 col-md-6 immagine">
            <img src="<?php echo esc_attr($img)?>" alt="">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="mb-s"><?php echo $titolo; ?></h2>
            <p><?php echo $testo; ?></p> 
            <?php if( $btn ): 
                $link_url = $btn['url'];
                $link_title = $btn['title'];
            ?>
            <a class="btn mt-m" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>  
        </div>

    </div> 

</section>