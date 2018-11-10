<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Dog;
class DogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAddDog()
    {
        return view('addDog')->with(['message' => ""]);
    }

    public function addDog()
    {
        $data = $_POST;
        $user = Auth::user();
        $dog = new Dog;
        $dog->name =    $data['name'];
        $dog->age =     $data['age'];
        $dog->sex =     $data['sex'];
        $dog->breed =   $data['breed'];
        $dog->size =    $data['size'];
        $dog->info =    $data['info'];
        $dog->user_id = $user->id;
        $dog->save();
        return view('home')->with(['messageForDogs' => "Собака успешно добавлена"]);
    }

    public function showEditDog($id) {
        $dog = Dog::find(intval($id));
        return view('home')->with('dogInfo', $dog->getAttributes());
    }
    public function editDog($id)
    {        
        $data = $_POST;
        Dog::find(intval($id))->update([
            'name'      => $data['name'],
            'age'       => $data['age'],
            'sex'       => $data['sex'],
            'breed'     => $data['breed'],
            'size'      => $data['size'],
            'info'      => $data['info'],
        ]);
        return redirect()->route('home')->with(['messageForDogs' => "Собака успешно сохранена"]);
    }

    public function showWalkDog($id)
    {
        $dog = Dog::find(intval($id))->getAttributes();
        return view('home')->with('walkDog', $dog);
    }

    public function walkDog($id)
    {
        $data = $_POST;
        $user = Auth::user();
        $walk = new Walk;
        $walk->dog_id =    $id;
        $walk->dt_list =     current_time('mysql');
        $walk->dt_w_start =     $data['dt_w_start'];
        $walk->dt_w_duration =     $data['dt_w_duration'];
        $walk->dt_a_start =     current_time('mysql');
        $walk->dt_a_finish =     current_time('mysql');
        $walk->price_start =   $data['price'];
        $walk->adress =         $data['adress'];
        $walk->save();
        return view('home')->with(['messageForDogs' => "@ гуляет"]);
    }
}
