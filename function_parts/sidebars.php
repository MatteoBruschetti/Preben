<?php
/*---------------------------------------------------------------------------
    ADD SIDEBAR (che si popoplano di widget in Aspetto -> Widget)
----------------------------------------------------------------------------*/

if(! function_exists('XY_sidebars')) {


    /*FOOTER sidebars
    ---------------------------------------------*/
    function XY_sidebars() {
        register_sidebar(array(
            'name' => esc_html__('Cerca', 'XY'),
            'id' => 'Cerca',
            'description' => esc_html__('Riga wullwidth del footer per la ricerca', 'XY'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            )
        );
        register_sidebar(array(
            'name' => esc_html__('Footer 1', 'XY'),
            'id' => 'footer1',
            'description' => esc_html__('Prima colonna del footer', 'XY'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            )
        );




    }
}
add_action('widgets_init', 'XY_sidebars');


?>