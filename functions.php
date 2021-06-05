<?php
function multicategory_blog_files() {
    wp_enqueue_style('multicategory_blog_styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('multicategory_blog_styles-single-post', get_template_directory_uri() . '/css/single.css');
    wp_enqueue_script( "header-js", get_theme_file_uri('/js/app.js'), NULL, '1.0', true );
    wp_enqueue_style( 'font-awesome-2', '//use.fontawesome.com/releases/v5.7.0/css/all.css' );
    wp_enqueue_style( "custom-google-font", "//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;1,100;1,200&display=swap" );

}

add_action('wp_enqueue_scripts', 'multicategory_blog_files');

function multicategory_blog_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size('professorLandscape', 400, 260, true);
    // add_image_size('professorPortrait', 480, 650, true);
    // add_image_size('pageBanner', 1500, 350, true);
  }

  add_action('after_setup_theme', 'multicategory_blog_features');

function multicategory_post_types() {
    register_post_type('like', array(
        'public' => true,
	'labels' => array(
		'name' => 'Likes',
		'add_new_items' => 'Add New Like'
	),	
	'menu_icon' => 'dashicons-heart'
    ));
  }

add_action('init', 'multicategory_post_types');
