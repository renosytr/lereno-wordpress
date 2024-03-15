<?php
  /**
  * Theme Functions.
  *
  * @package Lereno
  */

  function lereno_enqueue_scripts() {
    // style
    wp_register_style("style", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css") , "all");
    wp_register_style("bootstrap-css", get_template_directory_uri() . "/assets/lib/bootstrap/css/bootstrap.min.css", [], false, "all");
    
    // script
    wp_register_script("main", get_template_directory_uri() . "/assets/js/main.js", [], filemtime(get_template_directory() . "/assets/js/main.js"), true);
    wp_register_script("bootstrap-js", get_template_directory_uri() . "/assets/lib/bootstrap/js/bootstrap.min.js", [ 'jquery' ], false, true);

    // enqueue
    wp_enqueue_style("style");
    wp_enqueue_style("bootstrap-css");
    wp_enqueue_script("main");
    wp_enqueue_script("bootstrap-js");
  }

  add_action("wp_enqueue_scripts", "lereno_enqueue_scripts");
?>