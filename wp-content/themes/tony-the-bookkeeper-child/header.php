<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <span class="first-name">Tony</span><br>
                    <span class="last-name">The Bookkeeper</span>
                </a>
            </h1>
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'menu_id'        => 'Header Menu',
                ));
                ?>
            </nav>
        </div>
    </header>