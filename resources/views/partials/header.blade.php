<header class="header">
  <div class="wrap">
    <a class="brand" href="{{ home_url('/') }}"><img src={{ $datasglobal->logo}} alt="{{ get_bloginfo('name', 'display') }}" style="width: 153px;"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <nav class="nav-secondary">
      <a href="{{ home_url('/') }}#frontpage-map">Où trouver b:bot ?</a>
    </nav>

    <div class="button-mobile">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="nav-mobile">
      <div class="nav-mobile-primary">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      </div>

      <nav class="nav-mobile-secondary">
        <a href="{{ home_url('/') }}#frontpage-map">Où trouver b:bot ?</a>
      </nav>
    </div>
  </div>
</header>
