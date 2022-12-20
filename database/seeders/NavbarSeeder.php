<?php

namespace Database\Seeders;

use App\Models\Navbar;
use App\Models\RouteNameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $routenamelist =   RouteNameList::all();
        // foreach($routenamelist as $val){
        //     $savenav =  new  Navbar();
        //     if(  $val->id == 10 || $val->id == 11  || $val->id == 12 || $val->id == 16 ){
        //     $savenav->route_name	= $val->route_name ?? Null;
        //     $savenav->route_link	=  $val->id ?? Null;
        //     $savenav->save();
        // }

        // }
        $navbars = array(
            array('route_name' => 'unternehmen','route_link' => '10','ordering' => '3','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('route_name' => 'jobs','route_link' => '11','ordering' => '4','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('route_name' => 'kontakt','route_link' => '12','ordering' => '5','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('route_name' => 'Home','route_link' => '16','ordering' => '1','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('route_name' => 'Dienstleistungen','route_link' => 'NULL','ordering' => '2','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
          );
  
        foreach ($navbars as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
