<header class="header">
  <div class="wrap">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/bbot_logo_header.png')" alt="{{ get_bloginfo('name', 'display') }}" style="width: 153px;"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <nav class="nav-secondary">
      <a href="{{ home_url('/') }}#frontpage-map">Où trouver b:bot ?</a>
    </nav>
  </div>
</header>
