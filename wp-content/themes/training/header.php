<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>


        <!--    Enable Vite to automatically apply styling changes-->
        <?php if (getenv('WP_ENV') === 'local'): ?>
            <script type="module" src="http://localhost:5173/@vite/client"></script>
            <script type="module" src="http://localhost:5173/main.js"></script>
        <?php endif ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary', // This matches the location registered in functions.php
        'menu_class' => 'menu', // Adds a CSS class to the <ul> of the menu
        'container' => false, // Don't wrap the menu in any container
    ));
    ?>
</nav>
