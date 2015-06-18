<?php get_header(); ?>

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $withTab = get_field('with_tab');
      include('templates/_page.php');
    }
  }
?>

<?php get_footer(); ?>
