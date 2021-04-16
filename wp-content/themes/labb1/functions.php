<?php
/* gör så att vi kan välja en utvald bild till en post */
add_theme_support('post-thumbnails');
/* lägger till så att vi kan skapa menyer i admin panelen */
add_theme_support('menus');
/* lägg till widget */
add_theme_support('widgets');

/* länkar till css and js files */
add_action('wp_enqueue_scripts', 'css_and_js');

function css_and_js(){
    /* här köar vi in stylingen */
    wp_enqueue_style('temastil', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('temastil3', get_template_directory_uri(). '/font-awesome.css');
    wp_enqueue_style('temastil2', get_template_directory_uri(). '/bootstrap.css');
    wp_enqueue_style('temastil4', get_template_directory_uri(). '/new-style.css');
    /*  här köar vi in js filer */
    wp_enqueue_script('temascript1', get_template_directory_uri(). '/jquery.js', [], false, true);
    wp_enqueue_script('temascript2', get_template_directory_uri(). '/script.js', [], false, true);

}
/* kör funktionen show_my_menus vid en viss krok */
add_action('after_setup_theme', 'show_my_menus');

/* funktion för att kunna placera menyerna där du vill ha dem */
function show_my_menus(){
    register_nav_menu('mainmenu', 'Huvudmeny');
    register_nav_menu('footermenu', 'Sociala medier');
    register_nav_menu('sidemenu', 'Sidomeny');
    register_nav_menu('bloggsidesidor', 'Blogg sidomeny sidor');
    register_nav_menu('bloggsidearkiv', 'Blogg sidomeny arkiv');
    register_nav_menu('bloggsidekategorier', 'Blogg sidomeny kategorier');
}

/* skapar område att placera widgets på */
register_sidebar(
    [
        'name' => 'Footer till vänster',
        'Description' => 'placering footer',
        'id' => 'footerleft',
        'before_widget' => ' '
    ]
);
register_sidebar(
    [
        'name' => 'Footer i mitten',
        'Description' => 'placering2 footer',
        'id' => 'footermiddle',
        'before_widget' => ' '
    ]
);



/* the_excerpt() visar per default 55 ord, detta gör att upp till 1000 ord kan visas 
använder denna för att jag vill hämta hela texten i inlägget*/

function wpdocs_custom_excerpt_length( $length ) {
    return 1000;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );





?>