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
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-0 m-0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage') }}/LOGO WEB.png" alt="" style="width : 100px;">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="col-10">
                        <form action="{{ route('searchArticle') }}" name="searchTopic" method="POST" class="d-flex">
                            @csrf
                                <div class="input-group">
                                    <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="search" class="form-control text-center profile-search-input" placeholder="Cari topic. . . ." aria-label="Username" aria-describedby="basic-addon1" name="title">
                                </div>
                        </form>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a type="button" id = "button-atas" class="btn masuk me-3" href="{{ route('login') }}">Masuk</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a type="button" id = "button-atas"class="btn daftar me-3" href="{{ route('register') }}">Daftar</a>
                                </li>
                            @endif
                        @else
                            <a href="{{route('create')}}" class="p-0 m-auto">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="#982727"/>
                                    <path d="M25.995 8.70006L12.9958 22.4592C12.505 22.9817 12.03 24.0109 11.935 24.7234L11.3491 29.8534C11.1433 31.7059 12.4733 32.9726 14.31 32.6559L19.4083 31.7851C20.1208 31.6584 21.1183 31.1359 21.6091 30.5976L34.6083 16.8384C36.8566 14.4634 37.87 11.7559 34.3708 8.44673C30.8875 5.16923 28.2433 6.32506 25.995 8.70006Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.8262 10.9958C24.507 15.3658 28.0537 18.7067 32.4553 19.15" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.75 37.8334H38.25" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset("storage/".Auth::user()->profile_picture) }}" class="img rounded-circle profile">
                                </a>
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>

        @include('layouts/footer')
    </div>
</body>
</html>
