<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Ngiboleke - Misfit Sales & Lending">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Ngiboleke - Property Rentals, Sales & Hire Purchase</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('static/img/core-img/icon.svg') }}">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="{{ asset('static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/lineicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/magnific-popup.css') }}">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('static/style.css') }}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>

    @yield('content')

    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <!-- All JavaScript Files-->
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.min.js') }}"></script>
    <script src="{{ asset('static/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('static/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.passwordstrength.js') }}"></script>
    <script src="{{ asset('static/js/dark-mode-switch.js') }}"></script>
    <script src="{{ asset('static/js/no-internet.js') }}"></script>
    <script src="{{ asset('static/js/active.js') }}"></script>
    <script src="{{ asset('static/js/pwa.js') }}"></script>
    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("td").find(".quantityf").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>


    <script>

       $(function() {
          $('.showAddToCart').click(function() {
            setTimeout(function() {
              $('#addedToCart').modal('hide');
            }, 3000);

          });
       });
    </script>
  </body>
</html>
