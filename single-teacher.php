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
                        <img class="teacher-avatar mb-24-r mt-24-r" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
                        <h1 class="mb-40-r"><?php the_title(); ?></h1>
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