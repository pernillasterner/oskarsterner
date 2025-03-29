<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&family=Liter&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-header">
    <a href="https://www.instagram.com/hood.seven/" target="_blank">
        <div class="highlights">
            <div class="location">
              <strong>HØØD7</strong>
              <p>Hamburger</p>
            </div>
            <hr>
            <div class="date">
              <span>4 April</span>
            </div>
          </div>
        </a>
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo( 'name' ); ?>"> -->
            </a>
        </div>
        
        <nav>
            <?php
            // wp_nav_menu( array(
            //     'theme_location' => 'primary',
            //     'menu_class' => 'main-menu'
            // ) );
            ?>
        </nav>
    </div>
</header>