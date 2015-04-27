<?php
$template_directory = get_template_directory();

$defaults = array(
  'default-color'          => '#000',
  'default-image'          => $template_directory . '/images/bg-fpo.jpg',
  'default-repeat'         => 'none',
  'default-position-x'     => 'center'
);
add_theme_support( 'custom-background', $defaults );
?>
