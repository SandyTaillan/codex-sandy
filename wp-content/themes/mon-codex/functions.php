<?php
function codex_styles_files(){
    wp_enqueue_style('codex_main_style', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", 'codex_styles_files');

function codex_javascript_files(){
    wp_enqueue_script('codex_main_js', get_template_directory_uri().('/js/script.js'), array());
}
add_action("wp_footer", 'codex_javascript_files');

function codex_setup(){
    //support des vignettes
    add_theme_support( 'post-thumbnails' );

    //créer format image slider front
    add_image_size('thumbnail', 150, 150, true);
    add_image_size('up-medium-true', 450, 250, true);
    add_image_size('up-medium-false', 500, 375, false);
    add_image_size('front-slider', 1140, 420, true);
}
add_action( 'after_setup_theme', 'codex_setup' );

// filtre pour la recherche
function my_search_filter( $query )
{
    if ( $query->is_search )
    {
        $query->set( 'post__not_in',array( 19, 27, 65, 7, 10,41, 5) );
    }
    return $query;
}
add_filter('pre_get_posts','my_search_filter');
