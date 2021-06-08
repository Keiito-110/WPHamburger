<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
	<meta name="description" content="Hamburger menu site by Word Press">
	<meta name="keywords" content="WordPress, Theme, development">
    <link rel="shortut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<div class="c-columnlayout">

    <div class="c-columnlayout--main">

        <div class="c-columnlayout--cover"></div>
    

        <header>
            <div class="l-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h1 class="c-title--header"><?php bloginfo( 'name' ); ?></h1>
                </a>

                <?php get_search_form(); ?>

            </div>

            <h2><a href="#" class="c-button--menu">Menu</a></h2>
        
        </header>
