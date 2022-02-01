<!------------------------------------------------------
    THIS IS THE BLOG PAGE IN WICH DISPLAY SINGLE POSTS
------------------------------------------------------->

<?php get_header(); ?>

        <p>home.php here</p>

        
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" class="btn">Leggi</a>
                </article>
            <?php
            }
        } ?>


<?php get_footer(); ?>


