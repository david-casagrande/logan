<?php
  function register_styles() {
    $template_dir = get_template_directory_uri();
    $css_file = (defined('PRODUCTION') && constant('PRODUCTION')) ? '/css/logan-sausage.min.css' : '/css/logan-sausage.css';

    // wp_register_style('google_font', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,400');
    // wp_enqueue_style('google_font');
    wp_register_style('logan_sausage', $template_dir.$css_file);
    wp_enqueue_style('logan_sausage');
  }

  add_action('wp_enqueue_scripts', 'register_styles');
?>
