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
<div id="particles-js"></div>
<div class="container">
    <div class="row">
        <div class="PersonalData_dog col-xs-12">
        <form action="{{route('editDog', $dogInfo['id'])}}" method="post">
            <h1>Редактирование собаки</h1>
            <fieldset>
            @csrf
                <div class="">
                    <div class="profile_text">Имя</div><input class="inp" id="name" name="name" type="text" placeholder="name" value= "{{$dogInfo['name']}}" >
                    <div class="profile_text">Возраст</div> <input class="inp" id="age" name="age" type="text" placeholder="age" value= "{{$dogInfo['age']}}" >
                    <div class="profile_text">Пол</div> <input class="inp" id="sex" name="sex" type="text" placeholder="sex" value= "{{$dogInfo['sex']}}" >
                    <div class="profile_text">Порода</div> <input class="inp" id="breed" name="breed" type="text" placeholder="breed" value= "{{$dogInfo['breed']}}" >
                    <div class="profile_text">Размеры</div> <input class="inp" id="size" name="size" type="text" placeholder="size" value= "{{$dogInfo['size']}}" >
                    <div class="profile_text">Информация</div> <input class="inp" id="info" name="info" type="text"  value = "{{$dogInfo['info']}}" placeholder="info">
                </div>
                <div class="">
                    <div class="">&nbsp;&nbsp;</div><a class="btn btn-4 btn-4a" href="{{ route('home') }}">Назад</a>
                    <input class="btn btn-4 btn-4a" name="addDog" type="submit" value="Сохранить">
                </div>
            </fieldset>
        </form>
        </div>
    </div>
</div>
<!-- <script src="{{asset('js/classie.js')}}"></script> -->
<!-- <script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script> -->
<script src="{{asset('libs/particles/particles.js')}}"></script>
<script src="{{asset('js/ParticlesConfig.js')}}"></script>
</body>
</html>
@endsection
