<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "email"=>"anantapk03@gmail.com",
            "password"=> bcrypt("developers"),
            "level"=>"Admin",
            "nama" => "Admin",
            "tanggal_lahir"=>"05-01-2015",
            "image"=>"hana.jfif",
            "tempat_lahir"=>"Cirebon",
            "is_Active"=> 1 
        ]);
    }
}
