<?php

    /*ADD Option Page*/
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Norwegian Settings',
            'menu_title'	=> 'Norwegian Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'icon_url'      => 'dashicons-info',
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
                    'title' => __( 'Norwegian Blocks', 'NC' ),
                    'icon' => 'star-filled'
                ),
            ),
            array(
                array(
                    'slug' => 'norvegianLayout',
                    'title' => __( 'norvegian Layout', 'NC' ),
                    'icon' => 'editor-contract'
                ),
            ), 
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
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));
            

            /*TITLE and TEXT
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));
            

            /*Heading H2
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'heading',
                'title'             => __('Heading H2'),
                'description'       => __('Section with heading'),
                'render_template'   => '/blocks/heading.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'heading',
                'keywords'          => array( 'section', 'heading H2' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
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
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));


            /*IMMAGINE A TUTTO SCHERMO
            *Immagine full width
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'img_full_width',
                'title'             => __('Full screen Image'),
                'description'       => __('Sezione con img a tutto schermo'),
                'render_template'   => '/blocks/img-full-width.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'format-image',
                'keywords'          => array( 'sezione', 'tutto schermo', 'immagine' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));
            

            /*FAQ
            *accordion section
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'faq',
                'title'             => __('Faq'),
                'description'       => __('Sezione con accordion apribili'),
                'render_template'   => '/blocks/faq.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'sort',
                'keywords'          => array( 'sezione', 'faq', 'accordion', 'dropdown' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*Cit
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'cit',
                'title'             => __('Quote'),
                'description'       => __('Use this block for add a quote'),
                'render_template'   => '/blocks/cit.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'editor-quote',
                'keywords'          => array( 'sezione', 'cit', 'citazione' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*CHECKS
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'checks',
                'title'             => __('Checks'),
                'description'       => __('Section with icon checks'),
                'render_template'   => '/blocks/checks.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'saved',
                'keywords'          => array( 'section', 'icon', 'checks' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*Photo Gallery
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'gallery',
                'title'             => __('Photo Gallery'),
                'description'       => __('Put your best photo in this gallery'),
                'render_template'   => '/blocks/gallery.php',
                'category'          => 'norvegianBlocks',
                'icon'              => 'images-alt2',
                'keywords'          => array( 'sezione', 'foto', 'galleria' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));

            /*Bootstrap Container
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'bootstrap-container',
                'title'             => __('Container'),
                'description'       => __('Wrap blocks inside this container to keep it align within the website grid'),
                'render_template'   => '/blocks/bootstrap-container.php',
                'category'          => 'norvegianLayout',
                'icon'              => 'align-center',
                'keywords'          => array( 'section', 'bootstrap-container' ),
                'mode'              => 'edit',
                
                //Custom preview in Gutemberg
                'supports'          => array(
                    'align' => false,
                    'jsx' => true,
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            '_is_preview'   => 'true'
                        )
                    )
                )
            ));


            /*Spacers
            --------------------------------------------------------*/
            acf_register_block_type(array(
                'name'              => 'spacer',
                'title'             => __('Spacers'),
                'description'       => __('Use this block to add white space to layout'),
                'render_template'   => '/blocks/spacer.php',
                'category'          => 'norvegianLayout',
                'icon'              => 'fullscreen-alt',
                'keywords'          => array( 'sezione', 'spazio', 'vuoto' ),
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