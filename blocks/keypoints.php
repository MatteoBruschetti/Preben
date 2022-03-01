<?php

/**
 * Keypoints Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'keypoints-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'keypoints';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$link = get_field('link');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-keypoints.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                <p class="overtitle mb-8"><?php echo $overtitle; ?></p>
                    <h2 class="mb-32"><?php echo $title; ?></h2>
                    <div class="wysiwyg mb-80"><?php echo $text; ?></div> 

                    <div class="row justify-content-center">
                        <?php
                            // Check rows exists.
                            if( have_rows('points') ):
                                while( have_rows('points') ) : the_row();
                                    $icon = get_sub_field('icon');
                                    $label = get_sub_field('label');
                                    ?>
                                        <div class="col-12 col-sm-6 col-lg-3 mb-64">
                                            <img class="points-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" role="presentation" />
                                            <p class="points-label"><?php echo $label ?></p>
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

    <?php
}
?>