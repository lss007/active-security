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
      /* `active_security`.`home_section_ones` */

  
  $home_section_ones = array(
    array('heading' => ' active secuirty','sub_heading' => 'Zertifiziert. Zuverlässig. Professionell.','paragraph' => 'Wir sind Experten auf unserem Gebiet: Mit langjähriger Erfahrung im Sicherheitsdienst setzen wir unsere Fachkompetenz für Sie ein. Wir sorgen diskret und zuverlässig für den Schutz Ihres Unternehmens.','main_image' => '639803e59e8b2.png','tablet_img' => '1670906853_ad_.png','mobile_img' => '1670906929ad_mob.png','logo1' => '1671186729_upDekra-1.svg','logo2' => '1671186799_upDekra-2.svg','logo3' => '1670908216_upBDSW.png','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
  );
          foreach ( $home_section_ones as $key => $name) {
            HomeSectionOne::create($name);
        }
    }
}
