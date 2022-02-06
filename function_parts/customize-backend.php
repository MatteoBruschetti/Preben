<?php
    /*WP custom backend
    --------------------------------*/
    
    //custom wp backend logo = 17x17px
    function NC_custom_logo() {
        echo '<style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/custom-logo.png) !important;
                background-position: 0 0;
                background-size: cover;
                color:rgba(0, 0, 0, 0);
            }
             #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
                background-position: 0 0;
            }
            .wp-admin div#ays-quiz-winter-dicount-main div#ays-quiz-dicount-month-main.ays_quiz_dicount_info{display:none}
        </style>';
    }
    add_action('wp_before_admin_bar_render', 'NC_custom_logo');

    //custom wp login logo = 85x85px
    function NC_custom_login_logo() { 
        echo '<style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/custom-login-logo.png);
                background-repeat: no-repeat;
                background-size: cover;
                margin-bottom: 10px
            }
            #login h1::after, .login h1::after {
                content: "for dev help 👇 (matteobruschetti@gmail.com) ";
                font-size: 16px;
                font-weight: 400;
                opacity: 0.8;
                margin-bottom: 20px
            }
        </style>';
    }
    add_action('login_enqueue_scripts', 'NC_custom_login_logo');


    //custom color scheme
    function norvegiancommunity_admin_color_scheme() {
        $theme_dir = get_stylesheet_directory_uri();
        wp_admin_css_color( 'norvegiancommunity', __( 'Norvegian Community' ),
          $theme_dir . '/css-parts/norvegian-community.css',
          array( '#002868', '#fff', '#dc0500' , '#dc0500')
        );
      }
      add_action('admin_init', 'norvegiancommunity_admin_color_scheme');
      
?>