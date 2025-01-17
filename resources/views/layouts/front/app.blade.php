<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- 
    <!-- GOOGLE NECESARIO -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GOOGLE_ANALYTICS') }}');
    </script>
    --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <title>FuritMarket MX</title>
    <meta name="description" content="Modern open-source e-commerce framework for free">
    <meta name="tags" content="modern, opensource, open-source, e-commerce, framework, free, laravel, php, php7, symfony, shop, shopping, responsive, fast, software, blade, cart, test driven, adminlte, storefront">
    <meta name="author" content="Jeff Simons Decena">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/new/font.css') }}" rel="stylesheet">
    @yield('css')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
    <section class="background">
        <div class="hidden-xs">
            <div class="container">
                <div class="clearfix"></div>
                <div class="pull-right">
                    <ul class="nav navbar-nav navbar-right">
                        @if(auth()->check())
                        <li><a href="{{ route('accounts', ['tab' => 'profile']) }}"><i class="fa fa-home"></i> Mi cuenta</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                        @else
                        <li><a href="{{ route('login') }}"> <i class="fa fa-lock"></i> Iniciar Sesion</a></li>
                        <li><a href="{{ route('register') }}"> <i class="fa fa-sign-in"></i> Registro</a></li>
                        @endif
                        <li id="cart" class="menubar-cart">
                            <a href="{{ route('cart.index') }}" title="View Cart" class="awemenu-icon menu-shopping-cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-number">{{ $cartCount }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <header id="header-section">
            <nav class="navbar navbar-default" style="margin-bottom: 0px;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header col-md-2">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand text-white" href="{{ route('home') }}">{{ config('app.name') }}</a>
                    </div>
                    <div class="col-md-10">
                        @include('layouts.front.header-cart')
                    </div>
                </div>
            </nav>
        </header>
    </section>
    @yield('content')
    @include('layouts.front.footer')
    <script src="{{ asset('js/front.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('js')
</body>
</html>
