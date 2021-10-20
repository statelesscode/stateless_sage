<div class="max-w-full mx-auto bg-gray-100">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

    <main id="main"
      class="py-8 ml-4 sm:ml-12 md:ml-16 lg:ml-24 xl:ml-48 2xl:ml:64 mr-4 prose main">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif

  @include('partials.footer')
</div>
