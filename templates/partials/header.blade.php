<header class="banner">
  <?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <?php the_custom_header_markup(); ?>
        <div class="site-info">
          <div class="content">
            <div>
            <h1>Title</h1>
            <h2>some info</h2>
          </div>
          </div>
        </div>
    </div>
<?php endif; ?>
  <div class="sticky-nav">
    <nav class="container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
