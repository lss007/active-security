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
     
        $home_client_logos = array(
            array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-1.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:02:11','updated_at' => '2022-11-14 10:02:11'),
            array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-2.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:02:11','updated_at' => '2022-11-14 10:02:11'),
            array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-3.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:02:11','updated_at' => '2022-11-14 10:02:11'),
            array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-4.png','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:02:11','updated_at' => '2022-11-14 10:02:11'),
            array('title' => NULL,'name' => NULL,'image' => '1668420164_p-logo-2.svg','buton' => NULL,'link' => NULL,'status' => '0','deleted_at' => '2022-11-14 10:04:41','created_at' => '2022-11-14 10:02:44','updated_at' => '2022-11-14 10:04:41'),
            array('title' => NULL,'name' => NULL,'image' => '1668420246_p-logo-5.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:04:06','updated_at' => '2022-11-14 10:04:06')
        );
          foreach ( $home_client_logos as $key => $logo) {
            HomeClientLogo::create($logo);
        }

    }
}
