<?php

function red_shortcode($atts, $content = null) {
  return "<span class=\"primary\">{$content}</span>";
}
add_shortcode('red', 'red_shortcode');

?>
