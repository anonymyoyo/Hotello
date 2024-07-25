<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Gerant;
use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Room_Category;
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
        $hotel=Hotel::where('user_id', auth()->user()->id)->get();
        // return $gerant;
        // return $hotel;
        return view('gerant.listing.listing', compact('hotel'));
    }

    public function gerant_hotel(){
        return view('gerant.listing.create');
    }

    public function ajouter_hotel(Request $request){
        // $user=User::find($id);
        Hotel::create([
            'name'=>$request->name,
            'user_id'=>auth()->user()->id,
            'email2'=>$request->email2,
            'phone'=>$request->phone,
            'license'=>$request->license,
            'tax_number'=>$request->tax_number,
            'email'=>$request->email,
            'localisation'=>$request->localisation,
            'etoiles'=>$request->etoiles,
            'nbre_chambres'=>$request->nbre_chambres,
            'description'=>$request->description,
        ]);
        return to_route('gerant.listing')->with('message', 'Hotel ajoute avec succes');
    }

    public function gerant_booking(){
        return view('gerant.booking.booking');
    }

    public function gerant_rooms(){
        return view('gerant.booking.rooms');
    }

    public function create_rooms(){
        $gerant=Hotel::where('user_id', auth()->user()->id)->get();
        $room_category=Room_Category::all();
        // return $gerant;
        return view('gerant.booking.create', compact('gerant', 'room_category'));
    }

    public function add_chambre(Request $request){
            Room_Category::all();
        $chambre=Chambre::create([
            'name'=>$request->name,
            'quantite'=>$request->quantite,
            'hotel_id'=>$request->hotel_id,
            'user_id'=>$request->user_id,
            'room_category'=>$request->room_category,
            'statut'=>$request->statut,
            'type'=>$request->type,
            'prix'=>$request->prix,
        ]);

        return $chambre;

        // return to_route('gerant.room')->with('message', 'Room added succefully');
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
