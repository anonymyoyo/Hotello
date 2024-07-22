<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Hotel::create([
            'name'=>'Akwa Palace',
            'user_id'=>'5',
            'email'=>'akwapalace@gmail.com',
            'email2'=>'akwapalace@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Akwa, Douala Cameroun',
            'etoiles'=>'3',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);

        Hotel::create([
            'name'=>'Kristal Palace',
            'user_id'=>'3',
            'email'=>'kristalpalace@gmail.com',
            'email2'=>'kristalpalace@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Akwa, Douala Cameroun',
            'etoiles'=>'4',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);

        Hotel::create([
            'name'=>'Lewat Hotel',
            'user_id'=>'4',
            'email'=>'lewathotel@gmail.com',
            'email2'=>'lewathotel@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Akwa, Douala Cameroun',
            'etoiles'=>'2.5',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);

        Hotel::create([
            'name'=>'Geneva Hotel',
            'user_id'=>'5',
            'email'=>'genevahotel@gmail.com',
            'email2'=>'genevahotel@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Ndogbong, Douala Cameroun',
            'etoiles'=>'3',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);

        Hotel::create([
            'name'=>'La Falaise Hotel',
            'user_id'=>'4',
            'email'=>'lafalaisehotel@gmail.com',
            'email2'=>'lafalaisehotel@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Bonapriso, Douala Cameroun',
            'etoiles'=>'3',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);

        Hotel::create([
            'name'=>'Hilton Hotel',
            'user_id'=>'5',
            'email'=>'hiltonhotel@gmail.com',
            'email2'=>'hiltonhotel@hotello.com',
            'phone'=>'694865872',
            'localisation'=>'Mont-Febe, Yaounde Cameroun',
            'etoiles'=>'3',
            'nbre_chambres'=>'100',
            'description'=>'Description',
        ]);
    }
}
