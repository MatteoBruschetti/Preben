<?php

/**
 * lista Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'lista-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'lista';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$main_title = get_field('titolone') ?: 'Titolone👈';
$rows = get_field('lista');
?>


<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-fluid mt-80"> 
        <h2 class="white mb-80"><?php echo $main_title; ?></h2>
        <div class="row">
        <?php
            // Check rows exists.
            if( $rows ):

                foreach( $rows as $repeat ) { ?>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3 img">
                                <img src="<?php echo $repeat['img'] ?>" alt="">
                            </div>
                            <div class="col-9">
                                <h3 class="lista-item white"><?php echo $repeat['titolo'] ?></h3>
                                <div class="lista-item"><?php echo $repeat['testo'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            else:
            endif;
            ?>
           
        </div> 
    </div>
</div>