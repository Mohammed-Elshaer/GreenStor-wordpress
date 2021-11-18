<?php

    function Elshaer_enqueue_stylesheets(){

        wp_enqueue_style('Elshaer-stylesheet',get_stylesheet_uri());
        wp_style_add_data('Elshaer-stylesheet','rtl','replace');
    }
    add_action('wp_enqueue_scripts','Elshaer_enqueue_stylesheets' );

// جعل القائمة ديناميكية الناف بار
function Elshaer_register_menus(){
    $args = array('main-menu'=> 'Main Menu');
    register_nav_menus($args);

}
add_action('init', 'Elshaer_register_menus');
//Elshaer widgets

function Elshaer_register_widgets(){
    $footer1 = array(
        'name' => 'Footer Column 1',
        'id' => 'footer1',
        'before_widget' => '<div id="%1$s" class="widget Elshaer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    );
    register_sidebar($footer1);
}
add_action('widgets_init', 'Elshaer_register_widgets');

$footer2 = array(
    'name' => 'Footer Column 2',
    'id' => 'footer2',
    'before_widget' => '<div id="%1$s" class="widget Elshaer-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
);
register_sidebar($footer2);

$footer3 = array(
    'name' => 'Footer Column 3',
    'id' => 'footer3',
    'before_widget' => '<div id="%1$s" class="widget Elshaer-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
);
register_sidebar($footer3);