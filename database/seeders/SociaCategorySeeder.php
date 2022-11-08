<?php

namespace Database\Seeders;

use App\Models\SociaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SociaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $social_category = [
            [ 'name' => 'Linkedin'],
            [ 'name' => 'Xing'],
            [ 'name' => 'Instagram'],
            [ 'name' => 'Facebook'],
            [ 'name' => 'Twitter'],
            [ 'name' => 'Pinterest'],
            [ 'name' => 'Tumblr']
        ];
          foreach ( $social_category as $key => $name) {
            SociaCategory::create($name);
        }
      
    }
}
