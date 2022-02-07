<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header(); ?>

    <?php if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="overtitle mb-8-r pt-24-r"><?php the_date(); ?></p>
                        <h1 class="mb-64-r"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div>
                <?php the_content(); ?>
            </div>


            <br>
            <p>single.php here</p>
            <br>

        <?php
        }
    } ?>


    
<?php get_footer(); ?>