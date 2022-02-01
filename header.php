<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header>
        <nav>
            <!--logo dinamico-->
            <div class="logo">
                <?php if(get_theme_mod("XY_logo_image_color")) { ?>
                    <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>">
                        <img src="<?php echo get_theme_mod("XY_logo_image_color"); ?>" alt="<?php echo get_theme_mod("XY_logo_alt_text"); ?>">
                    </a>
                <?php } else { ?>
                    <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo("name"); ?></a>
                <?php } ?>
            </div>
            <!--pannello menu widget-->
            <?php wp_nav_menu(array(
                'theme_location'    =>  'header',
                'container'         =>  false
            )); ?>
            <!--icona-->
            <div class="burger">
                <svg viewBox="0 0 60 44" id="burger-icon">
                    <rect width="60" height="44"/>
                    <line class="l-1" x1="8.07" y1="7.82" x2="51.93" y2="7.82"/>
                    <line class="l-2" x1="8.07" y1="21.97" x2="51.93" y2="21.97"/>
                    <line class="l-3" x1="8.2" y1="36.18" x2="52.07" y2="36.18"/>
                </svg>
            </div>
        </nav>
    
        <div class="fix-fixed"></div>
    </header>
    
    <main>

    

    