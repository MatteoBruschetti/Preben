<?php get_header(); ?>

    <section class="quattrozeroquattro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="overtitle mb-8-r">ERROR 404</p>
                    <h1 class="mb-24-r">Page not found...</h1>
                    <p class="mb-24-r">...but you found a Norwegian polar bear!</p>
                    <img class="quattrozeroquattro-img mb-40-r" src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="Norwegian polar bear">
                    <a class="button mb-180-r" href="<?php echo esc_url_raw(home_url()); ?>">Return to homepage</a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>