<nav class="navbar navbar-light bg-white rounded-2" style="border-bottom-left-radius: 0 !important">
    <div class="container-fluid mr-5 py-2">
        <div class="col-auto p-0">
            <div class="row">
                <small>
                    <nav aria-label="breadcrumb" class="mr-4">
                        <ol class="breadcrumb border-0 mr-1">
                            <x-tabuna-breadcrumbs class="breadcrumb-item" active="active"/>
                        </ol>
                    </nav>
                </small>
            </div>
        </div>

        <div class="col-auto p-0 d-flex justify-content-end">
            
            {{-- BRING TOOLS --}}
            {{-- <div class="col-9">
                <div class="d-flex flex-column-reverse" dir="ltr">
                    
                </div>
            </div> --}}

            <div class="col-auto">
                @hasSection('tools')
                    @yield('tools')
                @endif
            </div>

            <div class="col-auto">
                <a class="nav-link nav-link-icon px-2 pb-1 pt-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left dropdown-menu-arrow p-4 text-right">
                    <h6 class="dropdown-header px-0 my-3 text-primary">مرحباً، {{ auth()->user()->name }}</h6>
                    <div class="dropdown-divider"></div>

                    <a href="#" class="dropdown-item text-right">
                       <i class="fas fa-user mr-0 ml-2"></i>
                       <span>الملف الشخصي</span> 
                    </a>

                    <a href="#" class="dropdown-item">
                       <i class="fas fa-cog mr-0 ml-2"></i>
                       <span>الإعدادات</span> 
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-0 ml-2"></i>
                            <span>تسجيل الخروج</span>
                        </button>
                    </form>
                </div>

                <a class="nav-link nav-link-icon px-2 pt-1 pb-0" href="#modal-notifications" role="button" data-toggle="modal">
                    <i class="fas fa-bell"></i>
                </a>
            </div>
            
            <div>
                <span class="avatar rounded-pill">
                    <img alt="Image placeholder" src="https://preview.webpixels.io/quick-website-ui-kit/assets/img/theme/light/person-2.jpg">
                </span>
            </div>
        </div>
    </div>
  </nav>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
