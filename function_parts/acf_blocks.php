<?php

    /*Registriamo una nuova categoria x i blocchi in Gutemberg
    --------------------------------------------------------------*/
    function XY_block_categories( $categories, $post ) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug' => 'myblocks',
                    'title' => __( 'Blocchi personalizzati', 'XY' ),
                    'icon' => 'star-filled'
                ),
            )
        );
    }
    add_filter( 'block_categories', 'XY_block_categories', 10, 2 );




    /*Registriamo blocchi ACF
    --------------------------------------------------------------*/
    add_action('acf/init', 'XY_acf_init_block_types');
    function XY_acf_init_block_types() {
        if( function_exists('acf_register_block_type') ) {


            /*HERO block
            *Img di sfondo, titolo, sottotitolo e CTA
            ------------------------------------------------------------*/
            /*acf_register_block_type(array(
                'name'              => 'hero',
                'title'             => __('Hero section'),
                'description'       => __("Hero"),
                'render_template'   => '/blocks/hero.php',
                'category'          => 'myblocks',
                'icon'              => 'carrot',
                'keywords'          => array( 'hero' ),
                //preview del blocco
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'titolo'              =>          "Preview title",
                            'sottotitolo'         =>          "Preview subtitle",
                            'bg'                  =>          "https://source.unsplash.com/random",
                            'cta'                 =>          array(
                                'url'               =>          "#",
                                'title'             =>          "Cta preview"
                            )
                        )
                    )
                )
            ));*/



            /*CITAZIONE
            *Testo e svg decorativa
            ------------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'citazione',
                'title'             => __('Citazione'),
                'description'       => __("Testo e decorazione"),
                'render_template'   => '/blocks/cit.php',
                'category'          => 'myblocks',
                'icon'              => 'editor-quote',
                'keywords'          => array( 'quote', 'cit', 'citazione', 'testo', 'testo in evidenza' ),
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
                            'grafica'          =>          "“",
                            'testo'             =>          "Testo",
                        )
                    )
                )
            ));



            /*TESTO IMMAGINE
            *Testo accompagnato da immagine a destra o a sinistra
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'testo_immagine',
                'title'             => __('Testo immagine'),
                'description'       => __('Sezione con testo e immagine su due colonne'),
                'render_template'   => '/blocks/testo-immagine.php',
                'category'          => 'myblocks',
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
                            'titolo'            =>          "Titolo",
                            'testo'             =>          "Preview subtitle",
                            'immagine'          =>          "https://source.unsplash.com/random",
                            'pulsante'          =>          array(
                                'url'               =>          "#",
                                'title'             =>          "Pulsante"
                            ),
                            'orientamento'      => 'destra'
                        )
                    )
                )
            ));


            /*IMMAGINE A TUTTO SCHERMO
            *Immagine full width
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'immagine_full_width',
                'title'             => __('Immagine a tutto schermo'),
                'description'       => __('Sezione con immagine a tutto schermo'),
                'render_template'   => '/blocks/immagine-full-width.php',
                'category'          => 'myblocks',
                'icon'              => 'format-image',
                'keywords'          => array( 'sezione', 'tutto schermo', 'immagine' ),
                'mode'              => 'edit',
                'align'             => 'wide',
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                )
            ));


        }
    }

?>