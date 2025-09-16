<!DOCTYPE html>
<html <?php language_attributes() ?> >
    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <title><?php bloginfo('name') ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <h1><?php bloginfo('name'); ?></h1>
            <?php
            // We want our menu to show here, from functions.php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu'
                ))
            ?>
        </header>