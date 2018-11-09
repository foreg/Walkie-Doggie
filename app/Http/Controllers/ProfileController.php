<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addProfileInfo()
    {        
        $data = $_POST;
        Auth::user()->update([
            'name'     => $data['name'],
            'phone'     => $data['phone'],
            'adress'    => $data['adress'],
            'info'      => $data['info'],
        ]);
        return redirect()->route('home');
    }
}
