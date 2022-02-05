<?php

    /*ADD Option Page*/
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Norwegian Settings',
            'menu_title'	=> 'Norwegian Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Counters',
            'menu_title'	=> 'Counters',
            'parent_slug'	=> 'theme-general-settings',
        ));      
   
    }

    /*Registriamo una nuova categoria x i blocchi in Gutemberg
    --------------------------------------------------------------*/
    function NC_block_categories( $categories, $post ) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug' => 'norvegianBlocks',
                    'title' => __( 'Norwegian Community Blocks', 'NC' ),
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
                'keywords'          => array( 'section', 'text', 'image' ),
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
            
            /*COUNTERS
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'counters',
                'title'             => __('Counters'),
                'description'       => __('Section with course numbers'),
                'render_template'   => '/blocks/counters.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'performance',
                'keywords'          => array( 'section', 'numbers', 'counters' ),
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
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*KEYPOINTS
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'keypoints',
                'title'             => __('Keypoints'),
                'description'       => __('Section with icon keypoints'),
                'render_template'   => '/blocks/keypoints.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'editor-ul',
                'keywords'          => array( 'section', 'icon', 'keypoints' ),
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
                        )
                    )
                )
            ));
            
            /*STEPS
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'steps',
                'title'             => __('Steps'),
                'description'       => __('Section with icon steps'),
                'render_template'   => '/blocks/steps.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'ellipsis',
                'keywords'          => array( 'section', 'icon', 'steps' ),
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
                        )
                    )
                )
            ));
            
            /*TITLE
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'title_txt',
                'title'             => __('Title and Text'),
                'description'       => __('Section with title and text'),
                'render_template'   => '/blocks/title_txt.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'editor-textcolor',
                'keywords'          => array( 'section', 'title and text' ),
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
                        )
                    )
                )
            ));
            
            /*CTA
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'cta',
                'title'             => __('Call to action'),
                'description'       => __('Section with main Call To Action'),
                'render_template'   => '/blocks/cta.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'button',
                'keywords'          => array( 'section', 'call to action' ),
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
                        )
                    )
                )
            ));

            /*SECONDARY HERO block
            ------------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'secondary-hero',
                'title'             => __('Secondary Hero section'),
                'description'       => __("Secondary Hero"),
                'render_template'   => '/blocks/secondary-hero.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'superhero-alt',
                'keywords'          => array( 'secondary-hero' ),
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

            /*CONTACTS
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'contacts',
                'title'             => __('Contacts'),
                'description'       => __('Section with main contact and social link'),
                'render_template'   => '/blocks/contacts.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'email',
                'keywords'          => array( 'section', 'social', 'contacts' ),
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
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*CONTACT FORM [/shortcode]
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'contact-form',
                'title'             => __('Contact Form'),
                'description'       => __('Insert here the Contact Form 7 shortcode'),
                'render_template'   => '/blocks/contact-form.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'testimonial',
                'keywords'          => array( 'section', 'contact form' ),
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
                            'shortcode'              =>          "[/contact-form-7 shortcode='here']",
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