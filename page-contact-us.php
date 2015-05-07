<?php get_header(); ?>

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $image = get_field('image');
      $narrative1 = get_field('narrative_1');
      $narrative2 = get_field('narrative_2');
      $twitter = get_field('twitter');
      $facebook = get_field('facebook');

      echo "<div class=\"main-view\">";
        echo "<div id=\"contact-us\" class=\"row extra-padding\">";
          echo "<div class=\"medium-6 columns narrative\"><p><img src=\"{$image}\" alt=\"Contact Us\" /></p></div>";
          echo "<div class=\"medium-5 columns\">";
            echo "<div class=\"row\">";
              echo "<div class=\"medium-6 columns narrative\">{$narrative1}</div>";
              echo "<div class=\"medium-6 columns narrative\">{$narrative2}</div>";
              echo "<div class=\"small-12 columns narrative\">";
                echo "<h3 class=\"with-margin\">Stay Connected</h3>";
                echo "<a href=\"http://twitter.com/{$twitter}\" class=\"social-media\" target=\"_blank\">";
                  echo "<i class=\"fa fa-twitter-square\"></i><span>{$twitter}</span>";
                echo "</a>";
              echo "</div>";
              echo "<div class=\"small-12 columns narrative\">";
                echo "<a href=\"http://facebook.com/{$facebook}\" class=\"social-media\" target=\"_blank\">";
                  echo "<i class=\"fa fa-facebook-official\"></i><span>{$facebook}</span>";
                echo "</a>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    }
  }
?>

<?php get_footer(); ?>
