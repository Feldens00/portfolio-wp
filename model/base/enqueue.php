<?php
  wp_deregister_script('jquery');
  // $libsFile = file_get_contents(get_template_directory().'/libs.json');
  // $libs = json_decode($libsFile, true);
  $versions = array(
    'css' => '1.5',
    'js' => '1.5'
  );
  $dirs = array(
    'css' => get_template_directory_uri().'/dist/css',
    'js' => get_template_directory_uri().'/dist/js'
  );
  $node = array(
    'css' => get_template_directory_uri().'/dist/css',
    'js' => get_template_directory_uri().'/dist/js'
  );
  //wp_enqueue_style('bootstrap',get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false);
  

  wp_enqueue_style('style',get_template_directory_uri().'/style.css', array(), false);
  wp_enqueue_style('fontawesome',get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.min.css', array(), false);
  wp_enqueue_script('jquery_js', get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js', array(), false, true);
  wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('fontawesome_js', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/js/all.min.js', array(), false, true);
  wp_enqueue_script('popper_js', get_template_directory_uri().'/node_modules/popper.js/dist/umd/popper.min.js', array(), false, true);
  wp_enqueue_script('main', $dirs['js'].'/main.js', array(), $versions['js'], true);