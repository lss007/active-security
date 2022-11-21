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

  /* `active_security`.`footer_contact_addresses` */
$footer_contact_addresses = array(
    array('name' => 'Alexander Goebel','vatid' => 'DE317415344','telefon' => '09401 918 77 32','fax' => '0941 99 22 65 99','email' => 'kontakt@active-sec.de','address' => 'Galgenbergstrasse 12a 93053 Regensburg','logo' => '1669017018_footer-logo.svg','call_to' => '+4994019187732','mail_to' => 'kontakt@active-sec.de','Whatsapp_to' => 'test','status' => '1','deleted_at' => NULL,'created_at' => '2022-11-21 07:50:18','updated_at' => '2022-11-21 07:51:12')
  );
          foreach ( $footer_contact_addresses as $key => $name) {
            FooterContactAddress::create($name);
        }
    }
}
