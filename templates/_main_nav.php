<div class="main-nav">
  <div class="row">
    <div class="medium-6 columns left-nav">
      <?php
        $defaults = array(
          'theme_location'  => 'main-nav-left',
          'container'       => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
        );
        wp_nav_menu($defaults);
      ?>
    </div>
    <div class="medium-6 columns right-nav">
      <?php
        $defaults = array(
          'theme_location'  => 'main-nav-right',
          'container'       => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s text-right">%3$s</ul>'
        );
        wp_nav_menu($defaults);
      ?>
    </div>
  </div>
</div>
<a class="nav-toggle show-for-small-only" href="#"><span></span></a>
