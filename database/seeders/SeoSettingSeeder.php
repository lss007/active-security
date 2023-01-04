<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* `active_sec`.`seo_settings` */
                $seo_settings = array(
                    array('title' => 'active-sec.de | Sicherheitsdienst in Regensburg','description' => NULL,'keywords' => NULL,'author' => 'Alexander Goebel','canonical' => NULL,'robots' => NULL,'url' => NULL,'site_name' => NULL,'og_title' => 'active-sec.de | Sicherheitsdienst in Regensburg','og_description' => NULL,'og_image' => NULL,'og_image_size' => NULL,'og_image_url' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
                );
                foreach ( $seo_settings as $key => $name) {
                    SeoSetting::create($name);
                }
    }
}
