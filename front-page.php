<!------------------------------------------------------------------
    THIS IS THE HOME PAGE
    as long as is set the option: "homepage displays a static page"
-------------------------------------------------------------------->
<?php get_header(); ?>

        <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                    <?php the_content(); ?>
                <?php
            }
        }?>

        <br>
        <p>frontpage.php here</p>
        <br>

<?php get_footer(); ?>