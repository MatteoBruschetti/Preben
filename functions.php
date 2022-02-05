<?php
    //setup_theme
    function NC_setup_theme() {
        //tag title dinamico inserito in automatico nell'header
        add_theme_support("title-tag");
         //add feed RSS supports
        add_theme_support( 'automatic-feed-links' );
        //supporto all'img in evidenza
        add_theme_support("post-thumbnails");
        //aggiunta di una posizione del menu
        register_nav_menu("header", "Navbar Header");
    }
    add_action("after_setup_theme", "NC_setup_theme");
    
    //add CSS
    function NC_styles() {
        wp_enqueue_style("NC-grid", get_template_directory_uri().'/css-parts/bootstrap-grid.min.css');
        wp_enqueue_style("NC-style", get_template_directory_uri().'/style.min.css');
    }
    add_action("wp_enqueue_scripts", "NC_styles");
    //add JS
    function NC_scripts() {
        wp_enqueue_script("NC-scriptjs", get_template_directory_uri().'/js/script.js', array("jquery"), null, true);
    }
    add_action("wp_enqueue_scripts", "NC_scripts");



    /*REMOVE
    ----------------------------------------------*/
    //Remove lazy loading images
    add_filter( 'wp_lazy_loading_enabled', '__return_false' );

    // Remove comments
    add_action('admin_init', function () {
        global $pagenow;
        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit;
        }
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        foreach (get_post_types() as $post_type) {
            if (post_type_supports($post_type, 'comments')) {
                remove_post_type_support($post_type, 'comments');
                remove_post_type_support($post_type, 'trackbacks');
            }
        }
    });
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);
    add_filter('comments_array', '__return_empty_array', 10, 2);
    add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });
    add_action('init', function () {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }
    });

    //Remove emoji
    function NC_disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
        add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
    }
    add_action( 'init', 'NC_disable_emojis' );
        function disable_emojis_tinymce( $plugins ) {
            if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
            } else {
            return array();
            }
        }
        function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
            if ( 'dns-prefetch' == $relation_type ) {
                $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
                $urls = array_diff( $urls, array( $emoji_svg_url ) );
            }
            return $urls;
        }
    
    //Remove embeded
    function NC_disable_embed(){
        wp_dequeue_script( 'wp-embed' );
    }
    add_action( 'wp_footer', 'NC_disable_embed' );




    /*ADD
    --------------------------------------------*/
    // ADD align Gutemberg
    function nx_gutenberg_setup() {
        add_theme_support( 'align-wide' );
    }
    add_action( 'after_setup_theme', 'nx_gutenberg_setup' );

    // Allow SVG
    add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

        global $wp_version;
        if ( $wp_version !== '4.7.1' ) {
           return $data;
        }
      
        $filetype = wp_check_filetype( $filename, $mimes );
      
        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];
      
      }, 10, 4 );
      
      function cc_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter( 'upload_mimes', 'cc_mime_types' );
      
      function fix_svg() {
        echo '';
      }
      add_action( 'admin_head', 'fix_svg' );



/*FUNCTION PARTS
-------------------------------------------------*/
require dirname(__FILE__).'/function_parts/acf_blocks.php';
require dirname(__FILE__).'/function_parts/customizer.php';
require dirname(__FILE__).'/function_parts/customize-backend.php';

//CPT
require dirname(__FILE__).'/function_parts/cpt/review.php';
require dirname(__FILE__).'/function_parts/cpt/courses.php';
?>