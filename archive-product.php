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
  $query = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1));
  if ($query->have_posts()) {
    while ( $query->have_posts() ) {
      $query->the_post();
      $images[get_permalink()] = get_field('image');
    }
  }
  $images = json_encode($images);

  echo "<div class=\"main-view\">";
    echo "<div class=\"row extra-padding\">";
      echo "<div class=\"small-12 columns\"><p><img src=\"{$h1img}\" alt=\"Our Products\"/></p></div>";
      echo "<div class=\"medium-3 columns products-nav\">";
        wp_nav_menu($navOpts);
      echo "</div>";
      echo "<div class=\"medium-9 columns narrative show-for-medium-up\">";
        echo "<p><img id=\"product-image\" src=\"{$image}\" alt=\"{$title}\" /></p>";
      echo "</div>";
    echo "</div>";
  echo "</div>";

  echo "<script type=\"text/javascript\">";
    echo "var LOGAN_IMAGES = {$images};";
    //preload images
    echo "(function() {";
      echo  "if(window.innerWidth <= 960) { return; }"; //960 is mobile breakpoint in css
      echo "for(var img in LOGAN_IMAGES) {";
        echo "if(LOGAN_IMAGES.hasOwnProperty(img)) {";
          echo "var image = new Image(); image.src = LOGAN_IMAGES[img];";
        echo "}";
      echo "}";
    echo "})();";
  echo "</script>";
?>

<?php get_footer(); ?>
