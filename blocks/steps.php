<?php

/**
 * Steps Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'steps-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'steps';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$link = get_field('link');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240-r">
    <div class="container"> 
        <div class="row">
            <div class="col-12">
            <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                <h2 class="mb-32-r"><?php echo $title; ?></h2>
                <div class="wysiwyg mb-80-r"><?php echo $text; ?></div> 

                <div class="row">
                    <?php
                        // Check rows exists.
                        if( have_rows('step') ):
                            while( have_rows('step') ) : the_row();
                                $icon = get_sub_field('icon');
                                $label = get_sub_field('label');
                                ?>
                                    <div class="col-12 col-lg-6 mb-64-r-max">
                                        <div class="row">
                                            <div class="col-12 col-lg-2 t-left">
                                                <img class="step-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="step-label"><?php echo $label ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        else:
                        endif;
                    ?>
                </div>

                <?php if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <a class="link" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>  
            </div>

        </div>
    </div>
</section>