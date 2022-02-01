<!------------------------------------------------------
    THIS IS THE LAST TEMPLATE FALLBACK
------------------------------------------------------->
<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    ?>

    <div>index here</div>

    <?php
    }
}
get_footer(); ?>