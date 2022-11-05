<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                // Admin Role
                $roleAdmin = new Role();
                $roleAdmin->name = 'Admin';
                $roleAdmin->save();
        
                // Traveller Role
                $roleUser = new Role();
                $roleUser->name = 'User';
                $roleUser->save();
        
                // Service Provider Role
                $roleProvider = new Role();
                $roleProvider->name = 'Manager';
                $roleProvider->save();
    }
}
