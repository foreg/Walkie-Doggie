<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Dog;
class DogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}
