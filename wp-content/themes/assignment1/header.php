<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- Navigation Menuu -->
        <nav>
            <?php wp_nav_menu(
                array(
                    "menu" => "main",
                    "theme_location" => "",
                    "depth" => "2",
                    "fallback_cb" => false
                )
            ); ?>
        </nav>
    </header>