<?php

namespace Database\Seeders;

use App\Models\AllPagesBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllPagesBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/* `active_security`.`all_pages_banners` */
$all_pages_banners = array(
    array('cat_id' => '1','heading' => 'Objekt- und Werschutz','title' => 'Mit individuellem Objekt- und Werkschutz zu maximaler Sicherheit.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668428825_objekt-und-werkschutz-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:18:08','updated_at' => '2022-11-14 12:27:05'),
    array('cat_id' => '2','heading' => 'Centerbewachun','title' => 'Unsere Security Guards sorgen für sichere Einkaufserlbnisse','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1669017470_P1370661 1.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:18:53','updated_at' => '2022-11-21 07:57:50'),
    array('cat_id' => '3','heading' => 'Kaufhausdetektive','title' => 'Wir decken auf was andere nicht sehen.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491002_kaufhausdetektive-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:19:49','updated_at' => '2022-11-15 05:43:22'),
    array('cat_id' => '4','heading' => 'Baustellenbewachung','title' => 'Für die Sicherheit Ihrer Baufläche.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491041_baustellenbewachung-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:20:35','updated_at' => '2022-11-15 05:44:01'),
    array('cat_id' => '5','heading' => 'Öffnungs- und Schließdienst','title' => 'Ein Plus für mehr Sicherheit.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491088_s5-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:22:03','updated_at' => '2022-11-15 05:44:48'),
    array('cat_id' => '6','heading' => 'Revierfahrten','title' => 'Effektiver Schutz für Ihr Unternehmen.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491124_revierfahrten-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:23:24','updated_at' => '2022-11-15 05:45:24'),
    array('cat_id' => '7','heading' => 'Empfangsdienst','title' => 'Reibungslose Abläufe mit userem Empfangspersonal.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1669017656_Banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:24:35','updated_at' => '2022-11-21 08:00:56'),
    array('cat_id' => '8','heading' => 'Shop Guard','title' => 'Ein sicheres Gefühl für Sie und Ihre Kunden im Eingangsbereich.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491211_shop-guard-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:26:04','updated_at' => '2022-11-15 05:46:51'),
    array('cat_id' => '9','heading' => 'Veranstaltungsschutz','title' => 'Mit unserem Veranstaltungsschutz zum sicheren Event.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491248_veranstaltungsschutz-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:27:21','updated_at' => '2022-11-15 05:47:28'),
    array('cat_id' => '10','heading' => 'Da bin ich mir sicher','title' => 'Sicherheit, auf die Sie sich verlassen können.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668491286_banner-img-2.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:28:22','updated_at' => '2022-11-15 05:48:06'),
    array('cat_id' => '11','heading' => 'Jobs','title' => 'Werden Sie Teil unseres Security Teams.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668510249_job-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:29:26','updated_at' => '2022-11-15 11:04:09'),
    array('cat_id' => '12','heading' => 'Kontakt','title' => 'Wir sind gerne für Sie da.','subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1668510293_contact-banner.jpg','side_img' => NULL,'button_text' => NULL,'button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 07:30:14','updated_at' => '2022-11-15 11:04:53'),
    array('cat_id' => '13','heading' => 'Impressum','title' => NULL,'subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1671100843_ad_desk.png','tablet_banner' => '1671100843_ad_tab.png','mobile_banner' => '1671100843_ad_mob.png','side_img' => NULL,'button_text' => '','button_link' => '','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('cat_id' => '14','heading' => 'Datenschutz','title' => NULL,'subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1671100767_ad_desk.png','tablet_banner' => '1671100767_ad_tab.png','mobile_banner' => '1671100767_ad_mob.png','side_img' => NULL,'button_text' => '','button_link' => '','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('cat_id' => '15','heading' => 'Allgemeine Geschäftsbedingungen','title' => NULL,'subtitle' => NULL,'banner_paragaph' => NULL,'banner_image' => '1671100883_ad_desk.png','tablet_banner' => '1671100883_ad_tab.png','mobile_banner' => '1671100883_ad_mob.png','side_img' => NULL,'button_text' => '','button_link' => '','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
  );
  

          foreach ( $all_pages_banners as $key => $name) {
            AllPagesBanner::create($name);
        }
    }
}
