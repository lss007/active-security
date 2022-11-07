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
      
        $home_section_sliders = [
        ['title' => 'Objekt- und Werkschutz','description' => 'Individuell aufeinander abgestimmte Maßnahmen, sichern Ihre gewerblichen Gebäude und Werksgelände.','image' => '1667799431_img-1.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Centerbewachung','description' => 'Sichere Einkaufserlebnisse mit unseren Security Guards.','image' => '1667800794_s-img-2.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Kaufhausdetektive','description' => 'it unseren Kaufhausdetektiven reduzieren Sie Straftaten und Diebstähle nachhaltig und effektiv.','image' => '1667805487_s3-img-1.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Baustellenbewachung','description' => 'Zuverlässige Baustellenbewachung zum Schutz vor Diebstahl und Vandalismus','image' => '1667805568_s-img-4.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Öffnungs- und Schließdienst','description' => 'Ein Plus an Sicherheit für Unternehmen und Privat','image' => '1667805652_s-img-5.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Revierkontrollen','description' => 'Mit active security den Einbruchschutz optimal ergänzen','image' => '1667805724_s-img-6.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Empfangsdienst','description' => 'Unser Empfangsdienst koordiniert und entlastet mit Sicherheit','image' => '1667805795_s-img-7.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Shop Guard','description' => 'Unsere Security Guards sorgen für einen sicheren Eingangsbereich.','image' => '1667805891_s-img-8.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Veranstaltungsschutz','description' => 'Mit Sicherheit zu einer erfolgreichen Veranstaltung.','image' => '1667805951_s-img-9.jpg','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1']
    ];
         
          foreach ( $home_section_sliders as $key => $slider) {
            HomeSectionSlider::create($slider);
        }

    }
}
