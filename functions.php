<?php

// Chargement des styles et des scripts Bootstrap sur WordPress
    function test_register_assets() {
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap');

    }

    add_action('wp_enqueue_scripts', 'test_register_assets');
    add_action('wp_enqueue_scripts', 'test_register_assets');

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajout menus
function register_my_menu(){
   register_nav_menu('main', "Menu principal");
}
add_action('after_setup_theme', 'register_my_menu');

//Personnalisé image header
function themename_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . '/asset/img/header.jpg',
'width' => 2000,
'height' => 500,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

// faire le lien vers notre fichier style.css
function fonctionAppelCss(){
wp_enqueue_style('style_de_mon_parent', get_template_directory_uri() . '/style.css'  );
}add_action('wp_enqueue_scripts', 'fonctionAppelCss');

// Ajout d'un Logo

function julio_theme_support(){
add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'julio_theme_support');

function register_my_sidebars(){
   register_sidebar(
       array(
           'name' => "Sidebar principale",
           'id' => 'main-sidebar',
           'description' => "La sidebar principale",
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2 class="widget-title">',
           'after_title'   => '</h2>'
       )
   );

   register_sidebar(
       array(
           'name' => "Sidebar du footer",
           'id' => 'footer-sidebar',
           'description' => "La sidebar principale",
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2 class="widget-title">',
           'after_title'   => '</h2>'
       )
   );
}
add_action('widgets_init', 'register_my_sidebars');
