<?php
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');

function register_deer_tests_post_type() {
    $labels = [
        'name'               => 'Deer Tests',
        'singular_name'      => 'Deer Test',
        'menu_name'          => 'Deer Tests',
        'add_new_item'       => 'Add New Deer Test',
        'edit_item'          => 'Edit Deer Test',
        'all_items'          => 'All Deer Tests',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_menu'       => true,
        'supports'           => ['title', 'editor', 'thumbnail'],
        'menu_icon'          => 'dashicons-analytics',
		'show_in_rest'       => true,
    ];

    register_post_type('deer_tests', $args);
}
add_action('init', 'register_deer_tests_post_type');
