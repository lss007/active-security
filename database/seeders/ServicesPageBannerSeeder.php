<?php

namespace Database\Seeders;

use App\Models\ServicesPageBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesPageBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
 /* `active_security`.`services_page_banners` */
$services_page_banners = array(
    array('page_cat_id' => '1','heading' => 'Für Sie Tag und Nacht im Einsatz','banner' => '1668495386_service-section-bg1.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 06:56:26','updated_at' => '2022-11-15 06:56:26'),
    array('page_cat_id' => '2','heading' => 'sichere Einkaufserlebnisse','banner' => '1668495411_service-section-bg2.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 06:56:51','updated_at' => '2022-11-15 06:56:51'),
    array('page_cat_id' => '3','heading' => 'reduzieren Sie Diebstähle','banner' => '1668495451_service-section-bg3.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 06:57:31','updated_at' => '2022-11-15 06:57:31'),
    array('page_cat_id' => '4','heading' => 'zum Schutz vor Diebstähle und Vandalismus','banner' => '1668495485_service-section-bg4.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 06:58:05','updated_at' => '2022-11-15 06:58:05'),
    array('page_cat_id' => '5','heading' => 'pünktlich und verlässlich','banner' => '1668495519_service-section-bg5.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 06:58:39','updated_at' => '2022-11-15 06:58:39'),
    array('page_cat_id' => '6','heading' => 'Einbruchschutz optimal ergänzen','banner' => '1668495608_service-section-bg6.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:00:08','updated_at' => '2022-11-15 07:00:08'),
    array('page_cat_id' => '7','heading' => 'wir koordinieren und entlasten','banner' => '1669017720_Group 345.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:00:52','updated_at' => '2022-11-21 08:10:06'),
    array('page_cat_id' => '8','heading' => 'Sicherheit am Eingang','banner' => '1668495695_service-section-bg8.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:01:35','updated_at' => '2022-11-15 07:01:35'),
    array('page_cat_id' => '9','heading' => 'Sicherheit bis ins kleinste Detail','banner' => '1668495719_service-section-bg9.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:01:59','updated_at' => '2022-11-15 07:01:59'),
    array('page_cat_id' => '10','heading' => 'Sicherheit aus Erfahrung','banner' => '1668495795_section-bg-1.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:03:15','updated_at' => '2022-11-15 07:03:15'),
    array('page_cat_id' => '11','heading' => 'jetzt durchstarten','banner' => '1668495822_jobs-section-bg.jpg','link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-15 07:03:42','updated_at' => '2022-11-15 07:03:42')
  );
  

          foreach ( $services_page_banners as $key => $name) {
            ServicesPageBanner::create($name);
        }
    }
}
