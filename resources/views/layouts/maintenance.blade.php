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

        .loader{
            margin:200px auto;
        }
        h1{
            font-family: 'Actor', sans-serif;
            color:#FFF;
            font-size:16px;
            letter-spacing:1px;
            font-weight:200;
            text-align:center;
        }
        .loader span{
            width:16px;
            height:16px;
            border-radius:50%;
            display:inline-block;
            position:absolute;
            left:50%;
            margin-left:-10px;
            -webkit-animation:3s infinite linear;
            -moz-animation:3s infinite linear;
            -o-animation:3s infinite linear;

        }


        .loader span:nth-child(2){
            background:#E84C3D;
            -webkit-animation:kiri 1.2s infinite linear;
            -moz-animation:kiri 1.2s infinite linear;
            -o-animation:kiri 1.2s infinite linear;

        }
        .loader span:nth-child(3){
            background:#F1C40F;
            z-index:100;
        }
        .loader span:nth-child(4){
            background:#2FCC71;
            -webkit-animation:kanan 1.2s infinite linear;
            -moz-animation:kanan 1.2s infinite linear;
            -o-animation:kanan 1.2s infinite linear;
        }


        @-webkit-keyframes kanan {
            0% {-webkit-transform:translateX(20px);
            }

            50%{-webkit-transform:translateX(-20px);
            }

            100%{-webkit-transform:translateX(20px);
                z-index:200;
            }
        }
        @-moz-keyframes kanan {
            0% {-moz-transform:translateX(20px);
            }

            50%{-moz-transform:translateX(-20px);
            }

            100%{-moz-transform:translateX(20px);
                z-index:200;
            }
        }
        @-o-keyframes kanan {
            0% {-o-transform:translateX(20px);
            }

            50%{-o-transform:translateX(-20px);
            }

            100%{-o-transform:translateX(20px);
                z-index:200;
            }
        }




        @-webkit-keyframes kiri {
            0% {-webkit-transform:translateX(-20px);
                z-index:200;
            }
            50%{-webkit-transform:translateX(20px);
            }
            100%{-webkit-transform:translateX(-20px);
            }
        }

        @-moz-keyframes kiri {
            0% {-moz-transform:translateX(-20px);
                z-index:200;
            }
            50%{-moz-transform:translateX(20px);
            }
            100%{-moz-transform:translateX(-20px);
            }
        }
        @-o-keyframes kiri {
            0% {-o-transform:translateX(-20px);
                z-index:200;
            }
            50%{-o-transform:translateX(20px);
            }
            100%{-o-transform:translateX(-20px);
            }
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
        });
    </script>
</div>
</body>
</html>
