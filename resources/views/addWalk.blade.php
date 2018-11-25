@extends('layouts.app1')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('../css/cabinetMenu.css') }}"/>
    <script src="../js/modernizr.custom.js"></script>
</head>
<body>
<div id="particles-js"></div>
<div class="container">
    <div class="row">
       <div class="PersonalData_walk col-xs-12">
        <form action="{{ route('walkDog', $walkDog['id']) }}" method="post">
            @csrf
            <fieldset>
                <h2 class="walk">Выгулять "{{$walkDog['name']}}"</h2>
                <div class="profile_text">Адрес</div>
                <input class="inp" id="adress" name="adress" type="text" placeholder="adress"
                       value="{{ Auth::user()['adress'] }}">
                <div class="profile_text">Дата-время начала</div>
                <input class="inp" style="width: 20%" id="d_w_start" name="d_w_start" type="date" placeholder="dt_w_start"
                       value="">
                <input class="inp" style="width: 10%" id="t_w_start" name="t_w_start" type="time" placeholder="dt_w_start"
                       value="">
                <div class="profile_text">Длительность прогулки</div>
                <input class="inp" id="dt_w_duration" name="dt_w_duration" type="text"
                       placeholder="30 минут" value="">
                <div class="profile_text">Цена</div>
                <input class="inp" id="price" name="price" type="text" placeholder="400р" value="">
                <div class="profile_text">&nbsp;&nbsp;</div>
                <a class="btn btn-4 btn-4a aForWalk" href="{{ route('allDogs') }}">Назад</a>
                <input class="btn btn-4 btn-4a btn-walk" name="walkDog" type="submit" value="Выгулять">
            </fieldset>
        </form>
        </div>
    </div>
</div>
<script src="{{asset('../libs/particles/particles.js')}}"></script>
<script src="{{asset('../js/ParticlesConfig.js')}}"></script>
</body>
</html>
@endsection
