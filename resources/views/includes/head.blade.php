<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Preloader -->
<style>
    @keyframes hidePreloader {
        0% {
            width: 100%;
            height: 100%;
        }

        100% {
            width: 0;
            height: 0;
        }
    }

    body>div.preloader {
        position: fixed;
        background: white;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0;
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body:not(.loaded)>div.preloader {
        opacity: 1;
    }

    body:not(.loaded) {
        overflow: hidden;
    }

    body.loaded>div.preloader {
        animation: hidePreloader .5s linear .5s forwards;
    }
</style>
<script>
    window.addEventListener("load", function() {
        setTimeout(function() {
            document.querySelector('body').classList.add('loaded');
        }, 300);
    });
</script>
<!-- Favicon -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" id="stylesheet">




<meta charset="utf-8">
<meta name="description" content="">
<meta name="auther" content="" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/quick-website.css')}}">
<link rel="stylesheet" href="{{asset('libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('libs/flatpickr/dist/flatpickr.min.css')}}">
<link rel="stylesheet" href="{{asset('libs/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('libs/apexcharts/dist/apexcharts.css')}}">
<link rel="stylesheet" href="{{asset('libs/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400&display=swap">





<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('libs/select2/dist/js/select2.min.js')}}"></script>

{{-- <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>  
<!-- ApexChart -->
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>



