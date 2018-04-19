<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LinkBrick</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Core Css Files -->
    <link href="{{ asset('css/paper-kit/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/paper-kit/nucleo-icons.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('layouts.partials._topNavPaperKit',['navTheme' => 'navbar-transparent'])
    @yield('content')
    <footer class="footer section-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="{{ url('/') }}">Proptech</a></li>
                        <li><a href="{{ url('/projects') }}">Projects</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
					<span class="copyright">
						© <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by PropTech
					</span>
                </div>
            </div>
        </div>
    </footer>

</body>
@stack('pre-scripts')

<!-- Core JS Files -->
<script src="{{ asset('js/paper-kit.js') }}" type="text/javascript"></script>

@stack('scripts')

</html>