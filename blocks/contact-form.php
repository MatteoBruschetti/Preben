<?php

/**
 * Contact Form 7 Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'contact-form-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'contact-form';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$shortcode = get_field('shortcode');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-240-r">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="contact-icon mb-40">
                    <a href="<?php echo get_theme_mod("NC_social_whatsapp"); ?>" target="_blank" aria-label="Link opens in a new tab" class="contact-icon-link">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="32.5" fill="#002868"/>
                            <path d="M47.9185 41.9622C47.8542 41.9314 45.4484 40.7467 45.0209 40.5928C44.8464 40.5302 44.6594 40.469 44.4606 40.469C44.1357 40.469 43.8628 40.6309 43.6502 40.9489C43.4099 41.3061 42.6824 42.1565 42.4576 42.4105C42.4283 42.444 42.3882 42.4841 42.3642 42.4841C42.3427 42.4841 41.9703 42.3308 41.8576 42.2818C39.2769 41.1608 37.318 38.465 37.0494 38.0104C37.011 37.945 37.0094 37.9153 37.0091 37.9153C37.0185 37.8807 37.1053 37.7937 37.1501 37.7488C37.2811 37.6192 37.4231 37.4483 37.5605 37.283C37.6255 37.2047 37.6906 37.1262 37.7546 37.0523C37.9539 36.8204 38.0426 36.6404 38.1455 36.4319L38.1993 36.3236C38.4505 35.8247 38.236 35.4036 38.1667 35.2676C38.1098 35.1538 37.094 32.7022 36.986 32.4446C36.7262 31.8231 36.3831 31.5337 35.9062 31.5337C35.8619 31.5337 35.9062 31.5337 35.7206 31.5415C35.4946 31.551 34.2641 31.713 33.72 32.056C33.1431 32.4198 32.167 33.5793 32.167 35.6184C32.167 37.4537 33.3316 39.1865 33.8317 39.8455C33.8441 39.8621 33.8669 39.8959 33.9 39.9443C35.815 42.7409 38.2022 44.8135 40.6223 45.7803C42.9521 46.7109 44.0553 46.8185 44.6826 46.8185C44.6827 46.8185 44.6827 46.8185 44.6827 46.8185C44.9462 46.8185 45.1572 46.7978 45.3433 46.7795L45.4614 46.7682C46.2662 46.6969 48.0349 45.7804 48.4373 44.6623C48.7542 43.7817 48.8378 42.8196 48.6269 42.4704C48.4825 42.233 48.2336 42.1135 47.9185 41.9622Z" fill="white"/>
                            <path d="M40.2929 23C31.3555 23 24.0843 30.2165 24.0843 39.0868C24.0843 41.9557 24.8521 44.764 26.3066 47.2219L23.5227 55.4339C23.4708 55.587 23.5094 55.7562 23.6227 55.8715C23.7044 55.955 23.8153 56 23.9285 56C23.9719 56 24.0157 55.9935 24.0583 55.9799L32.6212 53.2589C34.9644 54.5108 37.6127 55.1717 40.293 55.1717C49.2296 55.1718 56.5 47.956 56.5 39.0868C56.5 30.2165 49.2296 23 40.2929 23ZM40.2929 51.8208C37.7709 51.8208 35.3281 51.0925 33.2283 49.7147C33.1577 49.6683 33.0758 49.6445 32.9933 49.6445C32.9497 49.6445 32.9059 49.6511 32.8634 49.6646L28.5739 51.0281L29.9587 46.9429C30.0034 46.8107 29.981 46.6649 29.8985 46.5521C28.2995 44.3673 27.4543 41.7859 27.4543 39.0868C27.4543 32.0643 33.2137 26.351 40.2928 26.351C47.3711 26.351 53.1298 32.0643 53.1298 39.0868C53.1299 46.1084 47.3713 51.8208 40.2929 51.8208Z" fill="white"/>
                        </svg>
                        <p class="contacts-icon-label"><?php echo get_theme_mod("NC_contatti_telefono"); ?></p>
                    </a>
                </div>
                <div class="contact-icon mb-40">
                    <a href="mailto:<?php echo get_theme_mod("NC_contatti_email"); ?>" target="_blank" aria-label="Link opens in a new tab" class="contact-icon-link">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="32.5" fill="#002868"/>
                            <path d="M25 28.75H55V50C55 50.3315 54.8683 50.6495 54.6339 50.8839C54.3995 51.1183 54.0815 51.25 53.75 51.25H26.25C25.9185 51.25 25.6005 51.1183 25.3661 50.8839C25.1317 50.6495 25 50.3315 25 50V28.75Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M55 28.75L40 42.5L25 28.75" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="contacts-icon-label"><?php echo get_theme_mod("NC_contatti_email"); ?></p>
                    </a>
                </div>
                <div class="contact-icon mb-80">
                    <a href="tel:<?php echo get_theme_mod("NC_contatti_telefono"); ?>" target="_blank" aria-label="Link opens in a new tab" class="contact-icon-link">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="32.5" fill="#002868"/>
                            <path d="M34.4531 39.5001C35.7394 42.1564 37.8873 44.2988 40.5469 45.5782C40.7431 45.6711 40.96 45.7113 41.1765 45.6949C41.3929 45.6785 41.6013 45.6059 41.7812 45.4845L45.6875 42.8751C45.8601 42.7581 46.0595 42.6866 46.2672 42.6675C46.4748 42.6484 46.6839 42.6822 46.875 42.7657L54.1875 45.9064C54.4374 46.0104 54.6462 46.1937 54.7817 46.428C54.9173 46.6623 54.972 46.9347 54.9375 47.2032C54.7057 49.0122 53.8228 50.6747 52.4538 51.8798C51.0849 53.0848 49.3238 53.7497 47.5 53.7501C41.8641 53.7501 36.4591 51.5113 32.474 47.5261C28.4888 43.541 26.25 38.136 26.25 32.5001C26.2504 30.6764 26.9153 28.9152 28.1204 27.5463C29.3254 26.1773 30.9879 25.2944 32.7969 25.0626C33.0654 25.0281 33.3378 25.0829 33.5721 25.2184C33.8064 25.3539 33.9897 25.5627 34.0937 25.8126L37.2344 33.1407C37.316 33.3288 37.3502 33.534 37.3339 33.7384C37.3175 33.9427 37.2512 34.1399 37.1406 34.3126L34.5312 38.2814C34.4151 38.4609 34.3469 38.6672 34.3332 38.8805C34.3195 39.0939 34.3608 39.3072 34.4531 39.5001V39.5001Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="contacts-icon-label"><?php echo get_theme_mod("NC_contatti_telefono"); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <p class="overtitle mb-8"><?php echo do_shortcode($shortcode);?></p>
            </div>
        </div>
    </div>
</section>