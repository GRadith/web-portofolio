<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>web portofolio</title>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Kelly/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Kelly/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Kelly/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Kelly/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Kelly/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Kelly/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Kelly/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
  @include('layouts.navbar')

      <div class="container mb-5 my-5">
      @yield('container')
      </div>


  @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Kelly/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('Kelly/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Kelly/assets/js/main.js') }}"></script>

</body>

</html>