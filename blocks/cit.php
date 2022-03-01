<?php

/**
 * Steps Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'cit-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'cit';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$text = get_field('text');
$author = get_field('author');
$bgcolor = get_field('bgcolor');

//Preview in Gutemberg image
if( !empty( $block['data']['_is_preview'] ) ) { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/acf-blocks-preview/preview-cit.png">
<?php
} else {
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $bgcolor?> mb-240-r">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <div class="cit-container">
                        <blockquote>
                            <div class="quote">
                                <svg width="54" height="43" viewBox="0 0 54 43" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation">
                                <path d="M13.28 22.24C16.0533 22.56 18.1333 23.7333 19.52 25.76C20.9067 27.7867 21.6 30.0267 21.6 32.48C21.6 35.04 20.7467 37.3333 19.04 39.36C17.44 41.3867 15.04 42.4 11.84 42.4C10.56 42.4 9.22667 42.1867 7.84 41.76C6.45333 41.2267 5.17333 40.3733 4 39.2C2.82667 38.0267 1.86667 36.4267 1.12 34.4C0.373333 32.3733 0 29.8133 0 26.72C0 20.96 1.65333 15.7867 4.96 11.2C8.26667 6.50666 12.48 2.77333 17.6 0L22.24 6.39999C19.4667 7.89333 16.96 9.92 14.72 12.48C12.5867 14.9333 11.1467 18.0267 10.4 21.76L13.28 22.24ZM44.48 22.24C47.2533 22.56 49.3333 23.7333 50.72 25.76C52.1067 27.7867 52.8 30.0267 52.8 32.48C52.8 35.04 51.9467 37.3333 50.24 39.36C48.64 41.3867 46.24 42.4 43.04 42.4C41.76 42.4 40.4267 42.1867 39.04 41.76C37.6533 41.2267 36.3733 40.3733 35.2 39.2C34.0267 38.0267 33.0667 36.4267 32.32 34.4C31.5733 32.3733 31.2 29.8133 31.2 26.72C31.2 20.96 32.8533 15.7867 36.16 11.2C39.4667 6.50666 43.68 2.77333 48.8 0L53.44 6.39999C50.6667 7.89333 48.16 9.92 45.92 12.48C43.7867 14.9333 42.3467 18.0267 41.6 21.76L44.48 22.24Z"/>
                                </svg>
                            </div>
                            <div class="wysiwyg mb-32-r"><?php echo $text; ?></div> 
                            <cite><?php echo $author; ?></cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>