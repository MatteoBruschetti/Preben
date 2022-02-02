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


    <br>
    <div>page.php here</div>
    <br>

<?php get_footer(); ?>