<?php

namespace Database\Seeders;

use App\Models\HomeSectionSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
/* `active_security`.`home_section_sliders` */
$home_section_sliders = array(
    array('title' => 'Objekt- und Werkschutz','description' => 'Individuell aufeinander abgestimmte Maßnahmen, sichern Ihre gewerblichen Gebäude und Werksgelände.','image' => '1671428913_up_desk.png','tablet_img' => '1671428913_up_tab.png','mobile_img' => '1671428913_up_mob.png','button_text' => 'mehr erfahren','link' => 'ObjektPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Centerbewachung','description' => 'Sichere Einkaufserlebnisse mit unseren Security Guards.','image' => '1671428949_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'CenterbewachungPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Kaufhausdetektive','description' => 'it unseren Kaufhausdetektiven reduzieren Sie Straftaten und Diebstähle nachhaltig und effektiv.','image' => '1671428970_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'KaufhausdetektivePage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Baustellenbewachung','description' => 'Zuverlässige Baustellenbewachung zum Schutz vor Diebstahl und Vandalismus','image' => '1671428989_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'baustellenbewachungPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Öffnungs- und Schließdienst','description' => 'Ein Plus an Sicherheit für Unternehmen und Privat','image' => '1671429010_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'openingAndclosingPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Revierkontrollen','description' => 'Mit active security den Einbruchschutz optimal ergänzen','image' => '1671429033_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'revierfahrtenPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Empfangsdienst','description' => 'Unser Empfangsdienst koordiniert und entlastet mit Sicherheit','image' => '1671429048_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'empfangsdienst','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Shop Guard','description' => 'Unsere Security Guards sorgen für einen sicheren Eingangsbereich.','image' => '1671429065_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'ShopGuardPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'Veranstaltungsschutz','description' => 'Mit Sicherheit zu einer erfolgreichen Veranstaltung.','image' => '1671429085_up_desk.png','tablet_img' => NULL,'mobile_img' => NULL,'button_text' => 'mehr erfahren','link' => 'VeranstaltungsSchutzPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' =>now()),
    array('title' => 'demo','description' => 'demo','image' => '1671431617_ad_desk.png','tablet_img' => '1671431617_tab.png','mobile_img' => '1671431617_mob.png','button_text' => 'demo','link' => 'AgbPage','custom_Link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
    array('title' => 'test','description' => 'test','image' => '1671431807_ad_desk.png','tablet_img' => '1671431807ad_tab.png','mobile_img' => '1671431807ad_mob.png','button_text' => 'test','link' => NULL,'custom_Link' => 'https://www.example123.com/','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
  );
  
         
          foreach ( $home_section_sliders as $key => $slider) {
            HomeSectionSlider::create($slider);
        }

    }
}
