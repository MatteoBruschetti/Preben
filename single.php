<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    ?>
    <!-- The template for displaying any single dinamic posts -->

    <p>single.php here</p>
    <p><?php the_title(); ?></p>
    <p><?php the_content(); ?> </p>


    <?php
    }
}
get_footer(); ?>