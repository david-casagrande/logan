<?php get_header(); ?>

<?php
  $navOpts = array(
    'theme_location'  => 'product-nav',
    'container'       => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s sub-nav">%3$s</ul>'
  );
  $image = get_theme_mod('products_image');
  echo "<div class=\"main-view\">";
    echo "<div class=\"row extra-padding\">";
      echo "<div class=\"medium-3 columns\">";
        wp_nav_menu($navOpts);
      echo "</div>";
      echo "<div class=\"medium-9 columns narrative\">";
        echo "<p><img src=\"{$image}\" alt=\"{$title}\" /></p>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
?>

<?php get_footer(); ?>
