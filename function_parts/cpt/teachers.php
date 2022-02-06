<?php 
/*-------------------------------------------------
    ADD CUSTOM POST TYPE
--------------------------------------------------*/

    /*Replace = teacher*/

    function NC_custom_teacher() {
        register_post_type('teacher',
            array(
                'labels'                =>          array(
                    'name'              =>          'Teachers', //nome principale nella sidebar
                    'singular_name'     =>          'teacher',
                    'all_items'         =>          'All', //nome link per visualizzare tutti i post
                    'add_new'           =>          'Add teacher', //nome link per aggiungere nuovo post
                    'add_new_item'      =>          'Add teacher', //titolo della pagina di aggiunta di un nuovo post
                    'edit_item'         =>          'Edit teacher', //titolo della pagina di aggiunta di un nuovo post
                    'new_item'          =>          'New teacher',
                    'view_item'         =>          'See teacher',
                    'search_items'      =>          'Search', //testo nel pulsante di ricerca
                    'not_found'         =>          'Nessun elemento trovato',
                    'not_found_in_trash'=>          'Nessun elemento nel cestino',
                    'parent_item_colon' =>          '',
                ),
                'description'           =>          'Norwegian COmmunity team',
                'public'                =>          true,
                'publicly_queryable'    =>          true,
                'exclude_from_search'   =>          false,
                'show_ui'               =>          true,
                'query_var'             =>          true,
                'menu_position'         =>          20,
                'menu_icon'             =>          'dashicons-businesswoman', //Dashicon
                'rewrite'               =>          array(
                    'slug'              =>          'teacher',
                    'with-front'        =>          false,
                ),
                'has_archive'           =>          true,
                'capability_type'       =>          'post',
                'hierarchycal'          =>          false,
                'taxonomies'            =>          array(''),
                'show_in_rest'          =>          true, //gutemberg attivato
                'supports'              =>          array('title', 'thumbnail', 'excerpt', 'editor') //campi supportati
            ), flush_rewrite_rules() /*fine delle opzioni*/
        );
    }
    add_action('init', 'NC_custom_teacher');


    
    /*SHORTCODE
    -----------------------------*/
    add_shortcode( 'teacher', 'NC_display_teacher_custom_post_type' );

    function NC_display_teacher_custom_post_type($atts){
        ob_start();
        extract( shortcode_atts( array (
            'limit' => -1,
            'categoria' => '',
            'evidenza' => false
        ), $atts ) );

        $args = array(
            'post_type'         => 'teacher',
            'post_status'       => 'publish',
            'orderby'           => 'count',
            'order'             => 'DESC',
            'posts_per_page'    => -1,
            'categoria_tag'     =>  $categoria
        );

        // STAMPA
        $NC_query = new WP_Query( $args );
        if( $NC_query->have_posts() ){ ?>
            <section class="teacher mb-240-r">
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
                                <div class="col-12 col-md-6 mb-64-r-max">
                                    <article class="teacher-card">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="teacher-avatar mb-32-r" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
                                            <h3 class="teacher-name mb-24-r"><?php the_title(); ?></h3>
                                            <div class="teacher-excerpt mb-24-r"><?php the_excerpt(); ?></div>
                                            <div class="link">Read more</div>
                                        </a>
                                    </article>
                                </div>
                            <?php
                        };
                        wp_reset_postdata();
                        ?>
                    </div> 
                </div>
            </section>
            <?php
        };
        return ob_get_clean();
        wp_reset_query();
    }

?>