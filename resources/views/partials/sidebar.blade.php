@php(dynamic_sidebar('sidebar-primary'))

<footer class="content-info">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="absolute inset-0 bg-gradient-to-r from-scseafoam to-scgreen-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
      <div class="max-w-md mx-auto text-gray-800">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
    </div>
  </div>
</footer>
