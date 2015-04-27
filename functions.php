<?php
  $template_directory = get_template_directory();

  include($template_directory.'/functions/utils/clean_wp_header.php');
  include($template_directory.'/functions/utils/custom_post_type.php');
  include($template_directory.'/functions/custom_background.php');

  // include($template_directory.'/functions/custom_post_types/portfolio.php');
  include($template_directory.'/functions/enque_styles.php');
  // include($template_directory.'/functions/enque_scripts.php');
  // include($template_directory.'/functions/ajax/portfolio.php');

  // function register_menus() {
  //   $menus = array(
  //     'main-nav' => __('Main Nav')
  //   );
  //   register_nav_menus($menus);
  // }
  // add_action( 'init', 'register_menus' );

  // function mytheme_customize_register( $wp_customize ) {
  //  //All our sections, settings, and controls will be added here
  //  $wp_customize->add_setting( 'header_textcolor' , array(
  //      'default'     => '#000000',
  //      'transport'   => 'refresh',
  //  ) );
  //
  // }
  // add_action( 'customize_register', 'mytheme_customize_register' );

?>
