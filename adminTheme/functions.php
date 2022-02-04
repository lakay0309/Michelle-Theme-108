<?php
//Theme Functions Go HERE

function enqueue_my_styles_and_scripts(){

  //enqueue jquery stuff
  wp_deregister_script('jquery');
  wp_enquene_script('jquery', get_theme_file_uri() . '/myassests/js/jquery-3.6.0.js'. array(), null, false);

  //enqueue bootstrap
  wp_enquene_style('bootstrap-styles', get_stylesheet_directory_uri() . '/myassests/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enquene_script('bootstrap-script', get_theme_file_uri() . '/myassests/bootstrap/js/bootstrap.bundle.js', array(), '1.0.0', false);



  //enqueue Personal Code
  wp_enquene_style('my-styles', get_stylesheet_directory_uri() . '/myassests/css/master.css', array(), '1.0.0', 'all');
  wp_enquene_script('my-script', get_theme_file_uri() . '/myassests/js/alum.js', array('jquery'), '1.0.0', true);

}
