<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Food Event</title>
            <!-- Scripts -->
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>


body {
            
            font-family: Arial, sans-serif;
            color: #2196F3;
            display: block;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 20;
            background-color: white;
           background-image: url('food_event.JPG');
            background-size: cover;
            background-position-x: 0px;
            background-position-y: 55px;
            background-repeat: no-repeat;
        
        }

        .container {
            width: 50%;
            max-width: 900px;
            margin: auto;
        }

        h2 {
            text-align: center;
        }
        .card {
            
            background: white;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

            .card h4 {
            margin: 0;
            color: black;
            gap: 70px;
        }
        .card p {
            margin: 5px 0;
            color: black;
            
        }
        .card a {
            display: inline-block;
            margin-top: 10px;
            color: #2196F3;
            text-decoration: none;
            font-weight: bold;
        }
        .card a:hover {
            color: #034479;
        }

   .center {
 background-color: white;
       
  }
        
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }} -->
                    <a href="/">
                    <img src="{{ asset('assets/images/event_logo.JPG') }}" alt="Event_logo">
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('dashboard').submit();">
                                        {{ __('Dashboard') }}
                                    </a>                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="dashboard" action="/home" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



<div class="center">
        <h1>

        </h1>
    </div>
    <br><br><br>
  @yield('content')
</body>
</html>