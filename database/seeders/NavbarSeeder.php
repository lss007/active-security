<?php

namespace Database\Seeders;

use App\Models\Navbar;
use App\Models\RouteNameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $navbars = array(
            array('route_name' => 'unternehmen','route_link' => '10','ordering' => '3','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 05:02:11','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'jobs','route_link' => '11','ordering' => '4','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 05:02:11','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'kontakt','route_link' => '12','ordering' => '5','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 05:02:11','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'Home','route_link' => '16','ordering' => '1','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 05:02:11','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'Dienstleistungen','route_link' => 'NULL','ordering' => '2','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 05:02:11','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'AGB','route_link' => '15','ordering' => '6','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-30 08:01:15','updated_at' => '2022-12-30 11:38:49'),
            array('route_name' => 'Impressum','route_link' => '13','ordering' => '8','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-30 08:01:40','updated_at' => '2022-12-30 10:01:28'),
            array('route_name' => 'Datenschutz','route_link' => '14','ordering' => '7','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-30 08:01:53','updated_at' => '2022-12-30 10:01:28')
          );
  
        foreach ($navbars as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
