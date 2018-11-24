@extends('layouts.app1')

@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/cabinetMenu.css') }}"/>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
</head>
<body>
<div id="particles-js"></div>
<div class="container">
    <div class="row">
        <div class="PersonalData_dog col-xs-12">
            <form action="{{route('addDog')}}" method="post">
                @csrf
                <h1 class="head">Добавление собаки</h1>
                <fieldset>
                        <div class="col-xs-6 profile_style">
                            <div class="profile_text">Имя</div>
                            <input class="inp" id="name" name="name" type="text" placeholder="Соня" value=''>
                            <div class="profile_text">Возраст</div>
                            <input class="inp" id="age" name="age" type="text" placeholder="4" value=''>
                            <div class="profile_text">Пол</div>
                            <input class="inp" id="sex" name="sex" type="text" placeholder="М" value=''>
                        </div>
                        <div class="col-xs-6 profile_style">
                            <div class="profile_text">Порода</div>
                            <input class="inp" id="breed" name="breed" type="text" placeholder="Вельш-корги" value=''>
                            <div class="profile_text">Размеры</div>
                            <input class="inp" id="size" name="size" type="text" placeholder="Маленький" value=''>
                            <div class="profile_text">Информация</div>
                            <input class="inp" id="info" name="info" type="text" placeholder="Добрый, не кусается" value=''>
                        </div>
                    <div class="knop">
                        <div class="">&nbsp;&nbsp;</div> <a class="btn btn-4 btn-4a" href="{{ route('home') }}">Назад</a>
                        <input class="btn btn-4 btn-4a" name="addDog" type="submit" value="Добавить">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('libs/particles/particles.js')}}"></script>
<script src="{{asset('js/ParticlesConfig.js')}}"></script>
</body>
</html>
@endsection
