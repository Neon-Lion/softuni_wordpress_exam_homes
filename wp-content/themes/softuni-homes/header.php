<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link rel="stylesheet" href="./css/master.css">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="site-wrapper">
            <header class="site-header">
                <?php if( is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( get_home_url() ); ?>">Properties Offers</a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( get_home_url() ); ?>">Properties Offers</a></p>
                <?php endif ?>
            </header>