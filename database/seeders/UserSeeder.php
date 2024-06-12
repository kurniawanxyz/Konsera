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
            "name" => "Admin Konsera",
            "email" => "admin@gmail.com",
            "password" => bcrypt("konsera-admin123"),
            "role" => "admin"
        ]);

        User::create([
            "name" => "Yafy Habibi",
            "email" => "user@gmail.com",
            "password" => bcrypt("yafi12345"),
            "role" => "user"
        ]);
        User::create([
            "name" => "Adi Kurniawan",
            "email" => "adi@gmail.com",
            "password" => bcrypt("kurniawan12345"),
            "role" => "user"
        ]);

        $this->call(InstrumenKonsera::class);
    }
}
