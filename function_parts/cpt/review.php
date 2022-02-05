<?php 
/*-------------------------------------------------
    ADD CUSTOM POST TYPE
--------------------------------------------------*/

    /*Replace = review*/

    function NC_custom_review() {
        register_post_type('review',
            array(
                'labels'                =>          array(
                    'name'              =>          'Reviews', //nome principale nella sidebar
                    'singular_name'     =>          'review',
                    'all_items'         =>          'All', //nome link per visualizzare tutti i post
                    'add_new'           =>          'Add review', //nome link per aggiungere nuovo post
                    'add_new_item'      =>          'Add review', //titolo della pagina di aggiunta di un nuovo post
                    'edit_item'         =>          'Edit review', //titolo della pagina di aggiunta di un nuovo post
                    'new_item'          =>          'New review',
                    'view_item'         =>          'See review',
                    'search_items'      =>          'Search', //testo nel pulsante di ricerca
                    'not_found'         =>          'Nessun elemento trovato',
                    'not_found_in_trash'=>          'Nessun elemento nel cestino',
                    'parent_item_colon' =>          '',
                ),
                'description'           =>          'Good feedback that students leave',
                'public'                =>          true,
                'publicly_queryable'    =>          true,
                'exclude_from_search'   =>          false,
                'show_ui'               =>          true,
                'query_var'             =>          true,
                'menu_position'         =>          20,
                'menu_icon'             =>          'dashicons-star-filled', //Dashicon
                'rewrite'               =>          array(
                    'slug'              =>          'review',
                    'with-front'        =>          false,
                ),
                'has_archive'           =>          true,
                'capability_type'       =>          'post',
                'hierarchycal'          =>          false,
                'taxonomies'            =>          array(''),
                'show_in_rest'          =>          false, //gutemberg disattivato
                'supports'              =>          array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields') //campi supportati
            ), flush_rewrite_rules() /*fine delle opzioni*/
        );
    }
    add_action('init', 'NC_custom_review');


    
    /*SHORTCODE
    -----------------------------*/
    add_shortcode( 'review', 'NC_display_review_custom_post_type' );

    function NC_display_review_custom_post_type($atts){
        ob_start();
        extract( shortcode_atts( array (
            'limit' => -1,
            'categoria' => '',
            'evidenza' => false
        ), $atts ) );

        $args = array(
            'post_type'         => 'review',
            'post_status'       => 'publish',
            'orderby'           => 'count',
            'order'             => 'DESC',
            'posts_per_page'    => -1,
            'categoria_tag'     =>  $categoria
        );
        
        if( $evidenza == true ) {
            $args['meta_query'][] = array(
                'relation'		=> 'AND',
                array(
                'key'	 	=> 'in_evidenza',
                'value'	  	=> array(true),
                'compare' 	=> 'IN',
                ),
            );
        };

        // STAMPA
        $NC_query = new WP_Query( $args );
        if( $NC_query->have_posts() ){ ?>
            <section class="review mb-240-r">
                <div class="container">
                    <div class="row">
                        <?php
                        // RICERCA POST NATIVI
                        while( $NC_query->have_posts() ){
                            $NC_query->the_post();
                            global $post; 
                            //get alt text of thumbnail
                            $thumbnail_id  = get_post_thumbnail_id( $post->ID ); $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                            ?>
                                <div class="col-12 col-lg-6 mb-64-r-max">
                                    <article>
                                        <div class="quote">
                                            <svg width="54" height="43" viewBox="0 0 54 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.28 22.24C16.0533 22.56 18.1333 23.7333 19.52 25.76C20.9067 27.7867 21.6 30.0267 21.6 32.48C21.6 35.04 20.7467 37.3333 19.04 39.36C17.44 41.3867 15.04 42.4 11.84 42.4C10.56 42.4 9.22667 42.1867 7.84 41.76C6.45333 41.2267 5.17333 40.3733 4 39.2C2.82667 38.0267 1.86667 36.4267 1.12 34.4C0.373333 32.3733 0 29.8133 0 26.72C0 20.96 1.65333 15.7867 4.96 11.2C8.26667 6.50666 12.48 2.77333 17.6 0L22.24 6.39999C19.4667 7.89333 16.96 9.92 14.72 12.48C12.5867 14.9333 11.1467 18.0267 10.4 21.76L13.28 22.24ZM44.48 22.24C47.2533 22.56 49.3333 23.7333 50.72 25.76C52.1067 27.7867 52.8 30.0267 52.8 32.48C52.8 35.04 51.9467 37.3333 50.24 39.36C48.64 41.3867 46.24 42.4 43.04 42.4C41.76 42.4 40.4267 42.1867 39.04 41.76C37.6533 41.2267 36.3733 40.3733 35.2 39.2C34.0267 38.0267 33.0667 36.4267 32.32 34.4C31.5733 32.3733 31.2 29.8133 31.2 26.72C31.2 20.96 32.8533 15.7867 36.16 11.2C39.4667 6.50666 43.68 2.77333 48.8 0L53.44 6.39999C50.6667 7.89333 48.16 9.92 45.92 12.48C43.7867 14.9333 42.3467 18.0267 41.6 21.76L44.48 22.24Z" fill="#002868"/>
                                            </svg>
                                        </div>
                                        <div class="review-text mb-32-r"> <p> <?php echo get_the_content(); ?> </p> </div> 
                                        <div class="row align-items-center">
                                            <div class="col-2 no-pr">
                                                <img class="review-avatar" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
                                            </div>
                                            <div class="col-10">
                                                <p class="review-name"><?php the_title(); ?></p>
                                                <aside class="review-course">
                                                    <?php the_excerpt(); ?>
                                                </aside> 
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php
                        };
                        wp_reset_postdata();
                        ?>
                        <div class="col-12 col-lg-6 review-cta-col mb-64">
                            <div class="review-cta">
                                <p class="mb-24-r">Would you be the next?</p>
                                <a href="#" class="button">CHECK OUT OUR LEVEL</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <?php
        };
        return ob_get_clean();
        wp_reset_query();
    }

?>