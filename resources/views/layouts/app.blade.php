{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 --}}
<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/admin/dashboard.html by g4bbar, Thu, 24 Jan 2019 15:35:50 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Dashboard</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/admin/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/admin/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/admin/css/responsive.css')}}" rel="stylesheet">
 <link href="{{asset('style/admin/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('realestate/admin/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('realestate/admin/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
   @include('admin.includes.header')
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
    @include('admin.includes.hidden-bar')
    <!--End Hidden Bar -->
     <div class="dashboard">
        <div class="container-fluid">
            <div class="content-area">
                <div class="dashboard-content">
                     @include('admin.includes.dashboard')
                </div>
            </div>
        </div>
    </div>
     <div class="dashboard">
        <div class="container-fluid">
            <div class="content-area">
                <div class="dashboard-content">
                    @yield("content")
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.dashboard-includes.footer')


<script src="{{asset('realestate/admin/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/admin/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/admin/js/wow.js')}}"></script>
<script src="{{asset('realestate/admin/js/dropzone.js')}}"></script>
<script src="{{asset('realestate/admin/js/appear.js')}}"></script>
<script src="{{asset('realestate/admin/js/script.js')}}"></script>
</body>
</html>
