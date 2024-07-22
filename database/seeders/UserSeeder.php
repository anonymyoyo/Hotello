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
            'name' => 'Titi',
            'email' => 'titi@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '3',
            'password' => 'titi',
        ]);

        User::create([
            'name' => 'Moussi Teng Pierre Dilan',
            'email' => 'moussiteng@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '3',
            'password' => 'moussiteng',
        ]);

        User::create([
            'name' => 'Sara Njoh',
            'email' => 'saranjoh@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '3',
            'password' => 'saranjoh',
        ]);

        User::create([
            'name' => 'BOHOLE Paul Emmanuel',
            'email' => 'boholepaul@icloud.com',
            'contact' => '694865872',
            'addresse' => 'douala',
            'ville' => 'douala',
            'pays' => 'cameroun',
            'roles_id' => '2',
            'password' => 'boholepaul',
        ]);
    }
}
