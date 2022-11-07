<?php

namespace Database\Seeders;

use App\Models\HomeClientLogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeClientLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $home_client_logos = [
            ['id' => '6','title' => NULL,'name' => NULL,'image' => '1667805241_p-logo-2.svg','link' => NULL,'status' => '1'],
            ['id' => '7','title' => NULL,'name' => NULL,'image' => '1667805241_p-logo-3.svg','link' => NULL,'status' => '1'],
            ['id' => '8','title' => NULL,'name' => NULL,'image' => '1667805242_p-logo-4.png','link' => NULL,'status' => '1'],
            ['id' => '9','title' => NULL,'name' => NULL,'image' => '1667805242_p-logo-5.svg','link' => NULL,'status' => '1']
        ];
          foreach ( $home_client_logos as $key => $logo) {
            HomeClientLogo::create($logo);
        }

    }
}
