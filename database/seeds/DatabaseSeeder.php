<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('infos')->insert([
            "name"=>'Youssef Mahmoed',
            'photo'=>'avatar.png',
            'icon'=>'avatar.png',
            "jobs"=>"jop name 1 , jop name 2",
            "email" =>"admin@admin.com",
            "phone"=>"0102756894",
            "locat"=>'Egypt Giza October',
        ]);
        DB::table('abouts')->insert([
            "head"=>"",
            "body"=>""
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
