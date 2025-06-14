<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SL Edu Score</title>

    <link rel="shortcut icon" type="image/x-icon" hrefasset="web_assets/img/favicon.svg">

    <link rel="stylesheet" href="{{ asset('web_assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/plugins/slick/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/aos/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/css/style.css') }}">
</head>

<body>

    <x-theme-alert/>

    <div class="main-wrapper">

        <x-web-header/>


        @yield('main-content')


        <x-web-footer/>

    </div>


    <script data-cfasync="false" src="{{ asset('web_assets/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('web_assets/js/jquery-3.7.1.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/bootstrap.bundle.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/jquery.waypoints.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>
    <script src="{{ asset('web_assets/js/jquery.counterup.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/plugins/select2/js/select2.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/owl.carousel.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/plugins/slick/slick.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/plugins/aos/aos.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/script.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>
    <script src="{{ asset('web_assets/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="959f1ca5de2f5ee6120a2251-|49" defer></script>

    <script>
        $(function() {
            $("input[type='tel']").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
      @stack('script')
</body>

</html>
