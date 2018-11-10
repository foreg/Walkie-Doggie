@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="main">
    <form action="{{route('addDog')}}" method="post">
        @csrf
        <h1>Добавление собаки</h1>
        <h1>{{$message}}</h1>
        <fieldset>
            <div class=""> 
                <div class="">name</div> <input id="name" name="name" type="text" placeholder="name" value = '' >
                <div class="">age</div> <input id="age" name="age" type="text" placeholder="age" value = '' >
                <div class="">sex</div> <input id="sex" name="sex" type="text" placeholder="sex" value = '' >
                <div class="">breed</div> <input id="breed" name="breed" type="text" placeholder="breed" value = '' >
                <div class="">size</div> <input id="size" name="size" type="text" placeholder="size" value = '' >
                <div class="">info</div> <input id="info" name="info" type="text" placeholder="info" value = '' >
            </div>
            <div class=""> 
                <div class="">&nbsp;&nbsp;</div> <input  name="addDog" type="submit" value="Сохранить" ></div>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>
@endsection
