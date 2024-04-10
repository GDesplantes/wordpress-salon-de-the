<!DOCTYPE html>
<html lang="fr-FR" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <img id="logo" 
        src="<?=get_template_directory_uri();?>/img/logo.jpg">
    </header>
    <h1><?php 
    the_title();
    ?></h1>
    <main>
    <nav>
        <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_id'     => 'primary-menu',
            )); ?>
    </nav>

<?php
    
    ?>
    </main>