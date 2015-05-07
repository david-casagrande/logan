<?php
  $args = array(
    'post_type' => 'product',
    'post_label' => 'Product',
    'post_new_item_label' => 'Add a New Product',
    'post_slug' => 'products',
    'menu_icon' => 'dashicons-store',
    // 'taxonomy_type' => 'portfolio-category',
    // 'taxonomy_label' => 'Portfolio',
    // 'taxonomy_slug' => 'portfolio'
  );

  $p = new Custom_Post_Type($args);
  $p->create_custom_taxonomy();
?>
