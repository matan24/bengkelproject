<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('how/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('how/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('how/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('how/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('how/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('how/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('how/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('how/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('how/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('how/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v4.0.1
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
<<<<<<< HEAD
        <h1 class="text-light"><a href="index.html">TiaBanAutoservice</a></h1>
=======
        <h1 class="text-light"><a href="index.html">TiaBanAutoService</a></h1>
>>>>>>> e27ef53 (clearbagjadwalkonsumen)
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li class="dropdown"><a href=""><span>Jadwal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('user.jadwalservice') }}">Jadwal Service</a></li>
              <li><a href="{{ route('user.selesaiservice') }}">Data Service Konsumen</a></li>
              </li>
            </ul>
          </li>
          <li><a href="{{ route('user.service') }}">Service Sekarang</a></li>
          <li><a href="{{ route('user.contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('container')

  <!-- Vendor JS Files -->
  <script src="{{ asset('how/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('how/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('how/assets/js/main.js') }}"></script>

</body>

</html>