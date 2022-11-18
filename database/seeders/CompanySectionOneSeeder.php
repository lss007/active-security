<?php

namespace Database\Seeders;

use App\Models\CompanySectionOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySectionOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $company_section_ones = array(
            array('heading' => 'active secuirty','title' => 'Ihr Sicherheitsdienst aus Regensburg.','para1' => 'Wir sind seit 2015 als Sicherheitsunternehmen für Gewerbe- und Privatkunden tätig und haben uns bayernweit etabliert. active security ist DEKRA-zertifiziert (nach DIN 77200 und ISO 9001) und wir sorgen durch jährliche Audits für die Einhaltung unserer Standards. Mit unserem Security-Team übernehmen wir Aufträge für mittelständische Betriebe und Großunternehmen.','title2' => 'Absolute Sicherheit für Kunden und Mitarbeiter.','para2' => 'Als Sicherheitsunternehmen achten wir auf faire und sichere Arbeitsbedingungen, denn wir sind davon überzeugt, dass dies auch Ihnen als Kunden zugutekommt. Wir sind Mitglied im BDSW und sind somit tarifgebunden, wovon unsere Mitarbeiter profitieren. Im Bereich Arbeitsschutz arbeiten wir eng mit der VBG zusammen und haben zudem eine Fachkraft für Arbeitssicherheit in unserem Team.','para3' => 'Wir sind ein von der IHK anerkannter Ausbildungsbetrieb und sorgen durch unsere mehrjährige Erfahrung für eine fundierte Berufsausbildung unserer Azubis. Auch unsere Sicherheitsmitarbeiter sind bestens ausgebildet – vom Shopguard bis zur Werkschutzfachkraft. Mit regelmäßigen Weiterbildungen und Schulungen sorgen wir dafür, dass sie immer auf dem aktuellen Stand sind und den Umgang mit neuesten Sicherheitssystemen bestens beherrschen.','para4' => 'Die Zertifizierung nach DIN 77200 bestätigt neben der Leistungsfähigkeit auch die Qualität unserer Dienstleistungen objektiv. Das bedeutet konkret: Sie können sich zu jeder Zeit sicher sein, dass Ihre Objekte, Gewerbeflächen und Kunden bei uns in den besten Händen sind – und sich mit einem guten Gefühl auf uns verlassen.','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:44:36','updated_at' => '2022-11-18 04:19:53')
          );
          
          foreach ( $company_section_ones as $key => $name) {
            CompanySectionOne::create($name);
        }
    }
}
