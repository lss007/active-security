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
 /* `active_security`.`footer_logos` */
$footer_logos = array(
    array('name' => 'navbar','logo_img' => '1669013037_logo.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:29:33','updated_at' => '2022-11-21 06:43:57'),
    array('name' => 'footer','logo_img' => '1669013716_Dekra-2.png','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 06:45:17','updated_at' => '2022-11-21 06:55:16'),
    array('name' => 'footer','logo_img' => '1669013739_Dekra-1.png','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 06:45:17','updated_at' => '2022-11-21 06:55:39'),
    array('name' => 'footer','logo_img' => '1669013558_BDSW.png','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 06:52:38','updated_at' => '2022-11-21 06:52:38'),
    array('name' => 'footer','logo_img' => '1669013620_ihk.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 06:53:40','updated_at' => '2022-11-21 06:53:40'),
    array('name' => 'footer','logo_img' => '1669013656_vbg.svg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 06:54:16','updated_at' => '2022-11-21 06:54:16')
  );
  
          foreach ($footer_logos as $key => $name) {
            FooterLogo::create($name);
        }
    }
}
