<?php
/*---------------------------------------------------------------------------
    ADD FEATURES TO THE CUSTOMIZE PAGE (che sarebbe Aspetto -> personalizza)
----------------------------------------------------------------------------*/

    function NC_customize_register($wp_customize) {

        /*Gestione del logo
        --------------------------------*/
        $wp_customize->add_section('NC_logo', array(
            'title'       => __('Logo', 'nx'),
            'description' => __('Tutte le specifiche del logo', 'nx'),
            'priority'    => 20,
          )
        );
        // Logo image
        $wp_customize->add_setting('NC_logo_image_color', array('default' => ''));
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'NC_logo_image_color', array(
              'section' => 'NC_logo',
              'label'   => __('Logo a colori', 'nx'),
              'setting'    => 'NC_logo_image_color'
            )
          )
        );
        // Logo alt text
        $wp_customize->add_setting('NC_logo_alt_text', array('default' => 'Logo of the site'));
        $wp_customize->add_control('NC_logo_alt_text', array(
            'section' => 'NC_logo',
            'label'   => __('Alt text del logo ', 'nx'),
            'type'    => 'text'
          )
        );
        // Logo for footer
        $wp_customize->add_setting('NC_logo_footer', array('default' => ''));
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'NC_logo_footer', array(
              'section' => 'NC_logo',
              'label'   => __('Logo monocromatico per il footer', 'nx'),
              'setting'    => 'NC_logo_footer'
            )
          )
        );
        

        /*ADD SECTION FOR CONTACT INFO (utile se i contanti vengono ripetuti su più pagine poichè permette di modificarli tutti in una volta)
        /*per stampare poi i valori basta usare <?php echo get_theme_mod("NC_contatti_telefono"); ?>
        ----------------------------------------------------------*/
        $wp_customize -> add_section("NC_contatti", array(
            "title"                 =>                  "Contatti",
            "description"           =>                  "Inserisci i contatti dell'azienda",
            "priority"              =>                  20
        ));
            /*FIELD Telefono*/
            $wp_customize -> add_setting("NC_contatti_telefono", array(
                "default"           =>                  "Inserisci il tuo numero di telefono"
            ));
                $wp_customize -> add_control("NC_contatti_telefono", array(
                    "section"       =>                 "NC_contatti", /*INSERT THIS FIELD IN SECTION Contatti*/         
                    "label"         =>                 "Telefono",
                    "type"          =>                 "text"
                ));
            
            /*FIELD Email*/
            $wp_customize -> add_setting("NC_contatti_email", array(
                "default"           =>                  "Inserisci il tuo indirizzo email"
            ));
                $wp_customize -> add_control("NC_contatti_email", array(
                    "section"       =>                  "NC_contatti", 
                    "label"         =>                  "Email",
                    "type"          =>                  "text"

                ));
            /*FIELD Indirizzo*/
            $wp_customize -> add_setting("NC_contatti_indirizzo", array(
                "default"           =>                  "Inserisci il tuo indirizzo"
            ));
                $wp_customize -> add_control("NC_contatti_indirizzo", array(
                    "section"       =>                  "NC_contatti", 
                    "label"         =>                  "Indirizzo",
                    "type"          =>                  "text"

                ));
            /*FIELD Piva*/
            $wp_customize -> add_setting("NC_contatti_piva", array(
                "default"           =>                  "Inserisci il tuo codice P.IVA"
            ));
                $wp_customize -> add_control("NC_contatti_piva", array(
                    "section"       =>                  "NC_contatti", 
                    "label"         =>                  "Partita IVA",
                    "type"          =>                  "text"

                ));

            /*FIELD Facebook*/
            $wp_customize -> add_setting("NC_social_facebook", array(
                "default"           =>                  "Inserisci url della pagina facebook"
            ));
                $wp_customize -> add_control("NC_social_facebook", array(
                    "section"       =>                 "NC_contatti",        
                    "label"         =>                 "Facebook",
                    "type"          =>                 "url"
                ));
            
            /*FIELD Instagram*/
            $wp_customize -> add_setting("NC_social_instagram", array(
                "default"           =>                  "Inserisci url della pagina instagram"
            ));
                $wp_customize -> add_control("NC_social_instagram", array(
                    "section"       =>                  "NC_contatti",
                    "label"         =>                  "Instagram",
                    "type"          =>                  "url"

                ));

            
    }      
    add_action("customize_register", "NC_customize_register");

?>