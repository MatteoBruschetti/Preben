<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header(); ?>

    <?php if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
        ?>
            <div class="fixed-bar">
                <a href="<?php echo get_field('link') ?>" target="_blank">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 fixed-bar-container">
                                <p class="mobile-only">Subscribe now</p>
                                <p class="desktop-only">Subscribe to <?php the_title(); ?>  — <?php echo get_field('price') ?></p>
                                <svg class="desktop-only"width="68" height="23" viewBox="0 0 68 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 11.5L66 11.5" stroke="#FBFBFD" stroke-width="2.12516" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M56.4 2L66 11.5L56.4 21" stroke="#FBFBFD" stroke-width="2.12516" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="overtitle mb-8-r pt-24-r"><?php echo get_field('level') ?></p>
                        <h1 class="mb-40-r"><?php the_title(); ?></h1>
                        <div class="wysiwyg mb-32-r"><?php echo get_field('description') ?></div>
                    </div>
                </div>
            </div>
            <div>
                <?php the_content(); ?>
            </div>

        <?php
        }
    } ?>


    
<?php get_footer(); ?>