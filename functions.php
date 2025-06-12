<?php
function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

function my_custom_widget() {
    register_sidebar([
        'name' => 'My Sidebar',
        'id' => 'my_sidebar',
        'before_widget' => '<div class="widget-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'my_custom_widget');
