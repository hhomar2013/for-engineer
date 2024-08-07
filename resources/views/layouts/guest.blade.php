<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }} | {{ $title }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="{{ config('app.name') }}" name="keywords">
        <meta content="{{ config('app.name') }}" name="description">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Favicon -->
        <link href="{{ asset('asset/img/for4.png') }}" rel="icon">
        <!-- Google Font -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> --}}

        <!-- CSS Libraries -->
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"  />
        <link href="{{ asset('asset/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('asset/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/select2.min.css') }}" rel="stylesheet" />
        <!-- Template Stylesheet -->
        @if(LaravelLocalization::getCurrentLocale() =='en') <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">  @else<link href="{{ asset('asset/css/style_rtl.css') }}" rel="stylesheet"> @endif
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
        <style>
            .whats-app {
                    position: fixed;
                    width: 60px;
                    height: 60px;
                    bottom: 40px;
                    right: 15px;
                    background-color: #25d366;
                    color: #FFF;
                    border-radius: 50px;
                    text-align: center;
                    font-size: 30px;
                    box-shadow: 2px 2px 3px #999;
                    z-index: 100;
                }

                .my-float {
                    margin-top: 16px;
                }


         </style>
        @livewireStyles
        @yield('css')
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            @include('site_tools.top_bar')
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            @include('site_tools.nav_bar')
            <!-- Nav Bar End -->
{{--            <div class="carousel slide">--}}

{{--            </div>--}}
            <!-- Content Start -->
             @yield('content')
            <!-- Content end -->

            <!-- HTML to write -->
                {{-- <a href="#" data-bs-toggle="tooltip">Hover over me</a>

                <div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">Omar</div></div> --}}

            <!-- Footer Start -->
            @include('site_tools.footer')
            <!-- Footer End -->
            <a  class="whats-app" href="https://wa.me/+966566626520" target="_blank">
                <i class="fab fa-whatsapp my-float"></i>
            </a>

            <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
        </div>




        <!-- JavaScript Libraries -->

        <script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script> --}}
        <script src="{{ asset('asset/js/all.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('asset/lib/slick/slick.min.js') }}"></script>
        <script src="{{ asset('asset/js/select2.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('asset/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
             const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                });

        </script>


        @livewireScripts
        @include('message')
        @yield('js')
        <script>
            // $(function () {$('[data-toggle="tooltip"]').tooltip('toggle')})
            $(document).ready(function(){
                $('[data-bs-toggle="tooltip"]').tooltip();
            });

        </script>
    </body>
</html>
