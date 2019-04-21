<?php

function codex_files(){

    wp_enqueue_style('codex_main_style', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", 'codex_files');

function codex_setup(){
    //support des vignettes
    add_theme_support( 'post-thumbnails' );

    //créer format image slider front
    add_image_size('up-medium-true', 450, 250, true);
    add_image_size('up-medium-false', 500, 375, false);
    add_image_size('front-slider', 1140, 420, true);
}
add_action( 'after_setup_theme', 'codex_setup' );
