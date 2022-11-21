<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/* `active_security`.`contact_sections` */
$contact_sections = array(
    array('heading' => 'Kontakt','title' => 'Wir melden uns innerhlab von 24h zurück.','para1' => 'Ich erkläre mich damit einverstanden, dass meine Daten zur Bearbeitung meiner Anfrage verwendet werden. Weitere Informationen und Widerrufshinweise finden Sie in unserer Datenschutzerklärung.','image' => '1669017383_P1360544-Edit 1.jpg','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-19 07:22:02','updated_at' => '2022-11-21 07:56:23')
  );
  foreach ( $contact_sections as $key => $name) {
    ContactSection::create($name);
}
  
    }
}
