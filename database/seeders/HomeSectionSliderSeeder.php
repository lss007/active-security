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
        ['title' => 'Objekt- und Werkschutz','description' => 'Individuell aufeinander abgestimmte Maßnahmen, sichern Ihre gewerblichen Gebäude und Werksgelände.','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Centerbewachung','description' => 'Sichere Einkaufserlebnisse mit unseren Security Guards.','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Kaufhausdetektive','description' => 'it unseren Kaufhausdetektiven reduzieren Sie Straftaten und Diebstähle nachhaltig und effektiv.','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Baustellenbewachung','description' => 'Zuverlässige Baustellenbewachung zum Schutz vor Diebstahl und Vandalismus','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Öffnungs- und Schließdienst','description' => 'Ein Plus an Sicherheit für Unternehmen und Privat','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Revierkontrollen','description' => 'Mit active security den Einbruchschutz optimal ergänzen','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Empfangsdienst','description' => 'Unser Empfangsdienst koordiniert und entlastet mit Sicherheit','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Shop Guard','description' => 'Unsere Security Guards sorgen für einen sicheren Eingangsbereich.','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1'],
        ['title' => 'Veranstaltungsschutz','description' => 'Mit Sicherheit zu einer erfolgreichen Veranstaltung.','button_text' => 'mehr erfahren','link' => 'https://www.example.com/','status' => '1']
    ];
         
          foreach ( $home_section_sliders as $key => $slider) {
            HomeSectionSlider::create($slider);
        }

    }
}
