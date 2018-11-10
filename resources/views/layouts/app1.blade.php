<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleV.css') }}">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <title>Сервис "Walkie-Doggie"</title>
    <script src="libs/Bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> 
        <div class="container logo_container notIndex">
            <div class="row">
                <div class="col-xs-12 header_container_new">
                    <div class="header__logo col-xs-1"><img class="img_logo" src="{{asset('img/logo.png')}}" alt="logo"></div>
                <div class="topnav col-xs-7" id="menuTopnav">
                    <a href="{{ route('landing') }}">Главная</a>
                    </div>  
                    <div class="topnav col-xs-4">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Логин</a>
                            <a href="{{ route('register') }}">Регистрация</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>
                                <a href="{{ route('home') }}">Кабинет</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <!-- @guest
                          
                                <a href="{{ route('login') }}">{{ __('Логин') }}</a>
                            
                            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                @endif
                         
                        @else
                           
                                <a id="navbarDropdown" href="{{ route('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                        @endguest -->
                </div>  
            <div class="burger_item">
                <a href="#" id="burger_button"><img src="img/burger.png"></a>
            </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
<!-- <script src="js/scriptV.js"></script> -->
</body>
</html>
