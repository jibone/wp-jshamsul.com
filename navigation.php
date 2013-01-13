
  <!-- navigation container start -->
  <div class="navigation-container">
    <div class="section">
      <div class="logo-container">
        <a href="/"><span class="bold">jS</span>hamsul.com</a>
      </div>
      <div class="navigation">
        <a href="#" id="menu-btn">Menu <i class="js-icon-menu"></i></a>
      </div>
    </div>
    <div id="sticky-anchor"></div>
    <div class="section full-menu-container" id="sticky">
      <?php wp_nav_menu(array(
        'theme_location' => 'header_navigation',
        'menu' => 'blog',
        'container' => false,
        'items_wrap' => '<ul id="%1$s" class="full-menu">%3$s</ul>'
      )); ?>
    </div>
  </div><!-- navigation container ends -->
  <!-- navigation menu container start -->
  <div class="menu-container">
    <?php wp_nav_menu(array(
      'theme_location'  => 'header_navigation',
      'menu'            => 'blog',
      'container'       => false,
      'items_wrap'      => '<ul id="%1$s" class="menu">%3$s</ul>'
    ));?>
  </div><!-- navigation menu container ends -->
