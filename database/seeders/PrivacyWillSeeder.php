<?php

namespace Database\Seeders;

use App\Models\PrivacyWill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyWillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $privacy_wills = array(
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Merken Sie sich Ihre Cookie-Berechtigungseinstellung','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Session-Cookies zulassen','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Sammeln Sie Informationen, die Sie in Kontaktformulare, Newsletter und andere Formulare auf allen Seiten eingeben','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '2','cat_id' => '2','list' => 'Funktionalität: Merken Sie sich die Einstellungen für soziale Medien','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '2','cat_id' => '2','list' => 'Funktionalität: Merken Sie sich die ausgewählte Region und das Land','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Analytik: Verfolgen Sie Ihre besuchten Seiten und Interaktion ','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Analytik: Verfolgen Sie anhand Ihrer IP-Nummer den Standort und die Region','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Analytik: Verfolgen Sie die Zeit auf jeder Seite','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Advertising: Use information for tailored advertising with third parties','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Advertising: Allows you to connect to social websites','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Advertising: Identify the device you are using','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '3','cat_id' => '2','list' => 'Advertising: Collect personally identifiable information such as name and location','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '4','cat_id' => '2','list' => 'Werbung: Verwenden Sie Informationen für maßgeschneiderte Werbung mit Dritten','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '4','cat_id' => '2','list' => 'Werbung: Ermöglicht Ihnen, eine Verbindung zu sozialen Websites herzustellen','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '4','cat_id' => '2','list' => 'Werbung: Identifizieren Sie das Gerät, das Sie verwenden','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '4','cat_id' => '2','list' => 'Werbung: Sammeln Sie persönlich identifizierbare Informationen wie Name und Ort','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Verfolgen Sie, was Sie im Einkaufswagen eingeben','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Authentifizieren Sie, dass Sie in Ihrem Benutzerkonto angemeldet sind','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('tab_id' => '1','cat_id' => '1','list' => 'Grundlegend: Merken Sie sich die von Ihnen gewählte Sprachversion','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
          );
          foreach ( $privacy_wills as $key => $name) {
            PrivacyWill::create($name);
        }
    }
}
