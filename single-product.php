<?php get_header(); ?>

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $title = get_the_title();
      $image = get_field('image');
      $navOpts = array(
        'theme_location'  => 'product-nav',
        'container'       => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s sub-nav single">%3$s</ul>'
      );

      echo "<div class=\"main-view\">";
        echo "<div class=\"row extra-padding\">";
          echo "<div class=\"medium-12 columns narrative show-for-small-only\">";
            echo "<h3><a href=\"/products\" class=\"reverse-link back-to-products\">Back</a></h3>";
          echo "</div>";
          echo "<div class=\"medium-9 columns narrative right\">";
            echo "<p><img src=\"{$image}\" alt=\"{$title}\" /></p>";
          echo "</div>";
          echo "<div class=\"medium-3 columns left\">";
            wp_nav_menu($navOpts);
          echo "</div>";
        echo "</div>";
      echo "</div>";
    }
  }
?>

<?php get_footer(); ?>
