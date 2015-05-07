<?php
  function register_styles() {
    $template_dir = get_template_directory_uri();
    $css_file = (defined('PRODUCTION') && constant('PRODUCTION')) ? '/css/logan-sausage.min.css' : '/css/logan-sausage.css';

    wp_register_style('google_font', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
    wp_enqueue_style('google_font');

    wp_register_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_style('font_awesome');

    wp_register_style('logan_sausage', $template_dir.$css_file);
    wp_enqueue_style('logan_sausage');
  }

  add_action('wp_enqueue_scripts', 'register_styles');
?>
