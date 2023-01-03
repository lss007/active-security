<?php

namespace Database\Seeders;

use App\Models\PrivacySetting;
use App\Models\PrivacySettingTab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


/* `active_security`.`privacy_settings` */
$privacy_settings = array(
  array('paragraph' => 'Entscheiden Sie, welche Cookies Sie zulassen möchten. Sie können diese Einstellungen jederzeit ändern. Dies kann jedoch dazu führen, dass einige Funktionen nicht mehr verfügbar sind. Informationen zum Löschen der Cookies finden Sie in der Hilfe Ihres Browsers. Erfahren Sie mehr über die von uns verwendeten Cookies.','title' => 'Mit dem Schieberegler können Sie verschiedene Arten von Cookies aktivieren oder deaktivieren:','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-16 11:33:39','updated_at' => '2022-11-16 12:04:20')
);

  
  foreach ( $privacy_settings as $key => $name) {
    PrivacySetting::create($name);
}
  /* `active_security`.`privacy_setting_tabs` */

    }
}
