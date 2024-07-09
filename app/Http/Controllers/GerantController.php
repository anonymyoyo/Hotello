<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Gerant;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    //
    public function dashboard(){
        $gerant=User::all();
        // return $gerant;
        return view('gerant.page', compact('gerant'));
    }
}
