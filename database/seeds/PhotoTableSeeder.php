<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "Nandhaka Pieris",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape1.jpg",
            "date" => "2015-05-01",
            "featured" => true
        ]);
        
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "New West Calgary",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape2.jpg",
            "date" => "2016-05-01",
            "featured" => false
        ]);
        
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "Australian Landscape",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape3.jpg",
            "date" => "2015-02-02",
            "featured" => false
        ]);
        
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "Halvergate Marsh",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape4.jpg",
            "date" => "2014-04-01",
            "featured" => true
        ]);
        
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "Rikkis Landscape",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape5.jpg",
            "date" => "2010-09-01",
            "featured" => false
        ]);
        
        DB::table('photos')->insert([
            "photographer_id" => 1,
            "title" => "Kiddi Kristjans Iceland",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape6.jpg",
            "date" => "2015-07-21",
            "featured" => true
        ]);
    }
}
