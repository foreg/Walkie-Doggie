<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addProfileInfo(array $data)
    {        
        Auth::user()->update([
            'phone'     => $data['phone'],
            'adress'    => $data['adress'],
            'info'      => $data['info'],
        ]);
        return redirect()->route('home');
    }
}
