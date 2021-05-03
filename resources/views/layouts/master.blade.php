<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.head')
        <title>Alnaem - @yield('title')</title>
        @livewireStyles
    </head>
    <body>
        <div class="sidebar-width px-0 position-fixed top-0 mt-3 mr-3">
            @include('includes.sidebar')
        </div>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col p-0">
                    <section class="bg-section-secondary h-main-content rounded-2 m-3">
                        <header id="header-main">
                            @include('includes.header', ["tools", "tools"])
                        </header>
                        <div class="container-fluid">
                            {{-- Import Layout --}}
                            @if (trim($__env->yieldContent("layout")) == "two-sides")
                                @include('layouts.two-sides')
                            @elseif (trim($__env->yieldContent("layout")) == "one-side")
                                @include('layouts.one-side')
                            @endif
                            {{-- Main Content --}}
                            @yield('content')
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <footer>
            @include('includes.footer')
        </footer>
        
        <x-livewire-alert::scripts />
        @livewireScripts
    </body>
</html>