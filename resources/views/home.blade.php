@extends('layouts.app1')

@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/cabinetMenu.css"/>
    <script src="js/modernizr.custom.js"></script>

</head>
<body>
<<<<<<< HEAD
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{----}}
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
    </ul>
    {{--<ul>--}}
        {{--<li><a href="#" class="bt-icon icon-twitter">Twitter</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-gplus">Google+</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-facebook">Facebook</a></li>--}}
        {{--<li><a href="#" class="bt-icon icon-github">icon-github</a></li>--}}
    {{--</ul>--}}
</nav>
{{----}}
<div class="container">
    <div class="row">
        <div id="dataUser" class="PersonalData col-xs-12">

            <div  v-if="showDataUser">
            <form  action="{{route('addProfileInfo')}}" method="post">
                @csrf
                <h1>Личный кабинет</h1>
                <fieldset>
                    <div class="">
                        <div class="">Ваше имя или название органищации</div>
                        <input id="name" name="name" type="text" placeholder="" value='{{Auth::user()->name}}'>
                        <div class="">Телефон</div>
                        <input id="phone" name="phone" type="text" placeholder="+79224789108"
                               value='{{Auth::user()->phone}}'>
                        <div class="">Адрес</div>
                        <input id="adress" name="adress" type="text" placeholder="" value='{{Auth::user()->adress}}'>
                        <div class="">Инфо</div>
                        <input id="info" name="info" type="text" placeholder="" value='{{Auth::user()->info}}'>
                    </div>
                    <div class="">
                        <div class="">&nbsp;&nbsp;</div>
                        <input name="addProfileInfo" type="submit" value="Сохранить">
                    </div>
                </fieldset>
            </form>
=======
<div class="main">
    <form action="{{route('addProfileInfo')}}" method="post">
        @csrf
        <h1>Личный кабинет</h1>
        <fieldset>
            <div class=""> 
                <div class="">Ваше имя или название органищации</div> <input id="name" name="name" type="text" placeholder="" value = '{{Auth::user()->name}}' >
                <div class="">Телефон</div> <input id="phone" name="phone" type="text" placeholder="+79224789108" value = '{{Auth::user()->phone}}' >
                <div class="">Адрес</div> <input id="adress" name="adress" type="text" placeholder="" value = '{{Auth::user()->adress}}' >
                <div class="">Инфо</div> <input id="info" name="info" type="text" placeholder="" value = '{{Auth::user()->info}}' >
            </div>
            <div class=""> 
                <div class="">&nbsp;&nbsp;</div> <input  name="addProfileInfo" type="submit" value="Сохранить" ></div>
            </div>
        </fieldset>
    </form>
    @if (isset($dogs))
    @foreach ($dogs as $dog)
        <p> 
            {{$dog->name}} 
            <a href = "{{route('editDog', $dog->id)}}"> Редактировать </a>
            <a href = ""> Удалить </a>
        </p>
    @endforeach
    @endif

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
                <div class="">name</div> <input id="name" name="name" type="text" placeholder="name" value = {{$dogInfo['name']}} >
                <div class="">age</div> <input id="age" name="age" type="text" placeholder="age" value = {{$dogInfo['age']}} >
                <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex" value = {{$dogInfo['sex']}} >
                <div class="">breed</div> <input id="breed" name="breed" type="text" placeholder="breed" value = {{$dogInfo['breed']}} >
                <div class="">size</div> <input id="size" name="size" type="text" placeholder="size" value = {{$dogInfo['size']}} >
                <div class="">info</div> <input id="info" name="info" type="text" placeholder="info" value = {{$dogInfo['info']}} >
                @else
                <div class="">name</div> <input id="name" name="name" type="text" placeholder="name" value = '' >
                <div class="">age</div> <input id="age" name="age" type="text" placeholder="age" value = '' >
                <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex" value = '' >
                <div class="">breed</div> <input id="breed" name="breed" type="text" placeholder="breed" value = '' >
                <div class="">size</div> <input id="size" name="size" type="text" placeholder="size" value = '' >
                <div class="">info</div> <input id="info" name="info" type="text" placeholder="info" value = '' >
                @endif
>>>>>>> upstream/master
            </div>
        <div v-if="showPet">
        @if (isset($dogs))
                @foreach ($dogs as $dog)
                    <p>
                        {{$dog->name}}
                        <a href="{{route('editDog', $dog->id)}}"> Редактировать </a>
                        {{--<a href = "{{route('deleteDog', $dog->id)}}"> Удалить </a>--}}
                    </p>
                @endforeach
            @endif
        </div>
        <div v-if="addPet">
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
                                        <div class="">name</div> <input id="name" name="name" type="text"
                                                                        placeholder="name" value= {{$dogInfo['name']}} >
                                        <div class="">age</div> <input id="age" name="age" type="text" placeholder="age"
                                                                       value= {{$dogInfo['age']}} >
                                        <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex"
                                                                       value= {{$dogInfo['sex']}} >
                                        <div class="">breed</div> <input id="breed" name="breed" type="text"
                                                                         placeholder="breed"
                                                                         value= {{$dogInfo['breed']}} >
                                        <div class="">size</div> <input id="size" name="size" type="text"
                                                                        placeholder="size" value= {{$dogInfo['size']}} >
                                        <div class="">info</div> <input id="info" name="info" type="text"
                                                                        placeholder="info" value= {{$dogInfo['info']}} >
                                    @else
                                        <div class="">name</div> <input id="name" name="name" type="text"
                                                                        placeholder="name" value=''>
                                        <div class="">age</div> <input id="age" name="age" type="text" placeholder="age"
                                                                       value=''>
                                        <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex"
                                                                       value=''>
                                        <div class="">breed</div> <input id="breed" name="breed" type="text"
                                                                         placeholder="breed" value=''>
                                        <div class="">size</div> <input id="size" name="size" type="text"
                                                                        placeholder="size" value=''>
                                        <div class="">info</div> <input id="info" name="info" type="text"
                                                                        placeholder="info" value=''>
                                    @endif
                                </div>
                                <div class="">
                                    @if (isset($dogInfo))
                                        <div class="">&nbsp;&nbsp;</div> <input name="addDog" type="submit"
                                                                                value="Сохранить">
                                    @else
                                        <div class="">&nbsp;&nbsp;</div> <input name="addDog" type="submit"
                                                                                value="Добавить">
                                    @endif
                                </div>
                            </fieldset>
                        </form>
                    </div>
        </div>

    </div>
    </div>
</div>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
<script src="js/Home.js"></script>
</body>
</html>
@endsection
