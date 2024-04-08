<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/template/favicon.svg')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <div class="loader"></div>
          </div>
        </div>
      </div>
    </div>
    @include('layout.navbar')

    <main class="main">
        <!-- partial -->
        @yield('content')
     
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
      <section class="section-box overflow-visible mb-100">
        <div class="container mt-100">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="bg-2 box-newsletter position-relative">
                <div class="row">
                  <div class="col-lg-5 col-md-7"><span class="text-body-capitalized color-gray-500 text-uppercase">newsletter</span>
                    <h4 class="text-heading-2 mb-10 mt-10">Restez Connecté!</h4>
                    <p class="text-body-text color-gray-500">Abonnez-vous à notre newsletter pour recevoir les dernières mises à jour, offres spéciales et actualités de l'entreprise directement dans votre boîte de réception. </p>
                    <div class="box-form-newsletter mt-30">
                      <form class="form-newsletter">
                        <input class="input-newsletter" type="text" value="" placeholder="Email">
                        <button class="btn btn-send"></button>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-5 mt-30 mt-lg-0 mt-md-30 mt-sm-30 position-relative text-end">
                    <div class="block-chart shape-1"><img src="assets/imgs/template/messages-floating-laptop.jpg" alt="Agon"></div>
                    <img class="img-responsive img-newsletter" src="assets/imgs/template/IMG-20210914-WA0015.jpg" alt="Agon">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @include('layout.footer')

    <script src="{{asset('assets/js/vendors/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/vendors/wow.js')}}"></script>
    <script src="{{asset('assets/js/vendors/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/isotope.js')}}"></script>
    <script src="{{asset('assets/js/vendors/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/counterup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/slick.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/noUISlider.js')}}"></script>
    <script src="{{asset('assets/js/vendors/slider.js')}}"></script>
    <script src="{{asset('assets/js/main.js?v=1.0')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>