<?php
    add_theme_support( 'menus' );

    // register_nav_menus( array(
    //     'global_nav' => esc_html__('global navigation', 'wpbeg'),
    // ));

    add_theme_support( 'title-tag' ); //タイトル出力

    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にしてください
        } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにしてください
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' ); //

    // // カスタムヘッダー画像有効化
    // add_theme_support( 'custom-header' );
    // // カスタムバックグラウンド有効化
    // add_theme_support( 'custom-background');

    // add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'automatic-feed-links');

    // //コンテンツ幅
    // if( ! isset($content_width )){
    //     $content_width = 960;
    // }

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/scss/profile.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', "", "3.5.1", true );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );