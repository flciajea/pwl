<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert([
            ['nama' => 'Fakultas Teknologi dan Rekayasa Cerdas', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Fakultas Kedokteran', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Fakultas Psikologi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
