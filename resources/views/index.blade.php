<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styleV.css') }}">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <title>Сервис "Walkie-Doggie"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<main>
    <header>
            <div class="header__logo"><img class="img_logo" src="img/logo.png" alt="logo"></div>
            <nav>
                <div class="topnav" id="menuTopnav">
                    <a href="#main">Главная</a>
                    <a href="#">О нас</a>
                    <a href="#">Item 3</a>
                    <a href="#">Item 4</a>
                    <a href="#">Item 5</a>
                </div>  
            </nav>
            <div class="burger_item">
                <a href="#" id="burger_button"><img src="img/burger.png"></a>
            </div>
    </header>
        
<div id="main"  class="main__block">
    <div class="container">
        <img src ="img/bg.jpg" class="main_img">
        <div class="container__text">
            <h2>Сервис для выгула собак </h2>
            <h1>Walkie-Doggie</h1>
            <span class="button__span">Мы соединяем хозяев домашних питомцев и людей, <br />
                 готовых с ними погулять</span>
        </div>
    </div>
</div>

<div id="about" class="main__block">
    <div class="container__items">
        <h2 class="items__h2">Почему мы вам нужны</h2>
        <span class="items__span">Бывают ситуации, когда питомцу необходим уход,
         а вы не в состоянии решить эту проблему.
         Или же вы тот, кто всегда хотел поводиться с собаками?</span>
        <div class="items__row">
            <div class="row_item">
                <img src="{{ asset('img/heal.png') }}">
                <div class="item__span">
                    <h2>Болезнь</h2>
                    <!-- <span class="span_desc">Чувствуете себя плохо, но надо выгулять собаку?
                    Наш выгульщик позаботится о вашем питомце</span> -->
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/zzz.png') }}">
                <div class="item__span">
                    <h2>Усталость</h2>
                    <!-- <span class="span_desc">Бывают случаи когда вы пришли с учебы или работы совсем без сил, 
                    но гулять с собакой все равно надо? Наш сервис решит эту проблему</span> -->
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/case.png') }}">
                <div class="item__span">
                    <h2>Командировка</h2>
                    <!-- <span class="span_desc">Уезжаете на несколько дней и не знаете кто позаботится о вашем любимце? 
                    Наши работники могут гулять 
                    с вашей собакой несколько раз в день на протяжении определенного вами срока</span> -->
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/dog.png') }}">
                <div class="item__span">
                    <h2>Интерес к <br /> животным</h2>
                    <!-- <span class="span_desc">Если вы любите животных и хотели найти
                     подработку связанную с заботой о них, то у нас есть для вас вакансия</span> -->
                </div>
            </div>
        </div>
        <div class="items__row">
            <div class="row_item">
                <span class="span_desc">Чувствуете себя плохо, но надо выгулять собаку?
                    Наш выгульщик позаботится о вашем питомце</span>
            </div>
            <div class="row_item">
               <span class="span_desc">Бывают случаи когда вы пришли с учебы или работы совсем без сил, 
                    но гулять с собакой все равно надо? Наш сервис решит эту проблему</span>
            </div>
            <div class="row_item">
                <span class="span_desc">Уезжаете на несколько дней и не знаете кто позаботится о вашем любимце? 
                    Наши работники могут гулять 
                    с вашей собакой несколько раз в день на протяжении определенного вами срока</span>
            </div>
            <div class="row_item">
                <span class="span_desc">Если вы любите животных и хотели найти
                     подработку связанную с заботой о них, то у нас есть для вас вакансия</span>
            </div>
        </div>
    </div>
</div>

<div id ="news" class="main__block">
    
</div>


<div id="radio" class="main__block radioPlayer">
    
</div>

<div id="contacts" class="main__block">
    
</div>



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
<script src="{{ asset('js/scriptV.js') }}"></script>
</body>
</html>