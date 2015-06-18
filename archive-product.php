<?php get_header(); ?>

<?php

  $navOpts = array(
    'theme_location'  => 'product-nav',
    'container'       => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s sub-nav">%3$s</ul>'
  );
  $image = get_theme_mod('products_image');
  $h1img = get_template_directory_uri() . '/images/OurProducts.png';
  $images = array('default' => $image);
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $images[get_permalink()] = get_field('image');
    }
  }
  $images = json_encode($images);
  echo "<script>var LOGAN_IMAGES = {$images}</script>";

  echo "<div class=\"main-view\">";
    echo "<div class=\"row extra-padding\">";
      echo "<div class=\"small-12 columns\"><p><img src=\"{$h1img}\" alt=\"Our Products\"/></p></div>";
      echo "<div class=\"medium-3 columns products-nav\">";
        wp_nav_menu($navOpts);
      echo "</div>";
      echo "<div class=\"medium-9 columns narrative\">";
        echo "<p><img id=\"product-image\" src=\"{$image}\" alt=\"{$title}\" /></p>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
?>

<?php get_footer(); ?>
