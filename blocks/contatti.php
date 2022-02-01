<?php

/**
 * contatti Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'contatti-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'contatti';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$map = get_field('map');
$rows = get_field('contatti');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-fluid mt-160">
        <div class="row">
            <div class="col-6">
                <?php
                // Check rows exists.
                if( $rows ):

                    foreach( $rows as $repeat ) { ?>
                        <div class="mb-40">
                            <div class="overline primary"><?php echo $repeat['titolo'] ?></div>
                            <div><?php echo $repeat['testo'] ?></div>
                        </div>
                        <?php
                    }
                else:
                endif;
                ?>
            </div>
            
            <div class="col-6">
                <div><?php echo $map; ?></div>
            </div>
            
            </div> 
        </div>
    </div>
</div>