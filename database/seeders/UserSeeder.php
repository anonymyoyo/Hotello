<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Yoyo',
            'email' => 'yoyo@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '2',
            'password' => 'yoyo',
        ]);

        User::create([
            'name' => 'Gerant',
            'email' => 'gerant@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '3',
            'password' => 'gerant',
        ]);
    }
}
