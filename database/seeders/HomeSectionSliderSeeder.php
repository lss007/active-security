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
    array('title' => 'Objekt- und Werkschutz','description' => 'Individuell aufeinander abgestimmte Maßnahmen, sichern Ihre gewerblichen Gebäude und Werksgelände.','image' => '1668420859_s1-img-1.jpg','button_text' => 'mehr erfahren','link' => 'ObjektPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:32:42'),
    array('title' => 'Centerbewachung','description' => 'Sichere Einkaufserlebnisse mit unseren Security Guards.','image' => '1669018587_cent.jpg','button_text' => 'mehr erfahren','link' => 'CenterbewachungPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-21 08:16:27'),
    array('title' => 'Kaufhausdetektive','description' => 'it unseren Kaufhausdetektiven reduzieren Sie Straftaten und Diebstähle nachhaltig und effektiv.','image' => '1668421698_s-img-3.jpg','button_text' => 'mehr erfahren','link' => 'KaufhausdetektivePage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:28:18'),
    array('title' => 'Baustellenbewachung','description' => 'Zuverlässige Baustellenbewachung zum Schutz vor Diebstahl und Vandalismus','image' => '1668421743_s-img-4.jpg','button_text' => 'mehr erfahren','link' => 'baustellenbewachungPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:29:03'),
    array('title' => 'Öffnungs- und Schließdienst','description' => 'Ein Plus an Sicherheit für Unternehmen und Privat','image' => '1668421781_s-img-5.jpg','button_text' => 'mehr erfahren','link' => 'openingAndclosingPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:29:41'),
    array('title' => 'Revierkontrollen','description' => 'Mit active security den Einbruchschutz optimal ergänzen','image' => '1668421820_s-img-6.jpg','button_text' => 'mehr erfahren','link' => 'revierfahrtenPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:30:20'),
    array('title' => 'Empfangsdienst','description' => 'Unser Empfangsdienst koordiniert und entlastet mit Sicherheit','image' => '1669018426_P1370162-Edit 1.jpg','button_text' => 'mehr erfahren','link' => 'empfangsdienst','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-21 08:13:46'),
    array('title' => 'Shop Guard','description' => 'Unsere Security Guards sorgen für einen sicheren Eingangsbereich.','image' => '1668421883_s8-img-1.jpg','button_text' => 'mehr erfahren','link' => 'ShopGuardPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:31:23'),
    array('title' => 'Veranstaltungsschutz','description' => 'Mit Sicherheit zu einer erfolgreichen Veranstaltung.','image' => '1668421906_s9-img-1.jpg','button_text' => 'mehr erfahren','link' => 'VeranstaltungsSchutzPage','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:13:49','updated_at' => '2022-11-14 10:31:46')
  );
  
         
          foreach ( $home_section_sliders as $key => $slider) {
            HomeSectionSlider::create($slider);
        }

    }
}
