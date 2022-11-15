<?php

namespace Database\Seeders;

use App\Models\HomeSectionTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $home_section_twos = array(
            array('heading' => 'Sicherheit beginnt mit uns.','title' => 'Alle Sicherheitsdienstleistungen aus einer Hand.','para1' => 'active security ist Ihr Sicherheitsdienst für ein rundum gutes Gefühl. Wir wollen, dass Sie sich durch unsere Security Services bestens geschützt und sicher fühlen. Deswegen legen wir größten Wert auf die professionelle Ausbildung unserer Sicherheitsmitarbeiter.','para2' => 'Unsere Security Guards zeichnen sich durch mehrjährige Berufserfahrung aus und sind auf einzelne Bereiche unserer Sicherheitsdienst-Leistungen spezialisiert. Durch diese Expertise erfüllen sie einzeln oder im Team alle gewünschten Anforderungen für Ihre Sicherheit - passgenau, zuverlässig und effizient.','image' => '1668419541_img-2.jpg','button_name' => 'Über uns','button_link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 09:52:21','updated_at' => '2022-11-14 09:52:21')
          );
          foreach ( $home_section_twos as $key => $name) {
            HomeSectionTwo::create($name);
        }
    }
}
