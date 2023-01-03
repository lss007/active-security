<?php

namespace Database\Seeders;

use App\Models\HashTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HashTagSeeder extends Seeder
{

    public function run()
    {
       /* `testing`.`hash_tags` */
            $hash_tags = array(
                array('page_id' => '4','section_id' => '1','tag_name' => 1,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:22:20','updated_at' => '2022-12-28 08:22:20'),
                array('page_id' => '4','section_id' => '2','tag_name' => 2,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:22:20','updated_at' => '2022-12-28 08:22:20'),
                array('page_id' => '4','section_id' => '3','tag_name' => 3,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:22:20','updated_at' => '2022-12-28 08:22:20'),
                array('page_id' => '4','section_id' => '4','tag_name' => 4,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:22:20','updated_at' => '2022-12-28 08:22:20'),
                array('page_id' => '4','section_id' => '5','tag_name' => 5,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:22:20','updated_at' => '2022-12-28 08:22:20'),
                array('page_id' => '5','section_id' => '1','tag_name' => 6,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '2','tag_name' => 7,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '3','tag_name' => 8,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '4','tag_name' => 9,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '5','tag_name' => 10,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '6','tag_name' => 11,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '7','tag_name' => 12,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '8','tag_name' => 13,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '5','section_id' => '9','tag_name' => 14,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:18','updated_at' => '2022-12-28 08:29:18'),
                array('page_id' => '1','section_id' => '1','tag_name' => 15,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:39','updated_at' => '2022-12-28 08:29:39'),
                array('page_id' => '1','section_id' => '2','tag_name' => 16,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:39','updated_at' => '2022-12-28 08:29:39'),
                array('page_id' => '1','section_id' => '3','tag_name' => 17,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:39','updated_at' => '2022-12-28 08:29:39'),
                array('page_id' => '1','section_id' => '4','tag_name' => 18,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:39','updated_at' => '2022-12-28 08:29:39'),
                array('page_id' => '2','section_id' => '1','tag_name' => 19,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:54','updated_at' => '2022-12-28 08:29:54'),
                array('page_id' => '2','section_id' => '2','tag_name' => 20,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:29:54','updated_at' => '2022-12-28 08:29:54'),
                array('page_id' => '3','section_id' => '1','tag_name' => 21,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:30:08','updated_at' => '2022-12-28 08:30:08'),
                array('page_id' => '3','section_id' => '2','tag_name' => 22,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:30:08','updated_at' => '2022-12-28 08:30:08'),
                array('page_id' => '12','section_id' => '1','tag_name' => 23,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:30:08','updated_at' => '2022-12-28 08:30:08'),
                array('page_id' => '12','section_id' => '2','tag_name' => 24,'route_link' => NULL,'ordering' => '0','status' => '1','deleted_at' => NULL,'created_at' => '2022-12-28 08:30:08','updated_at' => '2022-12-28 08:30:08')
            
            
            );
  
           
          foreach ( $hash_tags as $key => $name) {
            HashTag::create($name);
        }
    }
}
