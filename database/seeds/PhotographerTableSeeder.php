<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotographerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photographers')->insert([
            "name" => "Nick Reynolds",
            "phone" => "555-555-5555",
            "email" => "nick.reynolds@domain.co",
            "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            "profile_picture" => "img/profile.jpg",
        ]);
    }
}
