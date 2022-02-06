<?php
/*-------------------------------------------------
    ADD CUSTOM POST TYPE with custom TAXONOMY
--------------------------------------------------*/

    /*Replace = course*/

    function NC_custom_course() {
        register_post_type( 'course',
            array(
                'labels'                =>          array(
                    'name'              =>          'Courses', //nome principale nella sidebar
                    'singular_name'     =>          'course',
                    'all_items'         =>          'All', //nome link per visualizzare tutti i post
                    'add_new'           =>          'Add course', //nome link per aggiungere nuovo post
                    'add_new_item'      =>          'Add course', //titolo della pagina di aggiunta di un nuovo post
                    'edit_item'         =>          'Edit course', //titolo della pagina di aggiunta di un nuovo post
                    'new_item'          =>          'New course',
                    'view_item'         =>          'View course',
                    'search_items'      =>          'Search', //testo nel pulsante di ricerca
                    'not_found'         =>          'Nessun elemento trovato',
                    'not_found_in_trash'=>          'Nessun elemento nel cestino',
                    'parent_item_colon' =>          '',
                ),
                'description'           =>          "List of Norwegian Community's course",
                'public'                =>          true,
                'publicly_queryable'    =>          true,
                'exclude_from_search'   =>          false,
                'show_ui'               =>          true,
                'query_var'             =>          true,
                'menu_position'         =>          20,
                'menu_icon'             =>          'dashicons-welcome-learn-more', //Dashicon
                'rewrite'               =>          array(
                    'slug'              =>          'course',
                    'with-front'        =>          false,
                ),
                'has_archive'           =>          true,
                'capability_type'       =>          'post',
                'hierarchycal'          =>          false,
                'taxonomies'            =>          array(''),
                'show_in_rest'          =>          false, //gutemberg disattivato
                'supports'              =>          array('title') //campi supportati
            ), flush_rewrite_rules() /*fine delle opzioni*/
        );
    }

    // Inizializzazione della funzione
    add_action( 'init', 'NC_custom_course');

    //aggiunta categorie
    function NC_course_taxonomies() {
        register_taxonomy(
            'categoria_tag',
            'course',
            array(
                'labels' => array(
                    'name' => 'Category',
                    'add_new_item' => 'Add category',
                    'new_item_name' => "Edit category"
                ),
                'show_ui' => true,
                'show_tagcloud' => false,
                'hierarchical' => true,
                'show_admin_column' => true,
                'show_in_rest' => true,
            )
        );
    }

    add_action( 'init', 'NC_course_taxonomies', 0 ); 


    /*SHORTCODE
    -----------------------------*/
    add_shortcode( 'course', 'NC_display_course_custom_post_type' );

    function NC_display_course_custom_post_type($atts){
        ob_start();
        extract( shortcode_atts( array (
            'limit' => -1,
            'category' => '',
            'evidenza' => false
        ), $atts ) );

        $args = array(
            'post_type'         => 'course',
            'post_status'       => 'publish',
            'orderby'           => 'count',
            'order'             => 'ASC',
            'posts_per_page'    => -1,
            'categoria_tag'     =>  $category
        );

        // STAMPA categoria ENTRY
        $NC_query = new WP_Query( $args );
        if( $NC_query->have_posts() ){ ?>
            <section class="course mb-180-r">
                <div class="container">
                    <div class="row">
                        <?php
                        // RICERCA POST NATIVI
                        while( $NC_query->have_posts() ){
                            $NC_query->the_post();
                            global $post;
                            
                            ?>
                                <div class="col-12 mb-80-r"> 
                                    <article class="course-card">
                                        <a href="<?php the_permalink(); ?>">
                                            <p class="overtitle mb-8-r"><?php echo get_field('level') ?>
                                            <h3 class="course-title mb-32-r"><?php the_title(); ?></h3>
                                            <div class="wysiwyg mb-32-r"><?php echo get_field('description'); ?></div>
                                            <div class="button mb-40-r">More about this course</div>
                                            <div class="row">
                                                <?php
                                                    // Check rows exists.
                                                    if( have_rows('keypoints') ):
                                                        while( have_rows('keypoints') ) : the_row();
                                                            ?>
                                                                <div class="col-12 col-sm-6 col-lg-4 mb-24-r points-col">
                                                                    <svg class="points-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="12" cy="12" r="9.75" fill="#002868"/>
                                                                        <path d="M16.5375 9.11255L10.7625 14.8875L7.875 12" stroke="white" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>
                                                                    <p class="points-label"><?php echo get_sub_field('point') ?></p>
                                                                </div>
                                                            <?php
                                                        endwhile;
                                                    else:
                                                    endif;
                                                ?>
                                            </div>
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