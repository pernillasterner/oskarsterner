<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>

    <!-- Meta Description for Search Engines -->
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <!-- Meta Keywords (Optional) -->
    <meta name="keywords" content="tattoos, Oskar Sterner, tattoo artist, custom tattoos, art, design">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:image" content="URL_TO_IMAGE">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:type" content="website">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&family=Liter&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-header">
    <a href="https://www.instagram.com/hood.seven/" target="_blank">
        <h3>Cooming Event</h3>
        <div class="highlights">
            <div class="location">
              <strong>HØØD7 </strong>
              <p>Hamburg</p>
            </div>
            <hr>
            <div class="date">
              <strong>4 April</strong>
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