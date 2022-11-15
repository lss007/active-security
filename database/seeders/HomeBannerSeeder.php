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
        //
        $home_banners = array(
            array('heading' => 'Mit uns können Sie sicher sein.','title' => 'Ihr Sicherheitsdienst aus Regensburg','banner_paragaph' => 'Maßgeschneiderte Sicherheitskonzepte, auf Ihren Bedarf abgestimmt. Für maximale Sicherheit zu jeder Zeit.','banner_image' => '1668418084_home-banner-bg.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 05:19:47','updated_at' => '2022-11-14 09:28:04')
          );
          foreach ( $home_banners as $key => $name) {
            HomeBanner::create($name);
        }
    }
}
