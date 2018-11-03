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
                "site" => "recyglass.com",
                "image" => "nom_image",
                "email" => "admin@molengeek.com",
                "password" => bcrypt("admin"),
                "address" => "Oujda university Maroc",
                "category" => "Admin",
                "role_id" => 1
            ],
            [
                "company" => "Autre",
                "site" => "recyglass.com",
                "image" => "nom_image",
                "email" => "partner@molengeek.com",
                "password" => bcrypt("admin"),
                "address" => "Oujda university Maroc",
                "category" => "Partner",
                "role_id" => 2
            ],
            [
                "company" => "Autre",
                "site" => "recyglass.com",
                "image" => "nom_image",
                "email" => "guest@molengeek.com",
                "password" => bcrypt("admin"),
                "address" => "Oujda university Maroc",
                "category" => "Guest",
                "role_id" => 3
            ],
        ]);
    }
}
