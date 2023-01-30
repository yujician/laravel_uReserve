<html>
  <head>
    <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

      <!-- Styles -->
      @livewireStyles
  </head>
  <body>
    Livewireテスト <span class="text-red-600">register</span>
    {{-- <livewire:counter /> --}}
    @livewire('register')

    @livewireScripts
  </body>
</html>