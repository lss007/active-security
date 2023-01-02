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
            /* `testing`.`sub_navbars` */
            $sub_navbars = array(
                array('navbar_id' => '5','route_name' => 'Objekt- und Werkschutz','route_link' => '1','ordering' => '1','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Centerbewachung','route_link' => '2','ordering' => '2','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Kaufhausdetektive','route_link' => '3','ordering' => '6','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Baustellenbewachung','route_link' => '4','ordering' => '4','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Öffnungs-und Schließddienst','route_link' => '5','ordering' => '8','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Revierkontrollen','route_link' => '6','ordering' => '9','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Empfangsdienst','route_link' => '7','ordering' => '5','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Shop Guard','route_link' => '8','ordering' => '7','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36'),
                array('navbar_id' => '5','route_name' => 'Veranstaltungsschutz','route_link' => '9','ordering' => '3','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-21 10:59:51','updated_at' => '2022-12-29 09:38:36')
            );
          foreach ($sub_navbars as $key => $navbar) {
            SubNavbar::create($navbar);
        }
    }
}
