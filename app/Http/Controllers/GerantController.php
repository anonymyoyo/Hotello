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

    public function gerant_listing(){

        $gerant=User::all();
        // return $gerant;
        return view('gerant.listing.listing', compact('gerant'));
    }

    public function gerant_booking(){
        return view('gerant.booking.booking');
    }

    public function gerant_activity(){
        return view('gerant.activity.activity');
    }

    public function gerant_earning(){
        return view('gerant.earning.earning');
    }

    public function gerant_review(){
        return view('gerant.review.review');
    }

    public function gerant_setting(){
        return view('gerant.setting.setting');
    }
}
