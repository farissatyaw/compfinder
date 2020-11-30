<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Compfinder</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js')}}'"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('js/creative.js')}}"></script>
    <script src="{{ asset('js/Table-With-Search.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Search-Form.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Table-With-Search-1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/untitled.css')}}">
</head>
<body class="d-xl-flex justify-content-xl-center align-items-xl-center" style="background-image: url('{{ asset('img/big.jpg')}}');">
    <div id="app">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="height: 90px;">
            <div class="container"><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"><a href="/"><img src="{{ asset ('img/Untitled-1.png')}}" style="width: 50px;height: 69px;"></a>
                <ul class="nav navbar-nav ml-auto mr-4">
                    <li class="nav-item d-xl-flex align-items-xl-center">
                        <form class="form-inline search-form">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input type="text" class="form-control" placeholder="I am looking for.." />
                                <div class="input-group-append"><button class="btn btn-light" type="button">Search </button></div>
                            </div>
                        </form>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @yield('dropdown-item')
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
                </div>
            </div>
        </nav>

        <main class="py-5 my-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
