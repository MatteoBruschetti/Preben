<?php

function NC_custom_fullscreeneditor_logo(){
    $screen = get_current_screen();
    if( ! $screen->is_block_editor ) {
        return;
    }

    //custom GB full screen Logo
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

    //basic helpers
    echo '<style>
        .wp-block{
            margin-top: 24px;
            margin-bottom: 24px;
            padding: 8px;
        }
        .wp-block-group, .wp-block-buttons{
            padding: 8px;
        }
        /* add color to spacers */
        .wp-block-spacer{
            background: rgba(211, 211, 211, 0.3);
        }
        /* GREY outline empty blocks */
        .wp-block[aria-label="Blocco vuoto; inizia a scrivere o digita la barra in avanti per scegliere un blocco"], .wp-block[aria-label="Empty block; start writing or type forward slash to choose a block"]{
            border: 1px solid #00000024 !important;
        }
            .wp-block[aria-label="Blocco vuoto; inizia a scrivere o digita la barra in avanti per scegliere un blocco"]:hover, .wp-block[aria-label="Empty block; start writing or type forward slash to choose a block"]:hover{
                border: 1px solid #00000088 !important;
            }
        /* Container label*/
        .wp-block[data-type="acf/bootstrap-container"]:before{
            content:"Container";
            font-size: 14px; text-transform:uppercase; font-weight:600; background: #00800063;
        }
    </style>';

    //helpers for a peaceful coexistence between CORE Gutemberg blocks and ACF blocks
    echo '<style>
        /* RED core blocks outside a bootstrap container */
        .wp-block:not(.editor-post-title):not(.block-list-appender):not(.block-editor-default-block-appender):not([data-type="generateblocks/grid"]):not([aria-label="Empty block; start writing or type forward slash to choose a block"]):not([data-type^="acf/"]):not(.wp-block-shortcode){
            border: 2px dashed red;
        }
                .wp-block:not(.editor-post-title):not(.block-list-appender):not(.block-editor-default-block-appender):not([data-type="generateblocks/grid"]):not([aria-label="Empty block; start writing or type forward slash to choose a block"]):not([data-type^="acf/"]):not(.wp-block-shortcode):before{
                    content:"This block is not placed in a Container. Create a Container and move the block inside the green dashed lines.";
                    background: lightpink; font-size: 14px; font-weight:400; display: block;
                }
                /*LAYOUT FIXES for some specific core blocks*/
                .wp-block-buttons .wp-block-button{border: 1px solid #00000024 !important;}
                .wp-block-buttons .wp-block-button:hover{border: 1px solid #00000088 !important;}
                .wp-block-buttons .wp-block-button:before{display:none !important;}
                hr.wp-block-separator{width:100% !important; padding:24px !Important; opacity: 1 !important;}


        /* GREEN acf blocks*/
        .acf-block-component{
            border: 2px dashed #00800063;
            padding: 8px
        }
        
        /* GREY outline for core blocks inside a bootstrap container */
        .acf-block-component .wp-block:not(.editor-post-title):not(.block-list-appender):not(.block-editor-default-block-appender):not([data-type="generateblocks/grid"]):not([data-type^="acf/"]){
            border: 1px solid #00000024;
        }
            .acf-block-component .wp-block:not(.editor-post-title):not(.block-list-appender):not(.block-editor-default-block-appender):not([data-type="generateblocks/grid"]):not([data-type^="acf/"]):hover{
                border: 1px solid #00000088;
            }
            .acf-block-component .wp-block:not(.editor-post-title):not(.block-list-appender):not(.block-editor-default-block-appender):not([data-type="generateblocks/grid"]):not([data-type^="acf/"]):before{
                display:none;
            }
        /* GREY outline for core blocks inside a group core block */
        .wp-block-group .wp-block:not([data-type="acf/bootstrap-container"]){border: 1px solid #00000024 !important;}
        .wp-block-group .wp-block:not([data-type="acf/bootstrap-container"]):hover{border: 1px solid #00000088 !important;}
        .wp-block-group .wp-block:not([data-type="acf/bootstrap-container"]):before{display:none !important;}
        .wp-block-group .wp-block[data-type="acf/bootstrap-container"]:before{background: lightpink;}
        .wp-block-group .wp-block[data-type="acf/bootstrap-container"] .acf-block-component {border: 2px dashed red;}

        

        /* RED acf blocks inside a bootstrap container */
        .acf-block-component .acf-block-component{
            border: 2px dashed red;
        }
            .acf-block-component .acf-block-component:before{
                content:"This block should not be inside a Container. Move it outside of the green dashed lines.";
                background: lightpink; font-size: 14px; font-weight:400; display: block;
            }
            /* NOT for Spazio Vuoto acf block */
            .acf-block-component .wp-block[data-type="acf/spacer"] .acf-block-component{
                border: 0 !important;
            }
                .acf-block-component .wp-block[data-type="acf/spacer"] .acf-block-component:before{
                    display: none !important;
                }

        /* ORANGE reusable blocks*/
        .wp-block.is-reusable {
            border: 2px dashed orange !important;
            cursor: not-allowed;
        }
            .wp-block.is-reusable:before{
                content:"This is a reusable block. Convert it to a regular one by clicking on the orange icon." !important;
                background: lightgoldenrodyellow !important;
            }
                button[aria-label="Convert to regular blocks"]{background: orange;}

            .wp-block.is-reusable .wp-block.is-reusable{
                border: 0px !important;
                cursor: not-allowed;
            }
                .wp-block.is-reusable .wp-block.is-reusable:before{
                    display:none !important;
                }
            .wp-block.is-reusable .wp-block{
                border: 0px !important;
                cursor: not-allowed;
            }
                .wp-block.is-reusable .wp-block:before{
                    display:none !important;
                }
        .wp-block.is-reusable .acf-block-component{
            border: 0px !important;
        }
        .wp-block.is-reusable .wp-block:not(.is-reusable) {
            cursor: not-allowed;
        }       
    </style>';

    //HIDE unwanted gb Sidebar Settings
    echo '<style>
        .components-panel .typography-block-support-panel{
            display:none;
        }
        .components-toolbar-group button[aria-label="Align"]{
            display:none;
        }
        .components-panel .block-editor-hooks__flex-layout-justification-controls{
            display:none;
        }
            .components-panel .block-editor-hooks__flex-layout-orientation-controls{
                display:none;
            }
            .components-toolbar-group button[aria-label="Change items justification"]{
                display:none;
            }
            .block-editor-hooks__border-controls{
                display:none;
            }
            .components-panel .components-button-group[aria-label="Button width"]{
                display:none;
            }
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


// Remove block style pannel via JS
function enqueue_block_editor_scripts() {
    wp_enqueue_script(
        'gb-style-blocks-js',
        get_stylesheet_directory_uri() . '/js/gb-style-blocks.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), // specify dependencies to avoid race condition
        '1.0',
        true
    );
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_scripts');


?>