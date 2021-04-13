<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');

/* link to css and js files */
add_action('wp_enqueue_scripts', 'css_and_js');

function css_and_js(){
    wp_enqueue_style('temastil', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('temastil3', get_template_directory_uri(). '/font-awesome.css');
    wp_enqueue_style('temastil2', get_template_directory_uri(). '/bootstrap.css');
    
    wp_enqueue_script('temascript', get_template_directory_uri(). '/jquery.js', [], false, true);
    wp_enqueue_script('temascript', get_template_directory_uri(). '/script.js', [], false, true);

}
/* placing menus */
add_action('after_setup_theme', 'show_my_menus');

function show_my_menus(){
    register_nav_menu('mainmenu', 'Huvudmeny');
    register_nav_menu('footermenu', 'Sociala medier');
    register_nav_menu('sidemenu', 'Sidomeny');
}