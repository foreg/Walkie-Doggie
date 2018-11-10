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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
      <header>
        <div class="container logo_container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="header__logo col-xs-2"><img class="img_logo" src="img/logo.png" alt="logo"></div>
                <div class="topnav col-xs-6" id="menuTopnav">
                    <a href="#main">Главная</a>
                    <a href="#">О нас</a>
                    <a href="#">Item 3</a>
                    <a href="#">Item 4</a>
                    <a href="#">Item 5</a>
                    </div>  
                    <div class="topnav col-xs-offset-1 col-xs-3">
                     
                        @guest
                          
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                         
                        @else
                           
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                  
                </div>  
            <div class="burger_item">
                <a href="#" id="burger_button"><img src="img/burger.png"></a>
            </div>
                </div>
            </div>
        </div>
            
    </header>

        <main class="py-4">
            @yield('content')
        </main>
    

    <footer>
    <div class="footer__container">
        <div class="container__item">
            <h2>Навигация</h2>
            <ul>                                                    
                <li><a href="#main">Главная</a>
                <li><a href="#about">О нас</a>
                <li><a href="#news">Новости</a>
                <li><a href="#radio">Радиостанции</a>
                <li><a href="#contacts">Контакты</a>
            </ul>
        </div>
        <div class="container__item">
            <h2>Наши партнеры</h2>
            <ul>
                <li>ITEM 1
                <li>ITEM 1
                <li>ITEM 1
                <li>ITEM 1
                <li>ITEM 1
                <li>ITEM 1
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
</body>
</html>
