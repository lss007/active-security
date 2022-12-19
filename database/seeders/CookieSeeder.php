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
                    array('text' => 'Custom Your experience on this site will be improved by allowing cookies.','decline' => 'Decline ','accept' => 'Accept ','status' => '1','deleted_at' => NULL,'created_at' =>  now(),'updated_at' => now())
                );
                foreach ( $cookies as $key => $val) {
                    Cookie::create($val);
                }
    }
}
