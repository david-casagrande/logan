<?php
  $template_directory = get_template_directory();

  include($template_directory.'/functions/utils/clean_wp_header.php');
  include($template_directory.'/functions/utils/custom_post_type.php');
  include($template_directory.'/functions/custom_background.php');

  include($template_directory.'/functions/custom_post_types/product.php');
  include($template_directory.'/functions/enque_styles.php');
  include($template_directory.'/functions/enque_scripts.php');
  include($template_directory.'/functions/register_menus.php');
  include($template_directory.'/functions/shortcodes.php');
  include($template_directory.'/functions/theme_customize_register.php');
  // include($template_directory.'/functions/ajax/portfolio.php');
?>
