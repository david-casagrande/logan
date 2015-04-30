<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title><?php bloginfo('name'); ?><?php wp_title(' - '); ?></title>
  <style>
    body:before { background-image: url('<?php echo get_background_image(); ?>'); }
  </style>
  <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>
  <?php include('templates/_main_nav.php'); ?>
  <a href="/" class="logo" title="<?php bloginfo('name'); ?>"></a>
