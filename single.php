<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header(); ?>

    <?php if ( have_posts() ) {
        while ( have_posts() ) {            
            the_post();
            $thumbnail_id  = get_post_thumbnail_id( $post->ID ); $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="overtitle mb-8-r pt-24-r"><?php the_date(); ?></p>
                        <h1 class="mb-40-r"><?php the_title(); ?></h1>
                        <img class="single-post-thumbnail mb-64-r" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
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