<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Share JS -->
    <script src="{{ asset('js/share.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        #social-links ul{
             padding-left: 0;
        }
        #social-links ul li {
            display: inline-block;
        } 
        #social-links ul li a {
            padding-top: 5px;
            padding-bottom: 8px;
            padding-left: 15px;
            padding-right: 15px;
            border: 1px solid #ccc;
            margin: 5px;
            font-size: 25px;
            color: #222;
            border-radius: 5px;
            background-color: #F5F0F0;
        }
        </style>
</head>
<body>
    <div id="app">
        {{-- fixed-top ditambah atau enggak gataulah bangke --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-0 m-0 row border-bottom inner-shadow-lg" style="box-shadow: inset 0 0 5px #000;">
            <div class="container d-flex justify-content-between col-10 offset-1">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage') }}/LOGO WEB.png" alt="" style="width : 200px;">
                </a>

                <!-- Left Side Of Navbar -->
                @guest
                
                @else
                <div class="col">
                    <form action="{{ route('searchArticle') }}" name="searchTopic" method="POST" class="m-0 p-0">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input type="search" class="form-control text-center profile-search-input" placeholder="Cari topic. . . ." aria-label="Username" aria-describedby="basic-addon1" name="title">
                        </div>
                    </form>
                </div>
                @endguest
                @guest
                    @if (Route::has('login'))
                        <div class="nav-item">
                            <a type="button" id = "button-atas" class="btn masuk me-3" href="{{ route('login') }}">Masuk</a>
                        </div>
                    @endif

                    @if (Route::has('register'))
                        <div class="nav-item">
                            <a type="button" id = "button-atas"class="btn daftar me-3" href="{{ route('register') }}">Daftar</a>
                        </div>
                    @endif
                @else
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active text-dark" aria-current="page" href="{{route('create')}}">Tulis</a>
                    </li>
                    @if (Auth::user()->role != 4)
                    <li class="nav-item">
                        <a class="nav-link  text-dark" href="{{ route('subsType') }}">Upgrade</a>
                      </li>
                    @endif
                    
                    <li class="nav-item">
                        <a href="{{ route('profile', ['username' => Auth::user()->username]) }}" class="nav-link  text-dark">
                            {{-- <img src="{{ asset("storage/".Auth::user()->profile_picture) }}" class="img rounded-circle profile"> --}}
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark" href="{{ route('logout') }}"
                            onclick="event.preventDefault()
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}  
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                    
                    {{-- <div class="dropdown">
                        <button id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset("storage/".Auth::user()->profile_picture) }}" class="img rounded-circle profile">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile', ['username' => Auth::user()->username]) }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault()
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}  
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            
                        </div>
                    </div> --}}
                @endguest
         
                
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                </div> --}}
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>

        @include('layouts/footer')
    </div>
</body>
</html>
