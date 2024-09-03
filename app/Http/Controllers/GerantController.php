<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Gerant;
use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Room_Category;
use App\Models\Statut;
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
        $chambreCount=Chambre::count();
        $hotel=Hotel::where('user_id', auth()->user()->id)->first();
        $chambres=Chambre::where('hotel_id', $hotel->id)->get();
        $room_category=Room_Category::all();
        $statuts=Statut::all();
        return view('gerant.booking.rooms', compact('chambres', 'hotel', 'room_category', 'statuts', 'chambreCount'));
    }

    public function create_rooms(){
        $gerant=Hotel::where('user_id', auth()->user()->id)->get();
        $room_category=Room_Category::all();
        $statuts=Statut::all();


        // return $gerant;'gerant',
        // return $statuts;

        return view('gerant.booking.create', compact('gerant', 'room_category', 'statuts'));
    }

    public function add_chambre(Request $request){

            $hotel=Hotel::where('user_id', auth()->user()->id)->first();
            // $hotel=Hotel::find($id);
            // $chambre=Chambre::where('hotel_id', $hotel->id)->get();

        $chambre=Chambre::create([
            'name'=>$request->name,
            'quantite'=>$request->quantite,
            // 'hotel_id'=>auth()->user()->id,
            'hotel_id'=>$hotel->id,
            'room__category_id'=>$request->room__category_id,
            'statut_id'=>$request->statut_id,
            'capacite'=>$request->capacite,
            'prix'=>$request->prix,
        ]);

        // return $chambre;
        // return $hotel;/

        return to_route('gerant.rooms')->with('message', 'Room added succefully');
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
