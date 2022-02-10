<?php

/**
 * FAQ Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'faq-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'faq';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$overtitle = get_field('overtitle');
$title = get_field('title');
$text = get_field('text');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240-r">
    <div class="container"> 
        <div class="row">
            <div class="col-12">
                <p class="overtitle mb-8-r"><?php echo $overtitle; ?></p>
                <h2 class="mb-32-r"><?php echo $title; ?></h2>
                <div class="wysiwyg mb-80-r"><?php echo $text; ?></div> 
                <?php
                    // Check rows exists.
                    if( have_rows('faq') ):
                        while( have_rows('faq') ) : the_row();
                            $question = get_sub_field('faq_question');
                            $answer = get_sub_field('faq_answer');
                            ?>
                                <div class="faq-container">
                                    <div class="faq-question">
                                        <p><?php echo $question ?></p>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 12L16 22L6 12" stroke="#002868" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="wysiwyg"><?php echo $answer ?></div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    else:
                    endif;
                ?>
            </div>

        </div>
    </div>
</section>