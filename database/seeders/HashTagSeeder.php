<?php

namespace Database\Seeders;

use App\Models\HashTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HashTagSeeder extends Seeder
{

    public function run()
    {
        $hash_tags = array(
            array('page_id' => '16','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:14:04','updated_at' => '2022-12-28 10:14:04'),
            array('page_id' => '16','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:14:04','updated_at' => '2022-12-28 10:14:04'),
            array('page_id' => '16','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:14:04','updated_at' => '2022-12-28 10:14:04'),
            array('page_id' => '16','section_id' => '4','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:14:04','updated_at' => '2022-12-28 10:14:04'),
            array('page_id' => '16','section_id' => '5','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:14:04','updated_at' => '2022-12-28 10:14:04'),
            array('page_id' => '4','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:29','updated_at' => '2022-12-28 10:22:29'),
            array('page_id' => '4','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:29','updated_at' => '2022-12-28 10:22:29'),
            array('page_id' => '4','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:29','updated_at' => '2022-12-28 10:22:29'),
            array('page_id' => '2','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:43','updated_at' => '2022-12-28 10:22:43'),
            array('page_id' => '2','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:43','updated_at' => '2022-12-28 10:22:43'),
            array('page_id' => '2','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:43','updated_at' => '2022-12-28 10:22:43'),
            array('page_id' => '7','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:53','updated_at' => '2022-12-28 10:22:53'),
            array('page_id' => '7','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:53','updated_at' => '2022-12-28 10:22:53'),
            array('page_id' => '7','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:22:53','updated_at' => '2022-12-28 10:22:53'),
            array('page_id' => '11','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:00','updated_at' => '2022-12-28 10:24:00'),
            array('page_id' => '11','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:00','updated_at' => '2022-12-28 10:24:00'),
            array('page_id' => '3','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:35','updated_at' => '2022-12-28 10:24:35'),
            array('page_id' => '3','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:35','updated_at' => '2022-12-28 10:24:35'),
            array('page_id' => '3','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:35','updated_at' => '2022-12-28 10:24:35'),
            array('page_id' => '1','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:53','updated_at' => '2022-12-28 10:24:53'),
            array('page_id' => '1','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:53','updated_at' => '2022-12-28 10:24:53'),
            array('page_id' => '1','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:24:53','updated_at' => '2022-12-28 10:24:53'),
            array('page_id' => '5','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:02','updated_at' => '2022-12-28 10:25:02'),
            array('page_id' => '5','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:02','updated_at' => '2022-12-28 10:25:02'),
            array('page_id' => '5','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:02','updated_at' => '2022-12-28 10:25:02'),
            array('page_id' => '6','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:16','updated_at' => '2022-12-28 10:25:16'),
            array('page_id' => '6','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:16','updated_at' => '2022-12-28 10:25:16'),
            array('page_id' => '6','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:16','updated_at' => '2022-12-28 10:25:16'),
            array('page_id' => '8','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:26','updated_at' => '2022-12-28 10:25:26'),
            array('page_id' => '8','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:26','updated_at' => '2022-12-28 10:25:26'),
            array('page_id' => '8','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:25:26','updated_at' => '2022-12-28 10:25:26'),
            array('page_id' => '10','section_id' => '1','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:26:09','updated_at' => '2022-12-28 10:26:09'),
            array('page_id' => '10','section_id' => '2','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:26:09','updated_at' => '2022-12-28 10:26:09'),
            array('page_id' => '10','section_id' => '3','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:26:09','updated_at' => '2022-12-28 10:26:09'),
            array('page_id' => '10','section_id' => '4','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:26:09','updated_at' => '2022-12-28 10:26:09'),
            array('page_id' => '10','section_id' => '5','tag_name' => NULL,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 10:26:09','updated_at' => '2022-12-28 10:26:09')
          );
           
          foreach ( $hash_tags as $key => $name) {
            HashTag::create($name);
        }
    }
}
