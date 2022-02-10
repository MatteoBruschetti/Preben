<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE STATIC POST (che sarebbero le pagine)
------------------------------------------------------->
<?php get_header(); ?>
    
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
                <?php the_content(); ?>
            <?php
        }
    }?>

<?php get_footer(); ?>