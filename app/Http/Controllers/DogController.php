<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('addDog');
    }

    public function addDog()
    {
        $data = $_POST;
        $user = Auth::user();
        return view('addDog');
    }
}
