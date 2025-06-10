<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SL Edu Score</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">

    <link rel="stylesheet" href="{{ asset('web_assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('web_assets/css/style.css') }}">
</head>

<body>

    <x-theme-alert/>

    <div class="main-wrapper log-wrap">
        @yield('auth-content')

    </div>

    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ asset('web_assets/js/jquery-3.7.1.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/bootstrap.bundle.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

    <script src="{{ asset('web_assets/js/owl.carousel.min.js') }}" type="959f1ca5de2f5ee6120a2251-text/javascript"></script>

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
