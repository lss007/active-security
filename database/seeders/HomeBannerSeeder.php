<?php

namespace Database\Seeders;

use App\Models\HomeBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 /* `active_security`.`home_banners` */
$home_banners = array(
    array('heading' => 'Mit uns können Sie sicher sein.','title' => 'Ihr Sicherheitsdienst aus Regensburg','banner_paragaph' => 'Maßgeschneiderte Sicherheitskonzepte, auf Ihren Bedarf abgestimmt. Für maximale Sicherheit zu jeder Zeit.','banner_image' => '1669010876_P1370111-Edit 1 1.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 05:19:47','updated_at' => '2022-11-21 06:07:56')
  );
          
          foreach ( $home_banners as $key => $name) {
            HomeBanner::create($name);
        }
    }
}
