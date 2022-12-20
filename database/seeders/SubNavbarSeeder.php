<?php

namespace Database\Seeders;

use App\Models\SubNavbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubNavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sub_navbars = array(
            array('navbar_id' => '5','route_name' => 'Objekt- und Werkschutz','route_link' => '1','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:46:51'),
            array('navbar_id' => '5','route_name' => 'Centerbewachung','route_link' => '2','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:46:13'),
            array('navbar_id' => '5','route_name' => 'Kaufhausdetektive','route_link' => '3','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:46:32'),
            array('navbar_id' => '5','route_name' => 'Baustellenbewachung','route_link' => '4','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:44:07'),
            array('navbar_id' => '5','route_name' => 'Öffnungs-und Schließddienst','route_link' => '5','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:47:02'),
            array('navbar_id' => '5','route_name' => 'Revierkontrollen','route_link' => '6','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:47:13'),
            array('navbar_id' => '5','route_name' => 'Empfangsdienst','route_link' => '7','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:46:22'),
            array('navbar_id' => '5','route_name' => 'Shop Guard','route_link' => '8','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:47:23'),
            array('navbar_id' => '5','route_name' => 'Veranstaltungsschutz','route_link' => '9','ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => '2022-12-20 11:47:33')
          );
          foreach ($sub_navbars as $key => $navbar) {
            SubNavbar::create($navbar);
        }
    }
}
