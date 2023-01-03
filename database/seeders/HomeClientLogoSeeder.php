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
     
 /* `active_security`.`home_client_logos` */
 $home_client_logos = array(
    array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-1.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-2.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-3.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => '2022-12-16 04:53:49','created_at' => now(),'updated_at' => now()),
    array('title' => NULL,'name' => NULL,'image' => '1668420131_p-logo-4.png','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => NULL,'name' => NULL,'image' => '1670391328_up1670224604_1668420246_p-logo-5.svg','buton' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
  );
          foreach ( $home_client_logos as $key => $logo) {
            HomeClientLogo::create($logo);
        }

    }
}
