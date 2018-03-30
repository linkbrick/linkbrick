<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}"/>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{--custom css--}}
    @stack('styles')

    <style>
        section {
            margin-bottom: 3rem;
        }

        section h5  {
            font-weight: 400;
            border-bottom: 1px solid #ccd0d2;
            padding: 0.8rem 0rem;
            margin-bottom: 1rem;
        }

        .list-group-item-borderless {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
        }

        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }

        .comment:not(first-child){
            margin: 20px 0 40px 60px;
            padding-left: 20px;
        }

        .comment-input {
            margin: 8px 20px;
            padding: 8px 20px;
        }

        .comment-photo {
            width: 34px;
            height: 34px;
            overflow: hidden;
            float: left;
            z-index: 5;
            margin-right: 11px;
            border-radius: 50%;
            margin-left: 23px;
        }

    </style>

</head>
<body>
<div class="wrapper">
    @include('layouts.partials._sidebar')

    <div class="main-panel">
        @include('layouts.partials._topNavMaterial')
        <div class="content">
            @include('layouts.partials._notifications')
            <div id="app" style="min-height:650px">
                @yield('content')
            </div>
            @include('layouts.partials._footer')
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.generic = {
            "csrfToken": "{{ csrf_token() }}",
            mixins: []
        };
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="{{ asset('js/material.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js') }}"></script>
    <script src="{{ asset('js/setting.js') }}"></script>
    <script>
        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function(error, element) {
                    $(element).closest('div').addClass('has-error');
                }
            });
        }
    </script>
    @stack('scripts')
    <script src="{{ asset('js/vue_init.js') }}"></script>
    <script src="{{ asset('js/_menu.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();

            $("select.selectpicker").each(function(a,b){
                if ($(b).data("live-search")){
                    $(b).parent().parent().removeClass("is-empty");
                }
            });

        });


    </script>
</div>
</body>
</html>
