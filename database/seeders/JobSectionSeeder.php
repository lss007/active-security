<?php

namespace Database\Seeders;

use App\Models\JobSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
   /* `active_security`.`job_sections` */
$job_sections = array(
    array('heading' => 'Jobs bei active security','title' => 'Mit Sicherheit Karriere machen.','para1' => 'Als engagierter Sicherheitsdienst sind wir immer auf der Suche nach motivierten Mitarbeitern, die sich gemeinsam mit uns für den Schutz unserer Kunden einsetzen. Wir legen Wert auf eine qualifizierte Ausbildung, echten Teamgeist und Einsatzwillen. Dafür bieten wir Ihnen umfassende Weiterbildungsmöglichkeiten, eine faire Bezahlung und jede Menge Raum, sich und Ihr Know-How aktiv mit einzubringen.','title2' => 'Werden Sie Teil unseres Security Teams.','para2' => 'Als etabliertes Sicherheitsunternehmen sind wir bayernweit für unsere Kunden tätig. Viele von ihnen sind langjährige Partner und schätzen unser diskretes und professionelles Auftreten. Wenn Sie nach einer Karrieremöglichkeit suchen, bei der Sie aktiv Verantwortung übernehmen und in einem angenehmen Arbeitsklima im Team arbeiten können, freuen wir uns darauf, Sie kennenzulernen!','button_name' => 'Hier gehts zur Express-Bewerbung','link' => NULL,'image' => '1670833563_up_desk.png','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 11:39:36','updated_at' => '2022-11-21 08:25:09')
  );
          foreach ( $job_sections as $key => $name) {
            JobSection::create($name);
        }
    }
}
