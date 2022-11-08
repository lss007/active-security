<?php

namespace Database\Seeders;

use App\Models\PageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $page_category = [
                ['page_cat_name' => ' objekt-und-werkschutz'],
                ['page_cat_name' =>  'centerbewachung'],
                ['page_cat_name' =>  'kaufhausdetektive'],
                ['page_cat_name' =>  'baustellenbewachung'],
                ['page_cat_name' =>  'opening-and-closing-service'],
                ['page_cat_name' =>  'revierfahrten'],
                ['page_cat_name' =>  'empfangsdienst'],
                ['page_cat_name' =>  'shop-guard'],
                ['page_cat_name' =>  'veranstaltungsschutz'],
                ['page_cat_name' =>  'unternehmen'],
                ['page_cat_name' =>  'Jobs'],
                ['page_cat_name' =>  'Kontakt']

        ];
          foreach ( $page_category as $key => $name) {
            PageCategory::create($name);
        }

           

    }
}
