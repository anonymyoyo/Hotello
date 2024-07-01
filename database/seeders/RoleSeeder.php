<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Roles::create([
            'roles_name'=>'Admin',
        ]);

        Roles::create([
            'roles_name'=>'User',
        ]);

        Roles::create([
            'roles_name'=>'Gerant',
        ]);
    }
}
