@extends('layouts.walkerLay')
@section('content')
<div class="section back">
    <div class="container block_first">
        <div class="row">
            <div class="col-xs-12 promo">
                <h2>Сервис для выгула собак </h2>
                <h1>Walkie-Doggie</h1>
                <span class="button__span">МЫ ПОМОЖЕМ ВАМ НЕСТИ ОТВЕСТВЕННОСТЬ ЗА ТЕХ, КОГО ВЫ ПРИРУЧИЛИ</span>
            </div>  
        </div>
    </div>
</div>
<div class="section block_about white">
    <div class="container">
        <div id="about" class="row">
            <div class="col-xs-12">
                <div class="container__status">
                    <h2 class="items__h2_about">О нашей компании</h2>
                    <div class="span_company">
                       <span class="aboutCompany">
                        Lorem ipsum dolor sit amet, consectetur 
                        adipiscing elit. Praesent quis imperdiet libero. In sed mi at dolor semper euismod. Pellentesque tincidunt odio nec varius consectetur. Integer hendrerit condimentum elit, ac blandit tellus tristique ut. 
                        Vestibulum consectetur condimentum bibendum
                       </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
<div class="section gray">
    <div class="container">
        <div id="job" class="row">
            <div class="col-xs-12 block_4">
                <h2 class="items__h2">Почему стоит работать волкером?</h2>
                <span class="items__span"></span>
            <div class="container__items">
                <div class="items__row">
                    <div class="row_item">
                        <img src="{{ asset('img/lapa.png') }}">
                            <div class="item__span">
                                <h2>Работа с животными</h2>
                            </div>
                        <span class="span_desc">Благодаря нашему сервису вы можете проводить время с питомцами, 
                        что поможет не только отдохнуть от насущных проблем, 
                        но и весело провести время.</span>
                    </div>
                    <div class="row_item manRow">
                        <img src="{{ asset('img/man.png') }}" class="manWidth">
                        <div class="item__span">
                            <h2>Взвешенный подход</h2>
                        </div>
                        <span class="span_desc">Если вы не уверены, что готовы завести питомца, 
                        начните выгуливать чужих собак, чтобы оценить свои возможности</span>
                    </div>
                    <div class="row_item dogRow">
                        <img src="{{ asset('img/sobaka.png') }}" class="dogWidth">
                        <div class="item__span">
                            <h2>Отличная подработка</h2>
                        </div>
                        <span class="span_desc">Необязательно работать определенное количество часов,
                        каждый волкер сам себе начальник. 
                        Так же, для отличившихся волкеров предусмотрены поощрения.</span>
                    </div>
                </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section block_choose">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 block_5">
                <h2 class="items__h2">Что мы предлагаем нашим волкерам?</h2>
                <div class="items__column">
                    <div class="row_item_1">
                        <img src="{{ asset('img/1.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">1 предложение</h2>
                            <span class="good__span">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero. In sed mi at dolor semper euismod. Pellentesque tincidunt odio nec varius consectetur. Integer hendrerit condimentum elit, ac blandit tellus tristique ut. 
                            Vestibulum consectetur condimentum bibendum</span>
                        </div>
                    </div>
                     <div class="row_item_1">
                        <img src="{{ asset('img/2.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">2 предложение</h2>
                            <span class="good__span">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero. In sed mi at dolor semper euismod. Pellentesque tincidunt odio nec varius consectetur. Integer hendrerit condimentum elit, ac blandit tellus tristique ut. 
                            Vestibulum consectetur condimentum bibendum</span>
                        </div>
                    </div>
                     <div class="row_item_1">
                        <img src="{{ asset('img/4.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">3 предложение</h2>
                            <span class="good__span">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero. In sed mi at dolor semper euismod. Pellentesque tincidunt odio nec varius consectetur. Integer hendrerit condimentum elit, ac blandit tellus tristique ut. 
                            Vestibulum consectetur condimentum bibendum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section block_about gray">
    <div class="container">
        <div id="service" class="row">
            <div class="col-xs-12 ">
                <div class="container__status">
                    <h2 class="items__h2_about">В чем заключается работа волкера?</h2>
                    <div class="items__row serviceRow">
                        <div class="row_item">
                            <div class="row_circle">
                                1
                            </div>
                            <div class="item__span">
                                <h2>Lorem ipsum</h2>
                            </div>
                            <span class="span_desc">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero.</span>
                        </div>
                        <div class="row_item">
                            <div class="row_circle">
                                2
                            </div>
                            <div class="item__span">
                                <h2>Lorem ipsum</h2>
                            </div>
                            <span class="span_desc">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero</span>
                        </div>
                        <div class="row_item">
                            <div class="row_circle">
                                3
                            </div>
                            <div class="item__span">
                                <h2>Lorem ipsum</h2>
                            </div>
                            <span class="span_desc">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="section offers">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 trio">
                <h2 class="items__h2">Наши предложения</h2>
                <div class="offerMargin col-xs-offset-1 col-xs-10">
                    <div class=" thumbs offer o1 col-xs-4">
                            <div class="name"><h3>Первая прогулка</h3></div>
                        <div class="caption description">
                            <span class="info">Стоимость первой прогулки - 150р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                    <div class="thumbs offer o2 col-xs-4">
                            <div class="name"><h3>1 прогулка</h3></div>
                        <div class="caption description">
                            <span class="info">Стоимость одной прогулки - 250р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                    <div class="thumbs offer o3 col-xs-4">
                             <div class="name">
                                <h3>10 прогулок</h3>
                            </div>
                        <div class="caption description">
                            <span class="info">Стоимость 10 прогулок - 2000р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="section white">
    <div class="container">
        <div id="walkers" class="row">
            <div class="col-xs-12 ">
                <div class="youtube_container">
                     <h2 class="items__h2">Наши волкеры</h2>
                    <div class="container_video">
                        <div class="video">
                            <img src="img/profile_start.jpg" alt="">
                            <h2 class="youtube__h2">
                                Дмитрий Строков
                            </h2>
                            <span class="youtube__span">
                                Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero.
                            </span>
                        </div>
                        <div class="video">
                            <img src="img/profile_start.jpg" alt="">
                            <h2 class="youtube__h2">
                                Даниил Жилин
                            </h2>
                            <span class="youtube__span">
                               Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Praesent quis imperdiet libero.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section gray">
    <div class="container">
        <div id="request" class="row">
            <div class="col-xs-12">
                <div class="join_container">
                    <h2 class="items__h2">Присоединяйтесь к нашей команде</h2>
                    <div class="cointainer_text">
                        <span class="text_info">Зарегистрируйтесь на сайте и оставьте заявку на обучение, и в скором
                        времени вы станете профессиональным дог-волкером!
                        </span>
                        <a href="{{ route('register') }}" class="buttonA buttonA-4 btn-4a">
                            Зарегистрироваться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="section bg_quests">
    <div class="container">
        <div id="questions"  class="row">
            <div class="col-xs-12 container_questions">
                <h2 class="items__h2">Часто задаваемые вопросы</h2>
                <div class="quest_item">
                    <div id="demo" class="demoVue">
                    <h3 id="h3_item" v-on:click="show=!show" class="h3_quest" onclick="Pseudo()">Моя собака будет гулять на поводке?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show'>Да, конечно! Мы не отпускаем собак с поводка, кроме собачьих площадок. 
                    Каждый выгульщик гуляет на специальной амуниции: страхующий ошейник, поводок и пояс,
                    которые сделаны из репшнуров, никогда не порвутся и прикреплены друг к другу 
                    альпинистскими карабинами.
                    Поэтому можем давать гарантию, что собака не убежит.</span>
                        </transition>
                    </div>
                </div>
                <div class="quest_item">
                    <div id="demo1" class="demoVue">
                    <h3 id="h3_item1" v-on:click="show1=!show1" class="h3_quest" onclick="Pseudo1()">Справится ли выгульщик с моей собакой?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show1'>Все выгульщики проходят отбор и обучение,
                        которые включают онлайн-курсы и стажировки на разных выгулах с наставниками.
                        Если у вас сложная собака - мы подберем опытного человека, который точно справится.</span>
                        </transition>
                    </div>
                </div>
          
                <div class="quest_item">
                    <div id="demo2" class="demoVue demo3">
                    <h3 id="h3_item2" v-on:click="show2=!show2" class="h3_quest" onclick="Pseudo2()">Как происходит оплата в нашем сервисе?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show2'>Мы отправим вам ссылку на оплату. 
                       Оплачивать выгулы можно с помощью банковской карты.</span>
                        </transition>
                    </div>
                </div>

                <div class="quest_item">
                    <div id="demo3" class="demoVue">
                    <h3 id="h3_item3" v-on:click="show3=!show3" class="h3_quest" onclick="Pseudo3()">Безопасно ли оплачивать услуги по  ссылке?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show3'>Да! Данные вашей карты передаются через безопасный SSL-протокол. 
                       Оплату мы принимаем через Яндекс.Кассу, 
                       этот сервис используют большое число IT-компании в стране.</span>
                       </transition>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    -->



@endsection


<script>

</script>
</body>
</html>