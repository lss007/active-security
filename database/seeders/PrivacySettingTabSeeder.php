<?php

namespace Database\Seeders;

use App\Models\PrivacySettingTab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacySettingTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $privacy_setting_tabs = array(
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Merken Sie sich Ihre Cookie-Berechtigungseinstellung','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:42:50','updated_at' => '2022-11-16 11:42:50'),
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Session-Cookies zulassen','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:52:57','updated_at' => '2022-11-16 11:52:57'),
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Sammeln Sie Informationen, die Sie in Kontaktformulare, Newsletter und andere Formulare auf allen Seiten eingeben','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:53:11','updated_at' => '2022-11-16 11:53:11'),
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Verfolgen Sie, was Sie im Einkaufswagen eingeben','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:53:24','updated_at' => '2022-11-16 11:53:24'),
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Authentifizieren Sie, dass Sie in Ihrem Benutzerkonto angemeldet sind','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:53:38','updated_at' => '2022-11-16 11:53:38'),
            array('tabs' => '1','cat' => '1','list' => 'Grundlegend: Merken Sie sich die von Ihnen gewählte Sprachversion','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:53:51','updated_at' => '2022-11-16 11:53:51'),
            array('tabs' => '1','cat' => '2','list' => 'Funktionalität: Merken Sie sich die Einstellungen für soziale Medien','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:54:14','updated_at' => '2022-11-16 11:54:14'),
            array('tabs' => '1','cat' => '2','list' => 'Funktionalität: Merken Sie sich die ausgewählte Region und das Land','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:54:32','updated_at' => '2022-11-16 11:54:32'),
            array('tabs' => '1','cat' => '2','list' => 'Analytik: Verfolgen Sie Ihre besuchten Seiten und Interaktion','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:55:04','updated_at' => '2022-11-16 11:55:04'),
            array('tabs' => '1','cat' => '2','list' => 'Analytik: Verfolgen Sie anhand Ihrer IP-Nummer den Standort und die Region','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:55:16','updated_at' => '2022-11-16 11:55:16'),
            array('tabs' => '1','cat' => '2','list' => 'Analytik: Verfolgen Sie die Zeit auf jeder Seite','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:55:29','updated_at' => '2022-11-16 11:55:29'),
            array('tabs' => '1','cat' => '2','list' => 'Werbung: Verwenden Sie Informationen für maßgeschneiderte Werbung mit Dritten','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:55:45','updated_at' => '2022-11-16 11:55:45'),
            array('tabs' => '1','cat' => '2','list' => 'Werbung: Ermöglicht Ihnen, eine Verbindung zu sozialen Websites herzustellen','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:55:59','updated_at' => '2022-11-16 11:55:59'),
            array('tabs' => '1','cat' => '2','list' => 'Werbung: Identifizieren Sie das Gerät, das Sie verwenden','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:56:11','updated_at' => '2022-11-16 11:56:11'),
            array('tabs' => '1','cat' => '2','list' => 'Werbung: Sammeln Sie persönlich identifizierbare Informationen wie Name und Ort','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:56:24','updated_at' => '2022-11-16 11:56:24')
          );
          foreach ($privacy_setting_tabs as $key => $val) {
            PrivacySettingTab::create($val);
        }
    }
}
