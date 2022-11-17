<?php

namespace Database\Seeders;

use App\Models\SocialLinks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $social_links = array(
            array('category' => 'Facebook','link' => 'https://www.facebook.com/','logo' => '1668424708_facebook.svg','icon' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:18:28','updated_at' => '2022-11-14 11:18:28'),
            array('category' => 'Instagram','link' => 'https://www.instagram.com/','logo' => '1668424738_instagram.svg','icon' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:18:58','updated_at' => '2022-11-14 11:18:58'),
            array('category' => 'Xing','link' => 'https://www.xing.com/','logo' => '1668424761_xing.svg','icon' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:19:21','updated_at' => '2022-11-14 11:19:21'),
            array('category' => 'Linkedin','link' => 'https://www.linkdin.com/','logo' => '1668424814_linkedin.svg','icon' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:20:14','updated_at' => '2022-11-14 11:20:14')
          );
          foreach ( $social_links as $key => $name) {
            SocialLinks::create($name);
        }
          
    }
}
