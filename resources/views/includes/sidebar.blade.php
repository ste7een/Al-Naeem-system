<div class="d-flex flex-column align-items-center align-items-sm-start text-white bg-primary m-0 p-0 sidebar-content">
    {{-- Start --}}

    {{-- <div class="mb-auto w-100 d-flex justify-content-center">
        <div class="mt-4">
            <a href="{{ url('/') }}" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            </a>
        </div>
    </div> --}}

    {{-- NAVICATIONS --}}
    {{-- <div class="w-100">
        <div class="row m-0 my-1">
            <a class="btn btn-link text-white py-4 c-active text-center">
                <small><i class="fas fa-2x fa-home"></i></small>
            </a>
        </div>
        <div class="row m-0 my-1" style="min-width: 5rem; max-width: 5rem;">
            <a class="btn btn-link text-white py-4 c-active text-center">
                <small><i class="fas fa-2x fa-home"></i></small>
            </a>
        </div>
    </div> --}}
    {{-- NAVICATIONS --}}
{{-- 
    <div class="mt-auto w-100 d-flex justify-content-center">
        <div class="mb-4">
            <div class="row m-0">
                <a class="btn btn-link text-white">
                    <small><i class="fas fa-2x fa-cog"></i></small>
                </a>
            </div>
            <div class="row m-0">
                <a class="btn btn-link text-white">
                    <small><i class="fas fa-2x fa-info"></i></small>
                </a>
            </div>
        </div>
    </div> --}}
    



    <div class="d-flex align-items-center w-100 flex-column h-custom">
        {{-- TOP LOGO --}}
        <div class="mt-4">
            <a href="{{ url('/') }}" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            </a>
        </div>
        {{-- FINISH:TOP LOGO --}}

        {{-- CONTENT --}}
        <div class="d-flex flex-column vh-100">
            <div class="container h-custom-1">
                <div class="row h-custom-1 justify-content-center align-items-center ">
                    {{-- NAVICATIONS --}}
                    <div class="w-100">
                        @foreach (get_sidebar_items(get_role()) as $item)
                            
                        <div class="row m-0 my-2">
                            <a href="{{ set_route($item[0]) }}" class="{{ get_route($item[0]) ? 'c-active' : '' }} btn btn-link text-white btn-hover py-4" data-toggle="tooltip" data-placement="left" title="{{$item[2]}}">
                                <small><i class="fas fa-2x {{$item[1]}} "></i></small>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    {{-- FINISH:NAVICATIONS --}}
                </div>
            </div>
        </div>
        {{-- FINISH:CONTENT --}}

        {{-- FOOTER --}}
        <div class="d-flex flex-column">
            <div class="row m-0">
                <a class="btn btn-link text-white">
                    <small><i class="fas fa-2x fa-cog"></i></small>
                </a>
            </div>
            <div class="row m-0">
                <a class="btn btn-link text-white">
                    <small><i class="fas fa-2x fa-info"></i></small>
                </a>
            </div>
        </div>
        {{-- FINISH:FOOTER --}}
    </div>



    {{-- End --}}
</div>
