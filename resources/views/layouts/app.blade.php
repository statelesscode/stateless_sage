<div class="max-w-full mx-auto bg-gray-100">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')
    <div class="lg:flex">
      <main id="main"
        class="main-layout-content main flex-none">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar flex-auto">
          @yield('sidebar')
        </aside>
      @endif
    </div>
  @include('partials.footer')
</div>
