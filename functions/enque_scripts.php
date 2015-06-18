<?php
  function register_scripts() {
    $template_dir = get_template_directory_uri();
    $js_file = (defined('PRODUCTION') && constant('PRODUCTION')) ? '/javascript/dist/logan-sausage.js' : '/javascript/logan-sausage.js';
    $vendor = (defined('PRODUCTION') && constant('PRODUCTION')) ? '/javascript/dist/vendor.js' : '/javascript/vendor.js';

    wp_register_script('logan_sausage', $template_dir.$js_file, ['vendor'], '0.0.1', true);
    wp_enqueue_script('logan_sausage');

    wp_register_script('vendor', $template_dir.$vendor, [], '0.0.1', true);
    wp_enqueue_script('vendor');
  }

  add_action('wp_enqueue_scripts', 'register_scripts');
?>
