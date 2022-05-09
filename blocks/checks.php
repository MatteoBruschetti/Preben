<?php

/**
 * Checks Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'checks-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'checks';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');
$bgcolor = get_field('bgcolor');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-checks.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $bgcolor?> mb-240-r">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                    <h2 class="mb-32-r"><?php echo $title; ?></h2>
                    <div class="wysiwyg mb-80-r"><?php echo $text; ?></div> 

                    <div class="row">
                        <?php
                            // Check rows exists.
                            if( have_rows('check') ):
                                while( have_rows('check') ) : the_row();
                                    $subtitle = get_sub_field('subtitle');
                                    $subtext = get_sub_field('subtext');
                                    ?>
                                        <div class="col-12 col-lg-6 check-container mb-64-r-max">
                                            <div class="row">
                                                <div class="col-2 t-left">
                                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="check-icon">
                                                        <path d="M59.25 27.75L34.75 52.25L22.5 40" stroke-width="4.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="col-10 no-pl">
                                                    <p class="check-subtitle"><?php echo $subtitle ?></p>
                                                    <p class="check-label"><?php echo $subtext ?></p>
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

    <?php
}
?>