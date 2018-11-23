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
<div class="container">
    @foreach ($dogs as $dog)
        <p class="inp">{{$dog->name}}</p>
        <a class="btn btn-4 btn-4a btn-dogs"
           href="{{route('editDog', $dog->id)}}"> Редактировать </a>
        <a class="btn btn-4 btn-4a btn-dogs"
           href="{{route('walkDog', $dog->id)}}"> Выгулять </a>
    @endforeach
</div>
    <!-- <div class="row">
        <div id="dataUser" class="PersonalData col-xs-12">
            <div v-if="showDataUser" class="dataUserr">
                {{--<div v-if="showed">--}}
                
            </div>
            <div v-if="showPet" class="dataUserr">
                <h1 class="lc">Ваши питомцы</h1>
                @if (isset($dogs))
                    @foreach ($dogs as $dog)
                        <p class="inp">{{$dog->name}}</p>
                        <a class="btn btn-4 btn-4a btn-dogs"
                           href="{{route('editDog', $dog->id)}}"> Редактировать </a>
                        <a class="btn btn-4 btn-4a btn-dogs"
                           href="{{route('walkDog', $dog->id)}}"> Выгулять </a>

                    @endforeach
                @endif
                @if (isset($walkDog))
                    <form action="{{ route('walkDog', $walkDog['id']) }}" method="post">
                    @csrf
                        <fieldset>
                            <h2 class="walk">Выгулять "{{$walkDog['name']}}"</h2>

                            <div class="">Адрес</div>
                            <input class="inp" id="adress" name="adress" type="text" placeholder="adress"
                                   value="{{ Auth::user()['adress'] }}">

                            <div class="">Дата-время начала</div>
                            <input class="inp" style="width: 20%" id="d_w_start" name="d_w_start" type="date" placeholder="dt_w_start"
                                   value="">
                            <input class="inp" style="width: 10%" id="t_w_start" name="t_w_start" type="time" placeholder="dt_w_start"
                                   value="">

                            <div class="">Длительность прогулки</div>
                            <input class="inp" id="dt_w_duration" name="dt_w_duration" type="text"
                                   placeholder="dt_w_duration" value="">

                            <div class="">Цена</div>
                            <input class="inp" id="price" name="price" type="text" placeholder="price" value="">

                            <div class="">&nbsp;&nbsp;</div>
                            <input class="btn btn-4 btn-4a btn-walk" name="walkDog" type="submit" value="Выгулять">
                        </fieldset>
                    </form>

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
                                                                           placeholder="name"
                                                                           value= {{$dogInfo['name']}} >
                                            <div class="">Возраст</div> <input class="inp" id="age" name="age"
                                                                               type="text" placeholder="age"
                                                                               value= {{$dogInfo['age']}} >
                                            <div class="">Пол</div> <input class="inp" id="sex" name="sex" type="text"
                                                                           placeholder="sex"
                                                                           value= {{$dogInfo['sex']}} >
                                            <div class="">Порода</div> <input class="inp" id="breed" name="breed"
                                                                              type="text"
                                                                              placeholder="breed"
                                                                              value= {{$dogInfo['breed']}} >
                                            <div class="">Размеры</div> <input class="inp" id="size" name="size"
                                                                               type="text"
                                                                               placeholder="size"
                                                                               value= {{$dogInfo['size']}} >
                                            <div class="">Информация</div> <input class="inp" id="info" name="info"
                                                                                  type="text"
                                                                                  placeholder="info"
                                                                                  value= {{$dogInfo['info']}} >
                                        @else
                                            <div class="">Имя</div> <input class="inp" id="name" name="name" type="text"
                                                                           placeholder="name" value=''>
                                            <div class="">Возраст</div> <input class="inp" id="age" name="age"
                                                                               type="text" placeholder="age"
                                                                               value=''>
                                            <div class="">Пол</div> <input class="inp" id="sex" name="sex" type="text"
                                                                           placeholder="sex"
                                                                           value=''>
                                            <div class="">Порода</div> <input class="inp" id="breed" name="breed"
                                                                              type="text"
                                                                              placeholder="breed" value=''>
                                            <div class="">Размеры</div> <input class="inp" id="size" name="size"
                                                                               type="text"
                                                                               placeholder="size" value=''>
                                            <div class="">Информация</div> <input class="inp" id="info" name="info"
                                                                                  type="text"
                                                                                  placeholder="info" value=''>
                                        @endif
                                    </div>
                                    <div class="">
                                        @if (isset($dogInfo))
                                            <div class="">&nbsp;&nbsp;</div> <input class="btn btn-4 btn-4a"
                                                                                    name="addDog" type="submit"
                                                                                    value="Сохранить">
                                        @else
                                            <div class="">&nbsp;&nbsp;</div> <input class="btn btn-4 btn-4a"
                                                                                    name="addDog" type="submit"
                                                                                    value="Добавить">
                                        @endif
                                    </div>
                                </fieldset>
                            </form>
                    </form>
            </div>
            {{--<div v-if="walked">--}}

            {{--</div>--}}
        </div>
    </div>
</div>
</div>
</div> -->
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
</body>
</html>
@endsection
