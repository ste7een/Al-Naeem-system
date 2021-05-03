<div class="row mt-3">
    <div class="col-9">
        {{-- RIGHT --}}
        <div class="pr-4 h-right-content show-scroll">
            <div class="d-flex align-content-stretch flex-wrap mr-7 p-0">
                {{-- RIGHT - TOP - CARD --}}
                @yield('right')
                {{-- FINISH:RIGHT - TOP - CARD --}}
            </div>
        </div>
        {{-- END:RIGHT --}}
    </div>
    <div class="col-3 h-left-content px-0">
        {{-- LEFT --}}
        <div class="card card-fluid rounded-0 border-0 p-5" style="border-bottom-left-radius: 2rem !important;border-top-right-radius: 2rem !important;">
            @yield('left')
        </div>
        {{-- END:LEFT --}}
    </div>
</div>