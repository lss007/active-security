<?php

namespace Database\Seeders;

use App\Models\PrivacyMenuTab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $privacy_menu_tabs = array(
            array('name' => 'Grundlegend','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => 'Funktionalität','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => 'Analytik','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => 'Werbung','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
          );
          foreach ($privacy_menu_tabs as $key => $name) {
            PrivacyMenuTab::create($name);
        }
    }
}
