<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $createuser = New User();
        $createuser->name = "Alexander";
        $createuser->role_id = 1;
        $createuser->email = "active_security@yopmail.com";
        $createuser->password = Hash::make('12345678');
        $createuser->current_team_id = 1;
        $createuser->save();


        $createuser = New User();
        $createuser->name = "alex";
        $createuser->role_id = 3;
        $createuser->email = "activealex@yopmail.com";
        $createuser->password = Hash::make('12345678');
        $createuser->current_team_id = 1;
        $createuser->save();
    }
}
