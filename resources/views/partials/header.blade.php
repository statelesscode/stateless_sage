<header class="banner bg-gradient-to-br from-gray-700 to-gray-400 pt-2 pb-10">
  <div class="ml-4 sm:ml-6 md:ml-8 lg:ml-10 xl:ml-12 2xl:ml:16">
    <a class="brand" href="{{ home_url('/') }}">
      <img
        alt="Stateless Code logo"
        src="@asset('images/stateless_logo.svg')"
        class="h-16 float-left inline-block">
      <span class="inline-block mt-3 ml-4 md:ml-6 xl:ml-8 text-gray-300 font-mono lowercase">{{ $siteName }}</span>
    </a>
  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{wp_get_nav_menu_name('primary_navigation')}}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
