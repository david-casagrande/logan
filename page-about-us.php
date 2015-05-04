<?php get_header(); ?>

<div class="main-view with-tab hide">
  <div id="about-us" class="row">
    <a href="#about-us" class="view-more-tab"></a>
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          $narrative1 = get_field('narrative_1');
          $narrative2 = get_field('narrative_2');
          $narrative3 = get_field('narrative_3');
          echo "<div class=\"medium-4 columns narrative\">{$narrative1}</div>";
          echo "<div class=\"medium-4 columns narrative\">{$narrative2}</div>";
          echo "<div class=\"medium-4 columns narrative\">{$narrative3}</div>";
        }
      }
    ?>
  </div>
</div>

<?php get_footer(); ?>
