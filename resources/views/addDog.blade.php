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
<div class="main">
    <div class="container">
        <div class="PersonalData add">
            <form action="{{route('addDog')}}" method="post">
                @csrf
                <h1 class="head">Добавление собаки</h1>
                <fieldset>
                    <div class="col-xs-12">
                        <div class="col-xs-6 profile_style">
                            <div class="">Имя</div>
                            <input class="inp" id="name" name="name" type="text" placeholder="name" value=''>
                            <div class="">Возраст</div>
                            <input class="inp" id="age" name="age" type="text" placeholder="age" value=''>
                            <div class="">Пол</div>
                            <input class="inp" id="sex" name="sex" type="text" placeholder="sex" value=''>
                        </div>
                        <div class="col-xs-6 profile_style">
                            <div class="">Порода</div>
                            <input class="inp" id="breed" name="breed" type="text" placeholder="breed" value=''>
                            <div class="">Размеры</div>
                            <input class="inp" id="size" name="size" type="text" placeholder="size" value=''>
                            <div class="">Информация</div>
                            <input class="inp" id="info" name="info" type="text" placeholder="info" value=''>
                        </div>
                    </div>
                    <div class="knop">
                        <div class="">&nbsp;&nbsp;</div>
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
