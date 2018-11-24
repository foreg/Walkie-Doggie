@extends('layouts.app1')

@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/cabinetMenu.css') }}"/>
    <script src="js/modernizr.custom.js"></script>

</head>
<body>
<script src="{{asset('https://cdn.jsdelivr.net/npm/vue/dist/vue.js')}}"></script>
<div id="particles-js"></div>
<div class="container">
    <div class="row">
        <div id="dataUser" class="PersonalData col-xs-12">
            {{--<div v-if="showDataUser" class="dataUserr">--}}
            <form action="{{route('addProfileInfo')}}" method="post">
                @csrf
                <h1 class="lc">Личный кабинет</h1>
                <fieldset>
                    <div class="profile_info col-xs-12">
                        <div class="profile_style col-xs-3">
                            <img src="img/profile_start.jpg" alt="">
                        </div>
                        <div class="profile_style col-xs-3">
                            <div class="">Ваше имя</div>
                            <input class="inp" id="name" name="name" type="text" placeholder=""
                                   value='{{Auth::user()->name}}'>
                            <div class="">Телефон</div>
                            <input class="inp" id="phone" name="phone" type="text" placeholder="+79224789108"
                                   value='{{Auth::user()->phone}}'>
                        </div>
                        <div class="col-xs-6">
                            <div class="">Адрес</div>
                            <input class="inp" id="adress" name="adress" type="text" placeholder=""
                                   value='{{Auth::user()->adress}}'>
                            <div class="">Инфо</div>
                            <input class="inp" id="info" name="info" type="text" placeholder=""
                                   value='{{Auth::user()->info}}'>
                        </div>
                    </div>
                    <div class="">
                        <div class="">&nbsp;&nbsp;</div>
                        <input class="btn btn-4 btn-4a" name="addProfileInfo" type="submit" value="Сохранить">
                    </div>
                </fieldset>
            </form>
            {{--</div>--}}
        </div>
        <div id="addPet" class="col-xs-12 Pets">
            <h1 class="lc">Питомцы</h1>
            <div v-on:mouseover="upHere = true" v-on:mouseleave="upHere = false" class="addPet Pet col-xs-offset-2 col-xs-3">
                <img src="img/plus.png" alt="">
                <nav class="cl-effect-1">
                    <transition name="fade">
                        <a v-show="upHere" href="{{route('addDog')}}">Добавить</a>
                    </transition>
                </nav>
            </div>
            <div v-on:mouseover="upHere1 = true" v-on:mouseleave="upHere1 = false" class="watchPet Pet col-xs-offset-3 col-xs-3">
                <img src="img/pets.png" alt="">
                <nav class="cl-effect-1">
                    <transition name="fade">
                        <a v-show="upHere1" href="{{route('allDogs')}}">Просмотреть</a>
                    </transition>
                </nav>
            </div>
        </div>
        {{--<div class="col-xs-12 game">--}}

        {{--</div>--}}
        <div class="col-xs-12 dogwalkers">

        </div>
        <div class="col-xs-12 contacts">

        </div>

    </div>
</div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
<script src="{{asset('libs/particles/particles.js')}}"></script>
<script src="{{asset('js/ParticlesConfig.js')}}"></script>
</body>
</html>
@endsection
