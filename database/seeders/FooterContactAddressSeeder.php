<?php

namespace Database\Seeders;

use App\Models\FooterContactAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterContactAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $footer_contact_addresses = array(
            array('name' => 'Alexander Goebel','vatid' => 'DE317415344','telefon' => '09401 918 77 32','fax' => '0941 99 22 65 99','email' => 'kontakt@active-sec.de','address' => 'Galgenbergstrasse 12a 93053 Regensburg','logo' => '1668849278_footer-logo.svg','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-19 09:14:38','updated_at' => '2022-11-19 09:22:38')
          );
          
          foreach ( $footer_contact_addresses as $key => $name) {
            FooterContactAddress::create($name);
        }
    }
}
