@extends('layouts.app')

@section('content')
  
    <div class="section back">
        <div class="container block_first">
            <div class="row ">
                <div class="col-xs-12 promo">
                    <h2>Сервис для выгула собак </h2>
                    <h1>Walkie-Doggie</h1>
                    <span class="button__span">Мы соединяем хозяев домашних питомцев и людей, <br />
                         готовых с ними погулять</span>
                </div>
            </div>
        </div>
    </div>      
<div id="main"  class="main__block">
    <!-- <div class="container"> -->
        <!-- <div class="row"> -->
        <div class="container__text col-md-12">
            <h2>Сервис для выгула собак </h2>
            <h1>Walkie-Doggie</h1>
            <span class="button__span">Мы соединяем хозяев домашних питомцев и людей, <br />
                 готовых с ними погулять</span>
        </div>
        <!-- </div> -->
    <!-- </div> -->
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
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/zzz.png') }}">
                <div class="item__span">
                    <h2>Усталость</h2>
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/case.png') }}">
                <div class="item__span">
                    <h2>Командировка</h2>
                </div>
            </div>
            <div class="row_item">
                <img src="{{ asset('img/dog.png') }}">
                <div class="item__span">
                    <h2>Интерес к животным</h2>
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
    <div class="container__status">
        <h2 class="items__h2">Как работает наш сервис</h2>
        <div class="items__row">
            <div class="row_item">
                <div class="row_circle">
                    1
                </div>
                <div class="item__span">
                    <h2>Болезнь</h2>
                </div>
            </div>
            <div class="row_item">
                <div class="row_circle">
                    2
                </div>
                <div class="item__span">
                    <h2>Усталость</h2>
                </div>
            </div>
            <div class="row_item">
                <div class="row_circle">
                    3
                </div>
                <div class="item__span">
                    <h2>Командировка</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="radio" class="main__block radioPlayer">
    
</div>

<div id="contacts" class="main__block">
    
</div>

@endsection

<script src="{{ asset('js/scriptV.js') }}"></script>
</body>
</html>