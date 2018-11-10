@extends('layouts.app1')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/cabinetMenu.css') }}"/>
    <script src="js/modernizr.custom.js"></script>

</head>
<body>
<script src="{{asset('https://cdn.jsdelivr.net/npm/vue/dist/vue.js')}}"></script>
<nav id="bt-menu" class="bt-menu">
    <br><br><br>
    <a href="#" class="bt-menu-trigger"><span>Меню</span></a>
    <ul id="dataUs">
        <br><br>
        <li ><a v-on:click="showDataUser=!showDataUser, changeData()" href="#">Личные данные</a></li>
        <li><a v-on:click="showPet=!showPet, editPets()" href="#">Питомцы</a></li>
        <li><a v-on:click="addPet=!addPet, addPets()" href="#">Добавить питомца</a></li>
        <li><a href="#">Стать догволкером</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="{{route('map')}}">Карта</a></li>
    </ul>
    {{--<ul>--}}
        {{--<li><a href="#" class="bt-icon icon-twitter">Twitter</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-gplus">Google+</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-facebook">Facebook</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-github">icon-github</a></li>--}}
    {{--</ul>--}}
</nav>
<div class="container">
    <div class="row">
        <div id="dataUser" class="PersonalData col-xs-12">
            <div  v-if="showDataUser" class="dataUserr">
                <form  action="{{route('addProfileInfo')}}" method="post">
                    @csrf
                    <h1 class="lc">Личный кабинет</h1>
                    <fieldset>
                        <div class="">
                            <div class="">Ваше имя или название организации</div>
                            <input class="inp" id="name" name="name" type="text" placeholder="" value='{{Auth::user()->name}}'>
                            <div class="">Телефон</div>
                            <input class="inp" id="phone" name="phone" type="text" placeholder="+79224789108"
                                   value='{{Auth::user()->phone}}'>
                            <div class="">Адрес</div>
                            <input class="inp" id="adress" name="adress" type="text" placeholder="" value='{{Auth::user()->adress}}'>
                            <div class="">Инфо</div>
                            <input class="inp" id="info" name="info" type="text" placeholder="" value='{{Auth::user()->info}}'>
                        </div>
                        <div class="">
                            <div class="">&nbsp;&nbsp;</div>
                            <input class="btn btn-4 btn-4a"  name="addProfileInfo" type="submit" value="Сохранить">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div v-if="showPet" class="dataUserr">
                <h1 class="lc">Ваши питомцы</h1>
            @if (isset($dogs))
                    @foreach ($dogs as $dog)
                            <p class="inp">{{$dog->name}}</p>
                        <a class="btn btn-4 btn-4a btn-dogs" href="{{route('editDog', $dog->id)}}"> Редактировать </a>
                            {{--<a href = "{{route('deleteDog', $dog->id)}}"> Удалить </a>--}}

                    @endforeach
                @endif
            </div>
            <div v-if="addPet" class="dataUserr">
                @if (isset($dogInfo))
                    <form action="{{route('editDog', $dogInfo['id'])}}" method="post">
                @else
                    <form action="{{route('addDog')}}" method="post">
                @endif
                @csrf
                @if (isset($dogInfo))
                    <h1>Редактирование собаки</h1>
                @else
                    <h1>Добавление собаки</h1>
                @endif
                <h1><?php if (isset($messageForDogs)) echo $messageForDogs ?> </h1>
                <fieldset>
                <div class="">
                @if (isset($dogInfo))
                        <div class="">Имя</div> <input class="inp" id="name" name="name" type="text"
                                                                        placeholder="name" value= {{$dogInfo['name']}} >
                        <div class="">Возраст</div> <input class="inp" id="age" name="age" type="text" placeholder="age"
                                                                       value= {{$dogInfo['age']}} >
                        <div class="">Пол</div> <input class="inp" id="sex" name="sex" type="text" placeholder="sex"
                                                                       value= {{$dogInfo['sex']}} >
                        <div class="">Порода</div> <input class="inp" id="breed" name="breed" type="text"
                                                                         placeholder="breed"
                                                                         value= {{$dogInfo['breed']}} >
                        <div class="">Размеры</div> <input class="inp" id="size" name="size" type="text"
                                                                        placeholder="size" value= {{$dogInfo['size']}} >
                        <div class="">Информация</div> <input class="inp" id="info" name="info" type="text"
                                                                        placeholder="info" value= {{$dogInfo['info']}} >
                    @else
                        <div class="">Имя</div> <input class="inp" id="name" name="name" type="text"
                                                                        placeholder="name" value=''>
                        <div class="">Возраст</div> <input class="inp" id="age" name="age" type="text" placeholder="age"
                                                                       value=''>
                        <div class="">Пол</div> <input class="inp" id="sex" name="sex" type="text" placeholder="sex"
                                                                       value=''>
                        <div class="">Порода</div> <input class="inp" id="breed" name="breed" type="text"
                                                                         placeholder="breed" value=''>
                        <div class="">Размеры</div> <input class="inp" id="size" name="size" type="text"
                                                                        placeholder="size" value=''>
                        <div class="">Информация</div> <input class="inp" id="info" name="info" type="text"
                                                                        placeholder="info" value=''>
                    @endif
                </div>
                    <div class="">
                        @if (isset($dogInfo))
                            <div class="">&nbsp;&nbsp;</div> <input class="btn btn-4 btn-4a" name="addDog" type="submit"
                                                                                value="Сохранить">
                        @else
                            <div class="">&nbsp;&nbsp;</div> <input class="btn btn-4 btn-4a" name="addDog" type="submit"
                                                                                value="Добавить">
                        @endif
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
</body>
</html>
@endsection
