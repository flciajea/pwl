<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programstudi')->insert([
            ['nama' => 'Teknik Informatika', 'Fakultas_idFakultas' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kedokteran', 'Fakultas_idFakultas' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Psikologi', 'Fakultas_idFakultas' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);        
    }
}
