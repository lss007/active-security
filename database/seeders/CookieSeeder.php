<?php

namespace Database\Seeders;

use App\Models\Cookie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CookieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* `active`.`cookies` */
     $cookies = array(
     array('text' => 'Diese Website verwendet Cookies. Durch die Nutzung dieser Webseite erklären Sie sich damit einverstanden, dass Cookies gesetzt werden.','decline' => 'Nur Grundlegende ','accept' => 'Alle Akzeptieren ','status' => '1','deleted_at' => NULL,'created_at' =>  now(),'updated_at' => now())
                );
                foreach ( $cookies as $key => $val) {
                    Cookie::create($val);
                }
    }
}
