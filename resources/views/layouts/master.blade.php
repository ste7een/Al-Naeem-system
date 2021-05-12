<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.head')
        <title>Alnaem - @yield('title')</title>
        @livewireStyles
    </head>
    <body>
        @include('includes.header')
        <div class="row">
            <div class="col-12 pt-3 pr-9">
                @yield('tools')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
        <footer>
            @include('includes.footer')
        </footer>
        
        <x-livewire-alert::scripts />
        @livewireScripts
    </body>
</html>