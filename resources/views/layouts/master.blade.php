<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.head')
        <title>Alnaem - @yield('title')</title>
        @livewireStyles
    </head>
    <body>
        <div class="row flex-nowrap">
            <div class="col-lg-12 m-0">
                <header class="bg-white">
                    @include('includes.header')
                </header>
                <section class="h-main-content m-3 mr-5">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>

        <footer>
            @include('includes.footer')
        </footer>
        <x-livewire-alert::scripts />
        @livewireScripts
    </body>
</html>