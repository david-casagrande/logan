<?php
  $narrative1 = get_field('narrative_1');
  $narrative2 = get_field('narrative_2');
  $narrative3 = get_field('narrative_3');
  $classNames = $withTab ? "main-view with-tab hide" : "main-view";
  $name = $post->post_name;

  echo "<div class=\"{$classNames}\">";
    echo "<div id=\"{$name}\" class=\"row\">";
      if($withTab) {
        echo "<a href=\"#{$name}\" class=\"view-more-tab\"></a>";
      }
      echo "<div class=\"medium-4 columns narrative\">{$narrative1}</div>";
      echo "<div class=\"medium-4 columns narrative middle-column\">{$narrative2}</div>";
      echo "<div class=\"medium-4 columns narrative\">{$narrative3}</div>";
    echo "</div>";
  echo "</div>";
?>
