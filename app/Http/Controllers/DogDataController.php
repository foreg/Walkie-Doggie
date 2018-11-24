<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use App\User;
use Illuminate\Support\Facades\Hash;

class DogDataController extends Controller
{
    public function index()
    {
        $user = User::where('vkId', $_GET['id'])-> first();
        return response()->json(Dog::where('user_id', $user->id)->get(), 200);
    }

    public function show(Dog $dog)
    {
        return $dog;
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $user = User::where('vkId', $request['user_id'])-> first();
        $request['user_id'] = $user->id;
        $dog = Dog::create($request);

        return response()->json($dog, 201);
    }

    public function update(Request $request, Dog $dog)
    {
        //$dog->update($request->all());
        $dog->update($request->all());              
        return response()->json($dog, 200);
        
    }

    public function delete(Dog $dog)
    {
        $dog->delete();

        return response()->json(null, 204);
    }
}
