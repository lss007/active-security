<?php

namespace Database\Seeders;

use App\Models\ServiceLastSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceLastSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /* `active_security`.`service_last_sections` */
     $service_last_sections = array(
            array('heading' => 'in wenigen Schritten zur optimalen Sicherheit.','list1' => 'Sie fragen Ihr unverbindliches Angebot an.','list2' => 'Wir melden uns innerhalb von 24 Stunden zurück.','list3' => 'Gemeinsam finden wir die optimale Lösung für Sie.','list4' => 'Ihr Objekt oder Werksgelände ist in sicheren Händen.','button' => NULL,'link' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 08:29:43','updated_at' => '2022-11-14 08:29:43')
        );
  

          foreach ( $service_last_sections as $key => $name) {
            ServiceLastSection::create($name);
        }
    }
}
