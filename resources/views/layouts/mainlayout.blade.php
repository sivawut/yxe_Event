<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eventplanner</title>
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .center {
        background-color: white;
            
        }

        /* Flex container for the search boxes */
        .search-container {
            display: flex;
            justify-content: center;
            gap: 70px; /* Space between the search boxes */
            
        }

        Styling for each form 
        form {
            display: flex;
            align-items: center;
        }

        /* Styling for search input */
        input[type="search"] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            width: 80%;
            border-radius: 50px;
            outline: none;
            background-color: white;
        }

        /* Styling for submit button */
        button {
            float: right;
            padding: 8px 12px;
            margin-left: 5px;
            font-size: 17px;
            background-color: #2196F3;
            color: white;
            border: 1px solid gray;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Hover effect for the button */
        button:hover {
            background-color: #5945a0;
        }

        .plus-button {
            padding: 10px 15px;
            font-size: 17px;
            background-color: white;
            color: blue;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Optional hover effect */
        .plus-button:hover {
            background-color: white;
        }

        /* Event Buttons*/

        .circle-link-container {
            position: absolute;
            bottom: 200px;
            left: 20px; /* Distance from the bottom of the page */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Adjust to exact center */
            display: flex;
            gap: 50px; /* Space between buttons */

        }

        /* Styling for each circular link button */
        .circle-link {
            width: 120px;
            height: 120px;
            background-color: #2196F3;
            color: white;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50%; /* Makes the button circular */
            text-align: center;
            text-decoration: none; /* Removes underline from the link */
            line-height: 125px; /* Centers text vertically */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Optional shadow for depth */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        /* Hover effect */
        .circle-link:hover {
            background-color: #034479;
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



        <!--
        <div class="center">
            <h1> 

            </h1>
        </div> -->
        <br><br><br><br> 

        @yield('content')
    
    </body>
</html>