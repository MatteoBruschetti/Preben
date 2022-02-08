<?php

//custom GB full screen Logo
function NC_custom_fullscreeneditor_logo(){
    $screen = get_current_screen();
    if( ! $screen->is_block_editor ) {
        return;
    }

    echo '<style>
        body.is-fullscreen-mode .edit-post-header a.components-button.has-icon svg{
            display: none;
        }
        /* adds a custom image */
        body.is-fullscreen-mode .edit-post-header a.components-button.has-icon:before{
            background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/custom-logo.png);
            background-size: contain;
            /* you can the image paddings with the parameters below*/
            top: 10px;
            right: 10px;
            bottom: 10px;
            left: 10px;
        }     
    </style>';


    //highlights blocks inside gb editor and block reusable editing
    echo '<style>
        
        .wp-block.wp-block-acf-bootstrap-container{
            border: 2px dashed #00800063;
        }

        .wp-block.is-reusable {
            border: 2px dashed red;
            cursor: not-allowed;
        }
        .wp-block.is-reusable .wp-block:not(.is-reusable) {
            cursor: not-allowed;
        }       
        .is-reusable::before {
            content:"This is a reusable block. Convert it to a regular one by clicking on the pink icon." !important;
            background: pink;
        }
        button[aria-label="Convert to regular blocks"]{background: pink;}
        
    </style>';
}
add_action( 'admin_head', 'NC_custom_fullscreeneditor_logo' );


//disable gb Sidebar Settings
function NC_disable_gutenberg_sidebar_settings() {
    //remove core patterns
    remove_theme_support("core-block-patterns");
    //hide Color
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'editor-color-palette' );
	add_theme_support( 'editor-gradient-presets', [] );
	add_theme_support( 'disable-custom-gradients' );
}
add_action( 'after_setup_theme', 'NC_disable_gutenberg_sidebar_settings' );


?>