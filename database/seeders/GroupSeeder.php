<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            [
                'name' => 'SMKN 1 Mejayan',
                'description' => 'Grup untuk siswa/siswi SMKN 1 Mejayan',
                'code' => 'Mejayan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SMKN 1 Probolinggo',
                'description' => 'Grup untuk siswa/siswi SMKN 1 Probolinggo',
                'code' => 'Smexa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SMKN 1 Kepanjen',
                'description' => 'Grup untuk siswa/siswi SMKN 1 Kepanjen',
                'code' => 'Kanesa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
