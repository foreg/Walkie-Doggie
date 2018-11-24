<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
@extends('layouts.appMap')
@section('content')
    {{--<div class="forInstruction">--}}
        <div class="instruction">
            <h3>Инструкция</h3>
            <p>Описание инструкции</p>
        </div>
    {{--</div>--}}
    <div class="container_map">
        <div id="map"></div>
    </div>

@endsection