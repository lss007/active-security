<?php

namespace Database\Seeders;

use App\Models\FooterLogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $footer_logos = array(
            array('name' => 'navbar','logo_img' => '1668425373_logo.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:29:33','updated_at' => '2022-11-14 11:29:33'),
            array('name' => 'footer','logo_img' => '1668425396_dekra-1.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:29:56','updated_at' => '2022-11-14 11:36:24'),
            array('name' => 'footer','logo_img' => '1668425396_dekra-2.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:29:56','updated_at' => '2022-11-14 11:29:56'),
            array('name' => 'footer','logo_img' => '1668425414_bdsw.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:30:14','updated_at' => '2022-11-14 11:30:14'),
            array('name' => 'footer','logo_img' => '1668425432_ihk.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:30:32','updated_at' => '2022-11-14 11:30:32'),
            array('name' => 'footer','logo_img' => '1668425450_vbg.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:30:50','updated_at' => '2022-11-14 11:30:50')
          );

          foreach ( $footer_logos as $key => $name) {
            FooterLogo::create($name);
        }
    }
}
