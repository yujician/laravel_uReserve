<html>
  <head>
    @@livewireStyles
  </head>
  <body>
    Livewireテスト
    <div>
        @if (session()->has('message'))
            <div class="">
                {{ session('message') }}
            </div>
        @endif
    </div>
    {{-- <livewire:counter /> --}}
    @livewire('counter')

    @livewireScripts
  </body>
</html>