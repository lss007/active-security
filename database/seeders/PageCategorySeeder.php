<?php

namespace Database\Seeders;

use App\Models\PageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageCategorySeeder extends Seeder
{
    public function run()
    {
            $page_categories = array(
                array('page_cat_name' => ' objekt-und-werkschutz','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'centerbewachung','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'kaufhausdetektive','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'baustellenbewachung','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'opening-and-closing-service','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'revierfahrten','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'empfangsdienst','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'shop-guard','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'veranstaltungsschutz','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'unternehmen','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'Jobs','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'Kontakt','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-17 09:29:02','updated_at' => '2022-11-17 09:29:02'),
                array('page_cat_name' => 'impressum','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
                array('page_cat_name' => 'datenschutz','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
                array('page_cat_name' => 'agb','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL)
            );
          foreach ( $page_categories as $key => $name) {
            PageCategory::create($name);
        }

           

    }
}
