<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TurkBerry') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: rgba(197, 52, 123);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="color: #ffffff; font-family: 'Alba', sans-serif;">turk</span><span style="color: #2c5ba8; font-family: 'Alba', sans-serif;">berry</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('products.index') }}">{{ __('Products') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link"  href="{{ redirect('admins.index') }}">{{ __('Admins') }}</a>--}}
{{--                        </li>--}}
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ url('/about') }}">About Us</a>
                            </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img style="border-radius: 50%; width: 40px; height: 40px;" src="{{ asset(Auth::user()->profile_picture) }}">
                                    {{ Auth::user()->first_name. " " .Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background-color: #fff6fa;">
            @yield('content')
        </main>
    </div>
</body>

<section>
    <!-- Footer -->
    <footer class="bg-secondary text-white text-center">
        <div class="d-flex justify-content-between align-items-center p-3" style="background-color: rgba(197, 52, 123);">
            <div>
                Open 7am - 11pm daily
                <br>
                <small>Salt Mills Plaza Grace Bay Rd, Grace Bay, TKCA 1ZZ Turks and Caicos Islands</small>
            </div>

            <div>
                <a class="text-white" href="tel:6494312233">649-431-2233</a>
            </div>

            <div class="d-flex mr-3">
                <a href="https://www.google.com/maps/dir//21.7949213,-72.1816343/@21.7945962,-72.1785947,17z/data=!4m2!4m1!3e0" class="px-2">
                    <img src="/turkberry-assets/Footer/map.png" alt="Map" style="width: 40px; height: 40px;">
                </a>

                <a href="mailto:yum@turkberry.com" class="px-2">
                    <img src="/turkberry-assets/Footer/mail.png" alt="Mail" style="width: 40px; height: 40px;">
                </a>

                <a href="https://www.facebook.com/turkberry" class="px-2">
                    <img src="/turkberry-assets/Footer/facebook.png" alt="Facebook" style="width: 40px; height: 40px;">
                </a>
            </div>
        </div>
    </footer>

    <!-- Footer -->
</section>
</html>
