<?php get_header(); ?>

<?php

  $query = new WP_Query(array('pagename' => 'about-us'));

  if ($query->have_posts() ) {
    while ($query->have_posts() ) {
      $query->the_post();
      $withTab = true;
      include('templates/_page.php');
    }
  }

  wp_reset_postdata();
?>

<?php get_footer(); ?>
