<?php

namespace Database\Seeders;

use App\Models\HomeSectionOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $home_section_ones = array(
            array('heading' => ' active secuirty','sub_heading' => 'Zertifiziert. Zuverlässig. Professionell.','paragraph' => 'Wir sind Experten auf unserem Gebiet: Mit langjähriger Erfahrung im Sicherheitsdienst setzen wir unsere Fachkompetenz für Sie ein. Wir sorgen diskret und zuverlässig für den Schutz Ihres Unternehmens.','main_image' => '1668418272_img-1.jpg','logo1' => '1668418272_dekra-1.svg','logo2' => '1668418272_dekra-2.svg','logo3' => '1668418272_bdsw.svg','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 09:31:12','updated_at' => '2022-11-14 09:31:12')
          );

          foreach ( $home_section_ones as $key => $name) {
            HomeSectionOne::create($name);
        }
    }
}
