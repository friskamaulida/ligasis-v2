<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Admin
        $admin = User::create([
            'name' => 'ligasis',
            'email' => 'ligasis@ligasis.co.id',
            'password' => Hash::make('ligasis84*'),
            'role' => 'admin',
        ]);

        // Guru
        $guruUser = User::create([
            'name' => 'guru1',
            'email' => 'guru1@ligasis.co.id',
            'password' => Hash::make('ligasis'),
            'role' => 'guru',
        ]);

        $guru = Guru::create([
            'user_id' => $guruUser->id,
            'nip' => '198001010001',
            'nama' => 'Bu Lina',
        ]);

        // Kelas
        $kelas = Kelas::create([
            'nama' => 'Kelas 6A',
            'guru_id' => $guru->id,
        ]);

        // Siswa
        $siswaUser = User::create([
            'name' => 'siswa1',
            'email' => 'siswa1@ligasis.co.id',
            'password' => Hash::make('ligasis'),
            'role' => 'siswa',
        ]);

        $siswa = Siswa::create([
            'user_id' => $siswaUser->id,
            'kelas_id' => $kelas->id,
            'nis' => '2023123456',
            'nama' => 'Ani',
            'alamat' => 'Jl. Merdeka No. 123',
        ]);

        // Nilai
        Nilai::create([
            'siswa_id' => $siswa->id,
            'matakuliah' => 'Matematika',
            'tugas' => 80,
            'uts' => 85,
            'uas' => 90,
        ]);

        $this->call([
        NewsSeeder::class,
    ]);

    }




}
