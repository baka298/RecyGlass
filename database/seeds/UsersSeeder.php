<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "company" => "RecyGlass",
                "site" => "www.google.com",
                "image" => "admin.jpg",
                "email" => "admin@molengeek.com",
                "password" => bcrypt("admin"),
                "address" => "Oujda university Maroc",
                "category" => "Admin",
                "role_id" => 1
            ],
        ]);
    }
}
