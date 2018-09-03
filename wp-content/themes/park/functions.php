<?php

// Park setup
function park_setup() {
  add_theme_support('title-tag');

  register_nav_menu('main-menu', 'Main Menu');

  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(825, 510, true);
}

add_action('after_setup_theme', 'park_setup');



// Park scripts
function park_scripts() {
  wp_enqueue_style('park-style', get_template_directory_uri() . '/css/style.css?v=' . rand());

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js');
  wp_enqueue_script('my-scripts', get_template_directory_uri() . '/js/my-scripts.js?v=' . rand());

  if (is_front_page()) {
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css');
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js');
  }
}

add_action( 'wp_enqueue_scripts', 'park_scripts' );



// Count files in directory
function count_files_in_dir($path) {
  $dir = opendir(__DIR__ . $path);
  $i = 0;

  while (false !== ($file = readdir($dir))) {
    if (!in_array($file, ['.', '..']) && !is_dir($file)) $i++;
  }

  return $i;
}



// Get route name
function get_route_name($page_link) {
  $uri = explode('/', $page_link);

  if (!$uri[count($uri) - 1]) {
    return $uri[count($uri) - 2];
  } else {
    return $uri[count($uri) - 1];
  }
}
