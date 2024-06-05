<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Adi Kurniawan",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password"),
            "role" => "admin"
        ]);

        User::create([
            "name" => "Yafy Habibi",
            "email" => "user@gmail.com",
            "password" => bcrypt("password"),
            "role" => "user"
        ]);
    }
}
