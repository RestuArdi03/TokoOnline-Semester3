<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Anggota::create([
            'nama'=>'Michael Susanto',
            'nim'=>'123456',
            'kelas'=>'19.8A.90',
            'hp'=>'081234567890'
        ]);
        Anggota::create([
            'nama'=>'Burhan Alexander',
            'nim'=>'123457',
            'kelas'=>'19.8A.90',
            'hp'=>'081234567891'
        ]);
        Anggota::create([
            'nama'=>'Ricardo Sugiharto',
            'nim'=>'123458',
            'kelas'=>'19.8A.90',
            'hp'=>'081234567892'
        ]);
        Anggota::create([
            'nama'=>'Slamet Alberto',
            'nim'=>'123459',
            'kelas'=>'19.8A.90',
            'hp'=>'081234567893'
        ]);
    }
}
