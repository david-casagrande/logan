<?php
  function theme_customize_register($wp_customize) {
    $wp_customize->add_setting( 'products_image', array(
      'transport'   => 'refresh',
    ));

    $wp_customize->add_section('products_image_section', array(
      'title'      => __('Products Image', 'logan-sausage'),
      'priority'   => 900,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'product_image', array(
      'label'        => __('Image', 'logan-sausage'),
      'section'    => 'products_image_section',
      'settings'   => 'products_image',
    )));
  }

  add_action( 'customize_register', 'theme_customize_register' );
?>
