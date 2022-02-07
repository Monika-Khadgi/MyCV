<?php

function ithslab1_theme_support(){
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ithslab1_theme_support');

function ithslab1_register_style(){
  wp_enqueue_style('labb1-css', get_template_directory_uri() . '/style.css', array('labb1-bootstrap'), '1.1a', 'all');
  wp_enqueue_style('labb1-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.8', 'all');
  wp_enqueue_style('labb1-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.6.4', 'all');
}

add_action('wp_enqueue_scripts', 'ithslab1_register_style');

function ithslab1_register_scripts(){
  
}

add_action('wp_enqueue_scripts', 'ithslab1_register_scripts');

function ithslab1_menus(){
  $location = array();

  register_nav_menus($location);
}


add_action('init', 'ithslab1_menus');

?>