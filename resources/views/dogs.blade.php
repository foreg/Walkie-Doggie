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
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/borderMenu.js')}}"></script>
<script src="{{asset('js/Home.js')}}"></script>
</body>
</html>
@endsection
