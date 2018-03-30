<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/material-dashboard/bootstrap.min.css') }}" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{--custom css--}}
    @stack('styles')

</head>
<body>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" filter-color="black" data-image="{{ asset('images/login.jpeg') }}">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div id="app" class="content">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.generic = {
            "csrfToken": "{{ csrf_token() }}",
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="{{ asset('js/material.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script>
        $().ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
    @stack('scripts')
</div>
</body>
</html>
