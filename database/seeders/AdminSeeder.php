<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '1',
            'password' => 'admin',
        ]);

    }
}
