<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
@extends('layouts.appMap')
@section('content')
    {{--<div class="forInstruction">--}}
        <div class="instruction">
            <h3>Выбери заказ по душе!</h3>
            <p>На карте размещены все заказы на выгул собак!  </p>
            <p>Найди тот, что устроит тебя и принимай!</p>
        </div>
    {{--</div>--}}
    <div class="container_map">
        <div id="map"></div>
    </div>

@endsection