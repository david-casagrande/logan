<?php

function red_shortcode($atts, $content = null) {
  return "<span class=\"primary\">{$content}</span>";
}
add_shortcode('red', 'red_shortcode');

function callout_shortcode($atts, $content = null) {
  return "<span class=\"call-out\">{$content}</span>";
}
add_shortcode('callout', 'callout_shortcode');

?>
