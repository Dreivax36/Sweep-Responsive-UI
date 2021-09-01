<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SWEEP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4fc7b0e350.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light sweep-nav shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brandname" href="{{ url('/') }}">
                    SWEEP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    <ul class="navbar-nav mx-auto">
                        <a id="home" class="nav-link" href="/" role="button">Home</a>
                        <a id="services" class="nav-link" href="services" role="button">Services</a>
                        <a id="jobs" class="nav-link" href="jobs" role="button">Jobs</a>
                        <a id="about_us" class="nav-link" href="about_us" role="button">About Us</a>
                        <a id="contact_us" class="nav-link" href="contact_us" role="button">Contact Us</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav d-flex">
                        <!-- Authentication Links -->   
                            @if (Route::has('login'))
                                
                                <li class="nav-item">
                                    <a class="btn login_btn" href="/customer/customer_login">{{ __('Login') }}</a>
                                </li>
                            @endif

                         <!--     @if (Route::has('register')) -->
                         <!--         <li class="nav-item"> -->
                         <!--             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                         <!--         </li> -->
                         <!--     @endif -->
                        @else
                        <ul class= "navbar-nav ml-auto">    
                            <a href="{{ url('/customer/home') }}" class="nav-link">Home</a>
                            <a id="service" class="nav-link" href="{{ url('/customer/service') }}" role="button">Services</a>
                            <a id="transactions" class="nav-link" href="{{ url('/customer/transactions') }}" role="button">Transactions</a>
                            <a id="Notifications" class="nav-link" href="{{ url('/customer/notifications') }}" role="button">Notifications</a>
                        
                            
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username}}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        </ul>
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <script type="text/javascript">
     
    </script>
</body>

</html>
