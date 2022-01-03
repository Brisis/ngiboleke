<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title-->
    <title>Seller Dashboard - Ngiboleke</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('static/img/core-img/icon.svg') }}">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="{{ asset('static_admin/css/main.css') }}">
  </head>
  <body>

    @yield('content')

    <script src="{{ asset('static_admin/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static_admin/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static_admin/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('static_admin/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('static_admin/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('static_admin/js/vendors/chart.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('static_admin/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('static_admin/js/custom-chart.js') }}" type="text/javascript"></script>
</body>

</html>
