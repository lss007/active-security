<?php

namespace Database\Seeders;

use App\Models\companySectionTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySectionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $company_section_twos = array(
            array('section_id' => '2','name' => 'Alexander Göbel','email' => 'a.gobel@active-sec.de','position' => 'Inhaber','department' => 'Geprüfter Wirtschaftsfachwirt (IHK)','profile_img' => '1668426492_m-img-1.jpg','heading' => 'Sicherheit beginnt...','title' => 'Vertrauen erfahren. Sicherheit geben.','para1' => 'Alexander Göbel ist Wirtschaftsfachwirt und hat langjährige Erfahrung im Sicherheitsdienst. Er hält zudem den Sachkundenachweis gem. § 34a und weiß daher ganz genau, worauf es bei wirkungsvollen Sicherheitskonzepten ankommt. Er ist innovativer Ideengeber und bezieht Kunden und Mitarbeiter in Entscheidungsprozesse ein, ohne dabei den Fokus auf Kontinuität und Qualität zu verlieren.','para2' => 'Auch nachhaltiges Handeln ist für ihn von großer Bedeutung. active security arbeitet daher entsprechend einer Nachhaltigkeitsstrategie, in deren Mittelpunkt vor allem ethisches Verhalten und die soziale Verantwortung gegenüber Kunden und Mitarbeitern stehen.','para3' => 'Die Zufriedenheit unserer Kunden und Mitarbeiter ist der Ausgangspunkt und Antrieb unseres Handelns. Wir setzen auf Bewährtes und Verlässliches, um auch zukünftige Herausforderungen in der Sicherheitsbranche erfolgreich zu meistern und arbeiten stets professionell und auf Augenhöhe mit unseren Partnern zusammen. Ihr Vertrauen in uns steht für mich an erster Stelle - und dafür bin ich täglich gerne im Einsatz.','para4' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:48:12','updated_at' => '2022-11-14 11:48:12'),
            array('section_id' => '3','name' => 'Markus Schmiedefeld','email' => 'm.schmiedefeld@active-sec.de','position' => 'Bereichsleitung','department' => 'Geprüfte Schutz- und Sicherheitskraft (IHK)','profile_img' => '1668426561_m-img-2.jpg','heading' => '...mit uns','title' => 'Auf jeden einzelnen kommt es an.','para1' => 'Als IHK-geprüfte Schutz- und Sicherheitskraft und Personenschützer ist Markus Schmiedefeld bereits 10 Jahre im Sicherheitsdienst aktiv. Bei active security ist Herr Schmiedefeld als Bereichsleitung für das Controlling der Prozesse zuständig - und übermittelt die Anforderungen und Wünsche unserer Kunden an unsere Objektleiter und Sicherheitsmitarbeiter vor Ort.','para2' => 'Als Schnittstelle unseres Teams achte ich darauf, dass alle Prozesse intern und extern optimal ablaufen. Dabei ist es mir besonders wichtig, dass sich von unseren Kunden bis zu unseren Mitarbeitern alle gut bei uns aufgehoben fühlen. Das schließt mit ein, dass ich immer erreichbar bin und auch in herausfordernden Situationen einen kühlen Kopf bewahre und lösungsorientiert denke.','para3' => NULL,'para4' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:49:21','updated_at' => '2022-11-14 11:49:21')
          );

          foreach ( $company_section_twos as $key => $name) {
            companySectionTwo::create($name);
        }
    }
}
