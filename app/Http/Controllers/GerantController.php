<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerantController extends Controller
{
    //
    public function dashboard(){
        return view('gerant.dashboard');
    }
}
