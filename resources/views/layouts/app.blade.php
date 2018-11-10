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
        <div class="container logo_container">
            <div class="row">
                <div class="col-xs-12 header_container_new">
                    <div id="header_item" class="header__logo col-xs-1"  onclick="window.location='{{ url('/') }}'"><img class="img_logo" src="img/logo.png" alt="logo"></div>
                <div class="topnav col-xs-8" id="menuTopnav">
                    <a href="{{ route('landing') }}">Главная</a>
                    <a href="#about">О нас</a>
                    <a href="#service">Сервис</a>
                    <a href="#rewiews">Отзывы</a>
                    <a href="#questions">Вопросы</a>
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
                    </div>  
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    

    <footer>
    <div class="footer__container">
        <div class="container__item">
            <h2>Навигация</h2>
            <ul>                                                    
                <li><a href="{{ route('landing') }}">Главная</a>
                <li><a href="#about">О нас</a>
                <li><a href="#service">Сервис</a>
                <li><a href="#rewiews">Отзывы</a>
                <li><a href="#questions">Вопросы</a>
            </ul>
        </div>
        <div class="container__item">
            <h2>Наши партнеры</h2>
            <ul>
                <li>Donor Search
                <li>РЭЙ
                <li>Donor Search
                <li>РЭЙ
                <li>Donor Search
                <li>РЭЙ
            </ul>
        </div>
        <div class="container__item">
            <h2>Контакты</h2>
            <ul>
                <li>E-mail:  Walkie-Doggie@mail.ru
                <li>ПРИЁМНАЯ  (3452) 21-88-21
                <li>СТУДИЯ  (3452) 21-77-77 
            </ul>
            <div class="social">
                <a href="#"><img src="{{ asset('img/insta.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/vk.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/klass.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer__zag">
        <div class="zag__block">
            <span class="block__span">
                Сервис "Walkie-Doggie"<br />
                2018
            </span>
        </div>
    </div>
</footer>
<script src="js/scriptV.js"></script>
</body>
</html>
