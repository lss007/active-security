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
            array('telefon' => '09401 918 77 32','fax' => '0941 99 22 65 99','email' => 'kontakt@active-sec.de','address' => 'Galgenbergstraße 12a 93053 Regensburg','logo' => '1668423461_footer-logo.svg','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-14 10:57:41','updated_at' => '2022-11-14 10:57:41')
          );
          foreach ( $footer_contact_addresses as $key => $name) {
            FooterContactAddress::create($name);
        }
    }
}
