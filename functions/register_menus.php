<?php

function register_menus() {
  $menus = array(
    'main-nav-left' => __('Main Nav Left'),
    'main-nav-right' => __('Main Nav Right'),
    'product-nav' => __('Product Nav')
  );
  register_nav_menus($menus);
}
add_action( 'init', 'register_menus' );

?>
