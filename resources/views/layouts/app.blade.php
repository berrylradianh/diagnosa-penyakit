<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Home | Diagnosa Penyakit Tanaman Pisang</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   </head>

   <body>
      <!-- header area start -->
      <header>
         <div class="header__area">
            <div class="header__top header__border d-none d-md-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8">
                        <div class="header__info">
                           <ul>
                              <li>
                                    Sistem Pakar Diagnosa Penyakit Tanaman Pisang dengan Metode Forward Chaining
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-4 col-lg-4 col-md-4">
                        <div class="header__top-right d-flex justify-content-end align-items-center">
                           <div class="header__login">
                              <a href="{{ route('login') }}"><svg viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.99995 6.83333C7.61078 6.83333 8.91662 5.5275 8.91662 3.91667C8.91662 2.30584 7.61078 1 5.99995 1C4.38912 1 3.08328 2.30584 3.08328 3.91667C3.08328 5.5275 4.38912 6.83333 5.99995 6.83333Z" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.0108 12.6667C11.0108 10.4092 8.76497 8.58333 5.99997 8.58333C3.23497 8.58333 0.989136 10.4092 0.989136 12.6667" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg> Login</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header__bottom" id="header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                           <a href="{{route('home')}}">
                              <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                 </li>
                                 <li>
                                    <a href="#">About</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                           <div class="header__hamburger ml-50 d-xl-none">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="offcanvas__wrapper">
                      <div class="offcanvas__content">
                         <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo logo">
                               <a href="index.html">
                               <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                               </a>
                            </div>
                            <div class="offcanvas__close">
                               <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                                  <i class="fal fa-times"></i>
                               </button>
                            </div>
                         </div>
                         <div class="mobile-menu fix"></div>
                      </div>
                   </div>
                </div>
            </div>
        </div>
      </div>
      <!-- offcanvas area end -->
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <main>

      @yield('content')

      </main>

         <!-- footer area start -->
         <footer>
            @include('layouts.footer')
         </footer>
         <!-- footer area end -->

      <!-- JS here -->
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/parallax.js"></script>
      <script src="assets/js/backtotop.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/counterup.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
