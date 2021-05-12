<nav class="navbar navbar-main navbar-expand-lg shadow navbar-light" id="navbar-main">
    <div class="container-xl">
        <img src="{{asset('imgs/alnaeemLogo.png')}}" alt="" width="90px">
       {{-- <button class="navbar-toggler order-lg-2 ml-n3 ml-lg-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> <a class="navbar-brand order-lg-1" href="#"><img alt="Image placeholder" src="{{asset('imgs/alnaeemLogo.png')}}" id="navbar-logo" width="80px"></a> --}}
       <div class="collapse navbar-collapse navbar-collapse-overlay order-lg-3" id="navbar-main-collapse">
          <div class="position-relative">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                   <line x1="18" y1="6" x2="6" y2="18"></line>
                   <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
             </button>
          </div>
          <ul class="navbar-nav ml-lg-auto mr-3">
            @foreach (get_header_items(get_role()) as $item)
               <li class="nav-item nav-item-spaced d-none d-lg-block">
                  <a class="nav-link" href="{{route($item[1])}}">
                     <i class="fas {{$item[2]}}"></i>
                     {{$item[0]}}
                  </a>
               </li>
             @endforeach
             @accountant
             <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-money-check"></i>
                   الانتاج الفني والارشيف
                </a>
                <div class="dropdown-menu dropdown-menu-md p-0">
                   <ul class="list-group list-group-flush px-lg-4">
                      <li class="dropdown dropdown-animate dropdown-submenu text-right" data-toggle="hover">
                         <a href="#" class="list-group-item list-group-item-action" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="media d-flex">
                               <div class="icon icon-shape" >
                                  <i class="fas fa-file-invoice-dollar"></i>
                               </div>
                               <div class="media-body mr-2">
                                  <h6 class="heading mb-0">
                                    إدارة ال MCR
                                  </h6>
                                  <p class="mb-0">إستعراض والتحكم في ال MCR</p>
                               </div>
                            </div>
                         </a>
                      </li>   
                      <li class="dropdown dropdown-animate dropdown-submenu text-right" data-toggle="hover">
                         <a href="#" class="list-group-item list-group-item-action" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="media d-flex">
                               <div class="icon icon-shape" >
                                    <i class="fas fa-podcast"></i>
                               </div>
                               <div class="media-body mr-2">
                                  <h6 class="heading mb-0">
                                     جدول البث
                                  </h6>
                                  <p class="mb-0">إستعراض والتحكم في جدول البث</p>
                               </div>
                            </div>
                         </a>
                      </li>
                      <li class="dropdown dropdown-animate dropdown-submenu text-right" data-toggle="hover">
                         <a href="#" class="list-group-item list-group-item-action" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="media d-flex">
                               <div class="icon icon-shape" >
                                <i class="fas fa-archive"></i>
                               </div>
                               <div class="media-body mr-2">
                                  <h6 class="heading mb-0">
                                     إدارة الارشيف
                                  </h6>
                                  <p class="mb-0">إستعراض والتحكم في وصولات القبض</p>
                               </div>
                            </div>
                         </a>
                         <div class="dropdown-menu text-center" >
                            <a class="dropdown-item" href="#">
                               إدارة ارشيف الكتب
                            </a><br>
                            <a class="dropdown-item" href="#">
                                إدارة ارشيف الإذاعات
                             </a><br>
                            <a class="dropdown-item" href="#">
                                إدارة إنتاج المكاتب
                             </a>
                         </div>
                      </li>
                   </ul>
                </div>
             </li>
             @endAccountant


             
               {{-- <li class="nav-item nav-item-spaced d-none d-lg-block">
                  <a class="nav-link" href="route('{{$item[]}}')">
                     <i class="fas fa-user-tie"></i>
                     إدارة الموظفين
                  </a>
               </li>

             <li class="nav-item nav-item-spaced d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="fas fa-money-bill-alt"></i>
                   الإدارة المالية
                </a>
             </li> --}}
{{-- 
             <li class="nav-item nav-item-spaced d-none d-lg-block">
                <a class="nav-link" href="#">
                   <i class="fas fa-money-bill-alt"></i>
                   Run Order
                </a>
             </li> --}}
          </ul>
          <!-- Header img and settings section --> 
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
                <!-- logout --> 
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
