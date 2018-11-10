@extends('layouts.app1')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
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
</div>
</body>
</html>
@endsection
