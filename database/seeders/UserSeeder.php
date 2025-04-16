<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nip' => 700001,
                'nama' => 'Andi Admin',
                'password' => bcrypt('admin123'),
                'email' => 'andi@gmail.com',
                'ProgramStudi_idProgramStudi' => 1,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 700002,
                'nama' => 'Budi Kaprodi',
                'password' => bcrypt('kaprodi123'),
                'email' => 'budi@gmail.com',
                'ProgramStudi_idProgramStudi' => 1,
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 800001,
                'nama' => 'Jea',
                'password' => bcrypt('admin123'),
                'email' => 'jea@gmail.com',
                'ProgramStudi_idProgramStudi' => 2,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 800002,
                'nama' => 'Feli',
                'password' => bcrypt('kaprodi123'),
                'email' => 'feli@gmail.com',
                'ProgramStudi_idProgramStudi' => 2,
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 2372053,
                'nama' => 'Andrea',
                'password' => bcrypt('mahasiswa123'),
                'email' => 'andrea@gmail.com',
                'ProgramStudi_idProgramStudi' => 1,
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 2392001,
                'nama' => 'Cece',
                'password' => bcrypt('mahasiswa123'),
                'email' => 'cece@gmail.com',
                'ProgramStudi_idProgramStudi' => 2,
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
