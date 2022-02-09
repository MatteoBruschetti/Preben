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

    //add border to gb blocks
    echo '<style>
        .wp-block .wp-block:not([data-type="generateblocks/grid"]):not(.block-list-appender):not(.block-editor-default-block-appender):not(.editor-post-title){
            border: 1px solid #00000024;
        }
        .wp-block .wp-block:not([data-type="generateblocks/grid"]):not(.block-list-appender):not(.block-editor-default-block-appender):not(.editor-post-title):hover{
            border: 1px solid #00000088;
        }
    </style>';

    //highlights blocks inside gb editor
    echo '<style>
        
        .acf-block-component{
            border: 2px dashed #00800063 !important;
        }
        .acf-block-component .acf-block-component{
            border: 2px dashed red !important;
        }
        .acf-block-component .acf-block-component:before{
            content:"This block should not be here. Move it outside of the green dashed lines." !important;
            background: lightpink;
        }
        .wp-block.is-reusable {
            border: 2px dashed orange !important;
            cursor: not-allowed;
        }
        .wp-block.is-reusable .wp-block.is-reusable{
            border: 0px !important;
            cursor: not-allowed;
        }
        .wp-block.is-reusable .wp-block.is-reusable::before {
            content:"" !important;
            background: transparent;
        }
        .wp-block.is-reusable .acf-block-component{
            border: 0px !important;
        }
        .wp-block.is-reusable .wp-block:not(.is-reusable) {
            cursor: not-allowed;
        }       
        .is-reusable::before {
            content:"This is a reusable block. Convert it to a regular one by clicking on the orange icon." !important;
            background: lightgoldenrodyellow;
        }
        button[aria-label="Convert to regular blocks"]{background: orange;}    
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