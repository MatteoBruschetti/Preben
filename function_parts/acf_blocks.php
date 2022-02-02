<?php

    /*Registriamo una nuova categoria x i blocchi in Gutemberg
    --------------------------------------------------------------*/
    function NC_block_categories( $categories, $post ) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug' => 'norvegianBlocks',
                    'title' => __( 'Blocchi personalizzati Norvegian Community', 'XY' ),
                    'icon' => 'star-filled'
                ),
            )
        );
    }
    add_filter( 'block_categories', 'NC_block_categories', 10, 2 );




    /*Registriamo blocchi ACF
    --------------------------------------------------------------*/
    add_action('acf/init', 'NC_acf_init_block_types');
    function NC_acf_init_block_types() {
        if( function_exists('acf_register_block_type') ) {


            /*HERO block
            ------------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'hero',
                'title'             => __('Hero section'),
                'description'       => __("Homepage Hero"),
                'render_template'   => '/blocks/hero.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'superhero-alt',
                'keywords'          => array( 'hero' ),
                //preview del blocco
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'overtitle'              =>          "Preview overtitle",
                            'title'                  =>          "Preview title",
                            'text'                   =>          "Preview text",
                            'media'                  =>          "https://source.unsplash.com/random",
                            'button'                 =>          array(
                                    'url'               =>          "#",
                                    'title'             =>          "Button preview"
                            )
                        )
                    )
                )
            ));

            /*TESTO IMMAGINE
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'txt_img',
                'title'             => __('Text and Image'),
                'description'       => __('Section with text on a side and image on the other'),
                'render_template'   => '/blocks/txt-img.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'align-pull-left',
                'keywords'          => array( 'sezione', 'testo', 'immagine' ),
                'mode'              => 'edit',
                'align'             => 'wide',
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                //preview in Gutemberg
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'overtitle'              =>          "Preview overtitle",
                            'title'                  =>          "Preview title",
                            'text'                   =>          "Preview text",
                            'image'                  =>          "https://source.unsplash.com/random",
                            'button'                 =>          array(
                                    'url'               =>          "#",
                                    'title'             =>          "Button preview"
                            ),
                            'position'      => 'left'
                        )
                    )
                )
            ));



            /*CITAZIONE
            *Testo e svg decorativa
            ------------------------------------------------------------*/
            // acf_register_block_type(array(
            //     'name'              => 'citazione',
            //     'title'             => __('Citazione'),
            //     'description'       => __("Testo e decorazione"),
            //     'render_template'   => '/blocks/cit.php',
            //     'category'          => 'norvegianBlocks',
            //     'icon'              => 'editor-quote',
            //     'keywords'          => array( 'quote', 'cit', 'citazione', 'testo', 'testo in evidenza' ),
            //     'mode'              => 'edit',
            //     'align'             => 'wide',
            //     'supports'          => array(
            //         'align' => false,
            //         'jsx' => true,
            //     ),
            //     //preview in Gutemberg
            //     'example'  => array(
            //         'attributes' => array(
            //             'mode' => 'preview',
            //             'data' => array(
            //                 'grafica'          =>          "“",
            //                 'testo'             =>          "Testo",
            //             )
            //         )
            //     )
            // ));



            


            // /*IMMAGINE A TUTTO SCHERMO
            // *Immagine full width
            // --------------------------------------------------------*/
            // acf_register_block_type(array(
            //     'name'              => 'immagine_full_width',
            //     'title'             => __('Immagine a tutto schermo'),
            //     'description'       => __('Sezione con immagine a tutto schermo'),
            //     'render_template'   => '/blocks/immagine-full-width.php',
            //     'category'          => 'norvegianBlocks',
            //     'icon'              => 'format-image',
            //     'keywords'          => array( 'sezione', 'tutto schermo', 'immagine' ),
            //     'mode'              => 'edit',
            //     'align'             => 'wide',
            //     'supports'          => array(
            //         'align' => false,
            //         'jsx' => true,
            //     )
            // ));


        }
    }

?>