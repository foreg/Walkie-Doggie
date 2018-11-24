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
<div class="container dogs">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="lc">Питомцы</h1>
        </div>
        <div class="col-xs-6">
@foreach ($dogs as $dog)
        <p class="inp">{{$dog->name}}</p>
        <a class="btn btn-4 btn-4a btn-dogs"
           href="{{route('editDog', $dog->id)}}"> Редактировать </a>
        <a class="btn btn-4 btn-4a btn-dogs"
           href="{{route('walkDog', $dog->id)}}"> Выгулять </a>
    @endforeach
        </div>
    </div>
    <a class="btn btn-4 btn-4a" href="{{ route('home') }}">Назад</a>
</div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
<script src="{{asset('libs/particles/particles.js')}}"></script>
<script src="{{asset('js/ParticlesConfig.js')}}"></script>
</body>
</html>
@endsection
