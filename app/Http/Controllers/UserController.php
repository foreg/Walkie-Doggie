<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::where('vkId', $_GET['vkId'])-> first(), 200);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        //$user->update($request->all());
        if (Hash::check($request->password, $user->password)) {
            $user->update($request->all());        
            $user->update(array('password' => Hash::make($request->only("password")["password"])));        
            return response()->json($user, 200);
        }
        else {
            return response()->json("wrong password", 200);
        }
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
