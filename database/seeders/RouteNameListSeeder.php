<?php

namespace Database\Seeders;

use App\Models\RouteNameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteNameListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $route_name_list = array(
            array( 'route_name' => 'objekt-und-werkschutz', 'route_link' =>   'ObjektPage'),
              array(   'route_name' => 'centerbewachung',  'route_link' =>   'CenterbewachungPage'),
             array(    'route_name' => 'kaufhausdetektive', 'route_link' =>   'KaufhausdetektivePage'),
              array(   'route_name' => 'baustellenbewachung',  'route_link' =>   'baustellenbewachungPage'),
              array(   'route_name' => 'oeffnungs-und-schliessdienst', 'route_link' =>   'openingAndclosingPage'),
              array(   'route_name' => 'revierkontrollen',  'route_link' =>   'revierfahrtenPage'),
              array(   'route_name' => 'empfangsdienst',  'route_link' =>   'empfangsdienst'),
              array(   'route_name' => 'shop-guard',   'route_link' =>   'ShopGuardPage'),
              array(   'route_name' => 'veranstaltungsschutz',  'route_link' =>   'VeranstaltungsSchutzPage'),
              array(   'route_name' => 'unternehmen',   'route_link' =>   'UnternehmenPage'),
              array(   'route_name' => 'jobs',    'route_link' =>   'JobsPage'),
              array(   'route_name' => 'kontakt',  'route_link' =>   'ContactPage'),
              array(   'route_name' => 'impressum',   'route_link' =>   'ImpressumPage'),
              array(   'route_name' => 'datenschutz',    'route_link' =>   'DatenschutzPage'),
              array(   'route_name' => 'Agb',   'route_link' =>    'AgbPage')
 

          );
                  foreach ( $route_name_list as $key => $name) {
                    RouteNameList::create($name);
                }
    }
}
