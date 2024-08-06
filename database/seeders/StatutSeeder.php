<?php

namespace Database\Seeders;

use App\Models\Statut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Statut::create([
            'statut'=>'Disponible',
        ]);

        Statut::create([
            'statut'=>'Occupee',
        ]);
    }
}
