<?php

namespace Database\Seeders;

use App\Models\HomeSectionFive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionFiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $home_section_fives = array(
            array('heading' => 'Sicherheit beginnt mit der Analyse','title' => 'Individuell zusammengestellte Maßnahmen.','para1' => 'active security betreut Sie bei der Analyse bestehender Sicherheitsrisiken und entwickelt ein individuell auf Sie abgestimmtes Sicherheitskonzept, das im Anschluss von unseren Mitarbeitern vor Ort professionell umgesetzt wird.','para2' => 'Wir beraten Sie unverbindlich, kostenlos und diskret – fordern Sie jetzt Ihr individuelles Erstgespräch an und setzen Sie gemeinsam mit uns neue Standards für Ihre Sicherheit!','image' => '1668422615_img-3.jpg','button_name' => 'Gleich beraten lassen','button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:43:35','updated_at' => '2022-11-14 10:43:35')
          );

          foreach ( $home_section_fives as $key => $name) {
            HomeSectionFive::create($name);
        }
    }
}
