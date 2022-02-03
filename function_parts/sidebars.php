<?php
/*---------------------------------------------------------------------------
    ADD SIDEBAR (che si popoplano di widget in Aspetto -> Widget)
----------------------------------------------------------------------------*/

if(! function_exists('NC_sidebars')) {


    /*FOOTER sidebars
    ---------------------------------------------*/
    function NC_sidebars() {
        register_sidebar(array(
            'name' => esc_html__('Cerca', 'NC'),
            'id' => 'Cerca',
            'description' => esc_html__('Riga wullwidth del footer per la ricerca', 'NC'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            )
        );
        register_sidebar(array(
            'name' => esc_html__('Footer 1', 'NC'),
            'id' => 'footer1',
            'description' => esc_html__('Prima colonna del footer', 'NC'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            )
        );




    }
}
add_action('widgets_init', 'NC_sidebars');


?>